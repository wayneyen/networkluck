<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class SendController extends Controller
{
  public function send(Request $request)
  {
    if ($request->mobile == "" && $request->email == "" && $request->contact == "") {
      return [
        'error_code' => 503,
        'error_msg' => '請至少輸入一種聯絡方式'
      ];
    }

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = env('RECAPTCHA_SECRET');
    $recaptcha_url .= '?secret=' . $recaptcha_secret;
    $recaptcha_url .= '&response=' . $request->token;
    $recaptcha = file_get_contents($recaptcha_url);
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->score >= 0.5) {
      Mail::to('wayway1974@hotmail.com')
        // ->cc('ilovenancy72@gmail.com')
        ->send(new ContactMail($request));

      return [
        'error_code' => 0,
        'error_msg' => '我們已經收到您的需求，會盡快跟您聯絡，謝謝'
      ];
    } else {
      return ['error_code' => 503];
    }
  }
}
