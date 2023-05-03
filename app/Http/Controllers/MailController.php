<?php

namespace App\Http\Controllers;

use App\Mail\sendQuestionMail;
use App\Mail\sendOrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Rules\PhoneNumber;



class MailController extends Controller
{
    //
    public function sendQuestionMail(Request $request) {

        try {
            $validated = $request->validate([
                'sender_email' => ['required', 'email', 'max:50'],
                'sender_name' => ['required', 'string', 'max:50'],
                'sender_message' => ['required', 'string', 'max:255'],
                'sender_phone_number' => ['nullable', new PhoneNumber],
                'object_location'=>['nullable', 'string', 'max:50']]);
            //dd($validated);

            Mail::to(env("MAIL_USERNAME"))->send(new SendQuestionMail($request->sender_email,
                $request->sender_name,
                $request->sender_message,
                $request->sender_phone_number,
                $request->object_location));
            alert("Заявка успешно отправлена", 'success');
            return back();
        }
        catch (\Exception $e) {
            if($e->status == 422)
            {
                $readable_names = get_readable_form_errors(array_keys($e->validator->failed()));
           alert($readable_names, 'danger');
                return back();
                //return redirect()->getUrlGenerator()->previous();
            }
            else {
                return redirect()->route('main');
            }
        }

}

public function sendOrderMail (Request $request) {

        try {
            $validated = $request->validate([
                'product_name' => ['required', 'string'],
                'sender_name' => ['required', 'string', 'max:50'],
                'sender_email' => ['required', 'email', 'max:50'],
                'sender_message' =>['nullable', 'string', 'max:255'],
                'sender_phone_number' => ['nullable', new PhoneNumber],
                'object_location'=>['nullable', 'string', 'max:50']]);

            Mail::to(env("MAIL_USERNAME"))->send(new SendOrderMail($request->product_name,
            $request->sender_name,
                $request->sender_email,
                $request->sender_message,
                $request->sender_phone_number,
                $request->object_location));
            alert("Письмо для заказа успешно отправлено", 'success');
            return redirect()->back();
        }
        catch (\Exception $e) {
            if($e->status == 422)
            {
                $readable_names = get_readable_form_errors(array_keys($e->validator->failed()));
                alert($readable_names, 'danger');
                return back();
            }
            else {
                return redirect()->route('main');
            }
        }

}
}
