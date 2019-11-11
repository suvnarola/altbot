<?php

namespace App\Http\Controllers\FrontEnd;

use App\Blog;
use App\Payment;
use App\Robot;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class FrontEndController extends Controller
{

	public function index()
	{

		$data = DB::select("SELECT year(date) as dates, SUM(equity) AS equity FROM graph_data GROUP BY year(date)");
		$graph[] = ['Month', 'Equity'];
		foreach ($data as $key => $value) {
			$time =  strtotime($value->dates);
			$graph[++$key] = [$value->dates, (int) $value->equity];
		}
		$graph = json_encode($graph);
		return view('frontend.index', compact('graph'));
	}

	public function yearDbQuery($type)
	{
		$start = Carbon::now()->startOfYear()->format('Y-m-d');
		$end = Carbon::now()->endOfYear()->format('Y-m-d');
		$data = DB::select("SELECT DATE_FORMAT(selected_date,'%d/%b/%Y') as dates,coalesce(equity,0) as equity from 
		(select * from 
		(select adddate('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) selected_date from
		(select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t0,
		(select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t1,
		(select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t2,
		(select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t3,
		(select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t4) v
		where (selected_date between '$start' and '$end')  
		) t
		left join 
		$type t1
		on t.selected_date=t1.date  order by t1.date");
		$graph[] = ['Month', 'Equity'];
		foreach ($data as $key => $value) {
			$time =  strtotime($value->dates);
			$graph[++$key] = [$value->dates, (int) $value->equity];
		}

		return json_encode($graph);
	}


	public function allDbQuery($type)
	{

		$data = DB::select("SELECT year(date) as dates, SUM(equity) AS equity FROM $type GROUP BY year(date)");
		$graph[] = ['Month', 'Equity'];
		foreach ($data as $key => $value) {
			$time =  strtotime($value->dates);
			$graph[++$key] = [$value->dates, (int) $value->equity];
		}
		return json_encode($graph);
	}

	public function monthDbQuery($month, $type)
	{
		$now = Carbon::now()->format('Y-m-d');
		$old = Carbon::now()->subMonth($month)->startOfMonth()->format('Y-m-d');
		$period = CarbonPeriod::create($old, $now);

		// Iterate over the period
		foreach ($period as $date) {
			$dates[] =  $date->format('Y-m-d');
		}

		$date = "'" . implode("', '", $dates) . "'";

		$data = DB::select("SELECT selected_date as dates,g.equity from (select adddate('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) selected_date from (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t0, (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t1, (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t2, (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t3, (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t4) v LEFT JOIN $type g ON g.date = v.selected_date where (selected_date between '$old' and '$now')  order by v.selected_date");

		$graph[] = ['Month', 'Equity'];
		foreach ($data as $key => $value) {
			$time =  strtotime($value->dates);
			$graph[++$key] = [$value->dates, (int) $value->equity];
		}

		return json_encode($graph);
	}



	public function statistics()
	{
		return view('frontend.statistics');
	}
	public function work()
	{
		return view('frontend.work');
	}

	public function instructions()
	{
		return view('frontend.instruction');
	}

	public function blog(Request $request)
	{
		$method = $request->method();
		if (!empty($request->q) && $method = "POST") {
			$term = $request->q;
			$blogs = Blog::where('title', 'LIKE', '%' . $term . '%')->where('status', '1')->paginate(5);
		} else if (!empty($request->tags)  && $method = "POST") {
			$tags = "'" . $request->tags . "'";
			$blogs = Blog::selectRaw("*")
				->where('status', '1')
				->whereRaw('FIND_IN_SET(' . $tags . ',tags)')
				->paginate(5);
		} else {
			$blogs = Blog::where('status', '1')->paginate(5);
		}
		return view('frontend.blog', compact('blogs'));
	}

	public function blog_details($id)
	{
		$blog = Blog::find($id);
		return view('frontend.blog-detail', compact('blog'));
	}
	public function contact()
	{
		return view('frontend.contact');
	}

	public function contactUs(Request $request)
	{

		\Mail::send(
			'emails.email',
			array(
				'name' => $request->get('name'),
				'email' => $request->get('email'),
				'user_message' => $request->get('message')
			),
			function ($message) {
				$message->from('info@altbot.net');
				$message->to('info@altbot.net', 'Admin')->subject('Albot Contact Us');
			}
		);
	}

	public function login()
	{

		$user = Auth::user();
		if ($user) {
			return redirect()->route('frontend.dashboard');
		}
		return view('frontend.auth.login');
	}

	public function doLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
		]);

		$check = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
		if ($check) {
			if (Auth::user()->type == '0') {
				if (Auth::user()->verified == '0') {
					return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
						'invalid' => 'You need to confirm your account. We have sent you an activation code, please check your email..',
					]);
				} else {
					return redirect('/dashboard');
				}
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

	public function register(Request $request)
	{
		$user = Auth::user();
		if ($user) {
			return redirect()->route('frontend.dashboard');
		}

		return view('frontend.auth.register');
	}

	public function captcha(Request $request)
	{

		$this->validate($request, [
			'email' => 'unique:users,email',
		]);
		$data = json_encode($request->all());
		return view('frontend.captcha', compact('data'));
	}

	public function logout()
	{
		Auth::logout();
		return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : 'login');
	}

	public function emailBlade()
	{
		return view('emails.emailconfirm');
	}

	public function paymentBlade()
	{
		$download_link = "";
		return view('emails.zip', compact('download_link'));
	}

	public function paymentConfirmBlade()
	{
		$download_link = "";
		return view('emails.payment', compact('download_link'));
	}
	public function reset()
	{
		$url = "";
		return view('emails.reset', compact('url'));
	}
	public function verification()
	{
		$email_token = "";
		return view('emails.verification-email', compact('email_token'));
	}

	public function thankyou(Request $request)
	{
		$user_id = \Auth::user()->id;
		$transaction_id = md5(uniqid($user_id, true));
		$data = json_decode($_COOKIE['data']);
		$data = json_decode(json_encode($data), True);
		$data['user_id'] = $user_id;
		$cookie = \Cookie::forget('data');
		if ($transaction_id) {
			if ($payment = Payment::where('transaction_id', $transaction_id)->first()) {
				$payment_id = $payment->id;
			} else {
				$payment = new Payment;
				$payment->user_id = $user_id;
				$payment->item_number = '0';
				$payment->amount = '199.00';
				$payment->transaction_id = $transaction_id;
				$payment->currency_code = "EUR";
				$payment->payment_status = "1";
				$payment->save();
				$payment_id = $payment->id;
				Robot::create($data);
				$user = User::find($user_id);
				\Mail::send('emails.payment', $data, function ($message) use ($data, $user) {
					$message->subject('Purchase Notification');
					$message->to($user->email);
				});
			}
			\Cookie::forget('data');
			\Cookie::forget('broker');
			return view('frontend.thank_you');
		}
	}

	public function isEmailAvailable(Request $request){
		$user = User::where('email',$request->email)->get();
		if(count($user)>0){
			echo(json_encode("Email Already Exist")); 
		}else{
			echo(json_encode(true)); 
		}
	}
}
