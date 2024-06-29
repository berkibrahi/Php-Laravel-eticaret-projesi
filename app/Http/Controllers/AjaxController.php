<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContenFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
     public function contactSave(ContenFormRequest $request){
    //     $validationData = $request->validate([
    //         'firstName' => 'required|string|max:255',
    //         'lastName' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'subject' => 'required|string|max:255',
    //         'message' => 'required|string',
    //     ],
    //     [
    //         'firstName.required' => 'Ad alanı zorunludur.',
    //         'firstName.string' => 'Ad alanı metin olmalıdır.',
    //         'firstName.max' => 'Ad alanı en fazla 255 karakter olmalıdır.',
    //         'lastName.required' => 'Soyad alanı zorunludur.',
    //         'lastName.string' => 'Soyad alanı metin olmalıdır.',
    //         'lastName.max' => 'Soyad alanı en fazla 255 karakter olmalıdır.',
    //         'email.required' => 'Email alanı zorunludur.',
    //         'email.email' => 'Geçerli bir email adresi giriniz.',
    //         'email.max' => 'Email alanı en fazla 255 karakter olmalıdır.',
    //         'subject.required' => 'Konu alanı zorunludur.',
    //         'subject.string' => 'Konu alanı metin olmalıdır.',
    //         'subject.max' => 'Konu alanı en fazla 255 karakter olmalıdır.',
    //         'message.required' => 'Mesaj alanı zorunludur.',
    //         'message.string' => 'Mesaj alanı metin olmalıdır.',
    //     ]
    // );

      $newData=$request->all();
     $newData["ip"]=$request->ip();
    //   $data=[
    //     "firstName"=>$request->firstName,
    //     "lastName"=>$request->lastName,
    //     "email"=>$request->email,
    //     "subject"=>$request->subject,
    //     "message"=>$request->message,
    //     "ip"=>$request->ip()
    //   ];
      //$data["ip"]=$request->ip();
      $lastSave=Contact::create(($newData));
      return back()->with(["success"=>"başarıyla gönderildi"]);
    }

}
