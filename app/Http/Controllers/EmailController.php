<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request){

        $email_title = $request->input('title');
        $email_from = $request->input('email');
        $text = $request->input('text');
            
        $email_message = "Email wysłany przez ".$email_from."<br>".$text;

        $email_from_header = "Content-Type: text/html; charset=UTF-8";
        $to = "biuro@kw-energy-solutions.pl";

        if(mail($to, $email_title, $email_message, $email_from_header)){
            return back()->with('send', 'Wiadomość została wysłana.');
        }else{
            return back()->with('error', 'Wysłanie wiadomości nie powiodło się. Upewnij się, że wszystkie wszystkie informacje zostały poprawnie wprowadzone.');
        }
        
    }
}
