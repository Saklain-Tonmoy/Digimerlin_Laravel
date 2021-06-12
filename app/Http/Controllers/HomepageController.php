<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\ContactForm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomepageController extends Controller
{
    public function contact_us(Request $request) {
    
        $input = $request->all();

        Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'content' => $input['content'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('digimerlin2021@gmail.com')->subject($request->get('subject'));
        });
    }

    public function subscribe(Request $request) {

        $subscriber = new Subscriber();

        $subscriber->email = $request->email;

        $subscriber->save();
    }
}
