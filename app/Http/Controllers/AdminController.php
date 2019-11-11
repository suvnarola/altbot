<?php

namespace App\Http\Controllers;


use App\User;
use App\NewsLetter;
use App\Payment;
use App\Robot;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
	public function __construct()
	{
		// \Artisan::call('config:cache');
		return true;
	}

	public function index()
	{
		return view('admin.auth.login');
	}

	public function login(Request $request)
	{

		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
		]);
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			if (Auth::user()->type == '1') {
				return redirect('admin/dashboard');
			} else {
				Auth::logout();
				return redirect()->route('frontend.index');
			}
		} else {
			return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
				'invalid' => 'Invalid Email Or Password.',
			]);
		}
	}

	public function dashboard()
	{
		return view('admin.template');
	}

	public function logout()
	{
		Auth::logout();
		return redirect('admin');
	}

	public function forgotPassword()
	{
		return view('admin.auth.forgotpassword');
	}

	public function users()
	{
		$users = User::where('type', '0')->where('deleted', '0')->get();
		return view('admin.users.index', compact('users'));
	}

	public function transaction()
	{
		$payments = Payment::with('user')->get();
		return view('admin.users.transaction', compact('payments'));
	}
	public function removeUser(Request $request)
	{
		$id = $request->id;
		\DB::table('users')
			->where('id', $id)
			->update(['deleted' => "1"]);
		return "deleted";
	}
	public function removeSubscribedUser(Request $request)
	{

		$id = $request->id;
		\DB::table('newsletters')
			->where('id', $id)
			->update(['deleted' => "1"]);
		return "deleted";
		// return  redirect('admin/user/subscriber-list')->with('status', 'Subscriber has been deleted Successfully');
	}

	public function changeConfig()
	{
		// dd(\Config::get('paypal')['settings']['mode']);
		return view('admin.paypal-configuration');
	}

	public function updateConfig(Request $request)
	{
		$data = $request->except('_token');

		if ($this->putPermanentEnv($data)) {
			return  redirect()->back()->with('status', 'Configuration Updated');
		} else {
			return  redirect()->back()->with('errors', 'Error in Updating Configuration! Please Try Again Later');
		}
	}

	public function putPermanentEnv($data = array())
	{
		if (count($data) > 0) {

			// Read .env-file
			$env = file_get_contents(base_path() . '/.env');

			// Split string on every " " and write into array
			$env = preg_split('/\s+/', $env);

			// Loop through given data
			foreach ((array) $data as $key => $value) {

				// Loop through .env-data
				foreach ($env as $env_key => $env_value) {

					// Turn the value into an array and stop after the first split
					// So it's not possible to split e.g. the App-Key by accident
					$entry = explode("=", $env_value, 2);

					// Check, if new key fits the actual .env-key
					if ($entry[0] == $key) {
						// If yes, overwrite it with the new one
						$env[$env_key] = $key . "=" . $value;
					} else {
						// If not, keep the old one
						$env[$env_key] = $env_value;
					}
				}
			}

			// Turn the array back to an String
			$env = implode("\n", $env);

			// And overwrite the .env with the new data
			file_put_contents(base_path() . '/.env', $env);
			\Artisan::call('config:cache');
			return true;
		} else {
			\Artisan::call('config:cache');
			return false;
		}
	}

	public function changePassword()
	{
		return view('admin.change-password');
	}

	public function postCredentials(Request $request)
	{
		if (Auth::Check()) {
			$request_data = $request->All();
			$validator = $this->admin_credential_rules($request_data);
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			} else {
				$current_password = Auth::User()->password;
				if (Hash::check($request_data['current-password'], $current_password)) {
					$user_id = \Auth::User()->id;
					$obj_user = User::find($user_id);
					$obj_user->password = Hash::make($request_data['password']);;
					$obj_user->save();
					return  redirect()->back()->with('status', 'Password Updated Successfully');
				} else {
					$error = array('current-password' => 'Please enter correct current password');
					return redirect()->back()->withErrors($error)->withInput();
				}
			}
		} else {
			return redirect()->to('/');
		}
	}

	public function admin_credential_rules(array $data)
	{
		$messages = [
			'current-password.required' => 'Please enter current password',
			'password.required' => 'Please enter password',
		];

		$validator = \Validator::make($data, [
			'current-password' => 'required',
			'password' => 'required|same:password',
			'password_confirmation' => 'required|same:password',
		], $messages);

		return $validator;
	}


	public function robot()
	{
		$robots = Robot::with('user')->get();
		return view('admin.robot.index', compact('robots'));
	}

	public function upload()
	{
		return view('admin.robot.uploadzip');
	}

	public function uploadZip(Request $request)
	{
		$id = $request->id;
		$file =  $request->file('zip');
		$random_digit = uniqid(rand(), true);
		$new_file_name = $file->getClientOriginalName();
		$path = $file->path();
		$allowedfileExtension = ['application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed'];
		$filename = $new_file_name;
		$destinationPath = 'robot';
		$extension = $file->getClientOriginalExtension();
		$check = in_array($extension, $allowedfileExtension);
		$file->move($destinationPath, $filename);
		Robot::where('id', $id)->update(['compile_file' => $filename]);
		return redirect()->route('robot')->with('status', 'File Uploaded Successfully!');
	}

	public function sendZip($id)
	{
		$robot = Robot::find($id)->toArray();
		$user = User::find($robot['user_id'])->toArray();
		$download_link = url('/') . "/robot/" . $robot['compile_file'];
		$email = $user['email'];
		$mail = \Mail::send('emails.zip', ['download_link' => $download_link], function ($message) use ($robot, $user) {
			$message->subject('Robot Download Link');
			$message->to($user['email']);
		});
		Robot::where('id', $id)->update(['mail_sent' => '1']);


		return redirect()->route('robot')->with('status', 'Mail Sent Successfully!');
	}

	public function deleteRobot(Request $request)
	{

		$robot = Robot::find($request->id);

		unlink("robot/" . $robot->compile_file);

		Robot::where('id', $request->id)->update(['compile_file' => '']);
		echo "deleted";
	}
}
