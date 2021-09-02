<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm(Request $request) {
        return view('contact');
    }
    public function storeForm(Request $request) {

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'sujet'=>'required',
                'message' => 'required'
             ]);
    

            ContactUs::create($request->all());

            Mail::send('email', array(
                'nom' =>$request->get('nom'),
                'email'=>$request->get('email'),
                'téléphone'=>$request->get('téléphone'),
                'sujet'=>$request->get('sujet'),
                'form_message'=>$request->get('message')
            ), function($message) use ($request) {
                $message->from($request->email);
                $message->to('sofianleguen60@gmail.com', 'Hello Admin')->subject($request->get('sujet'));
            });

            return back()->with('success', 'Merci de nous avoir contacté !');
            
    }
}
