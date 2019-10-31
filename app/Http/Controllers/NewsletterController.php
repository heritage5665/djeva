<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\NewsletterMessage;
use Illuminate\Http\Request;
use App\PHPMailer;
use Illuminate\Support\Facades\Auth;

class NewsLetterController extends Controller
{



    public function createMessage()
    {
        return view('/newsletter.createMessage', ['success' => '']);
    }

    public function deleteSubscriber($id)
    {
        Newsletter::where('newsletterid', '=', $id)
            ->delete();
        return redirect('admin/newsletter/subscribers');
    }



    public function sendMessage(Request  $request, NewsletterMessage $message, Newsletter $subscribers)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'message' => 'required|string',

        ]);

        $subscribers = $subscribers::all();
        $title = $request->input('title');
        $body = $request->input('message');

        $mail = new PHPMailer();
        $mail->IsSMTP(); //using SMTP
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "djevalasting@gmail.com";
        $mail->Password = "djevasecret";
        $mail->From = "from@djevalasting.com";
        $mail->Subject = " Djevalating Newsletter" . $title;

        foreach ($subscribers as $n) {
            $mail->AddAddress($n['email']);
            $mail->Body = "Hi Good, This is the Newsleter for the week. \n\n\n $body";
            if ($mail->Send()) {

                $message->title = $request->input('title');
                $message->message = $request->input('message');
                try {
                    $message->save();
                    return view('/newsletter/createmessage')->with('success', 'message sent');
                } catch (Exception $e) {
                    return  redirect()->back()->with('error', $e);
                }
            } else {
                $error =  "Message was not sent because of error:<br/> $mail->ErrorInfo";
                return redirect()->back()->with('error', $error);
            }


            $mail->ClearAddresses();
        }
    }
}
