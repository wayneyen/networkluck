<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class SendController extends Controller
{
    public function send(Request $request)
    {
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = env('RECAPTCHA_SECRET');

        // Make and decode POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $request->token);
        $recaptcha = json_decode($recaptcha);

        if ($recaptcha->score >= 0.5) {
            Mail::to('wayway1974@hotmail.com')
            // ->cc('ilovenancy@gmail.com')
                ->send(new ContactMail($request));

            return [ 'error_code' => 0 ];
        } else {
            return [ 'error_code' => 503 ];
        }
    }
}
