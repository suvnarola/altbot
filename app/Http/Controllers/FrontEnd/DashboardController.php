<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Payment;
use App\NewsLetter;
use App\User;
use App\Robot;
use Illuminate\Support\Facades\Validator;
use Config;

class DashboardController extends Controller
{
    public $mailchimp;
    public $listId = 'db57c17b4a';

    public function __construct(\Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    public function index()
    {
        $user = Auth::user();
        $payment = Payment::where('user_id', Auth::user()->id)->get();
        $robot = Robot::where('user_id', Auth::user()->id)->get();
        if ($user) {
            $type = Auth::user()->type;
            if ($type == '0') {
                return view('frontend.dashboard', compact('payment', 'user', 'robot'));
            } else {
                return redirect()->routes('frontend.dashboard');
            }
        } else {
            return redirect()->routes('frontend.dashboard');
        }
    }

    public function newsletter(Request $request)
    {
        try {
            $data =  $this->mailchimp
                ->lists
                ->subscribe(
                    $this->listId,
                    ['email' => $request->email]
                );
            echo "Thank you, you have signed up for our newsletter";
        } catch (\Mailchimp_List_AlreadySubscribed $e) {
            echo "Already signed up to our newsletter.";
        } catch (\Mailchimp_Error $e) {
            echo "Error From MailChimp. Please try again later";
        }
    }

    public function updateProfile(Request $request)
    {
        $fullname = explode(" ",  $request->name);
        $user = User::findOrFail(Auth::user()->id);
        $user->name = $fullname[0];
        $user->lastname = $fullname[1];
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return "1";
    }
    public function ajaxImage(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'file' => 'image',
            ],
            [
                'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
            ]
        );
        if ($validator->fails())
            return array(
                'fail' => true,
                'errors' => $validator->errors()
            );
        $extension = $request->file('file')->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('file')->move($destinationPath, $filename);
        $user = User::findOrFail(Auth::user()->id);
        $user->image = $filename;
        $user->save();
        return $filename;
    }
}
