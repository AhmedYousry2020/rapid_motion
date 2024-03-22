<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Notifications\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{

   public function index()
   {

    return view('index');
   }
   public function contact()
   {

    return view('contact');
   }
   public function about()
   {

    return view('about');
   }

   public function register()
   {

    return view('registeration');
   }

   public function services()
   {

    return view('services');
   }


   public function contactUs(ContactRequest $request)
   {
        $data = $request->validated();
        $users= [];
        $info = array('details'=>$data);
        Mail::send('mail', $info , function($message) use ($data) {
            $message->to('info@raus.sa', 'raus')->subject
               ('New Message');
            $message->from($data['email'], $data['name']);
         });
        return redirect()->back()->with('success', __('general.Send Successfully'));
   }
}
