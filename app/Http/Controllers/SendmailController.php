<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    public function store (Request $request)
    {
        $subject = $request->subject;
        $message = $request->message;
        $emailList = explode(',', $request->input('emails-list'));

        $data = [
            'subject' => $subject,
            'message' => $message,
        ];

        foreach ($emailList as $email) {
            $email = trim($email);
            Mail::to($email)->send(new Sendmail($data));
        }

        return redirect()->back()->with('success', 'E-mail(s) enviado(s) com sucesso!');

    }
}
