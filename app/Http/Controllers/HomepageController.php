<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomepageController extends Controller
{
    public function contact_us(Request $request) {
        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'required|string',
        //     'subject' => 'required',
        //     'message' => 'required|string'
        // ]);

        // dd('hello');

        // $data = $request->all();
        // return response()->json($data);

        // $email = $request->email;

        // dd($email);

        // Mail::send('Hello World!!!', function($message) use $request {
        //     $message->to()
        //     ->subject('test');
        // });
        

        $input = $request->all();

        $status = Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'content' => $input['content'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('digimerlin2021@gmail.com')->subject($request->get('subject'));
        });

        if($status) {
            return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
        } else {
            return redirect()->back()->with(['failure' => 'Something went wrong. Please try again.']);
        }

        

    }

    public function subscribe(Request $request) {
        $request->validate([
            'email' => 'required|email'
        ]);

        $subscriber = new Subscriber();

        $subscriber->email = $request->email;

        $status = $subscriber->save();

        if($status) {
            return redirect()->back()->with(['success' => 'Subscribed successfully']);
        } else {
            return back();
        }

    }
}
