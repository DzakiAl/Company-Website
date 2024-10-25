<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMail;

class MessageController extends Controller
{
    /**
     * send mail to website admin
     */
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'company' => ['required', 'string'],
            'position' => ['required', 'string'],
            'number_employees' => ['required', 'string'],
            'industry' => ['required', 'string'],
            'service' => ['required', 'string'],
            'details' => ['required', 'string'],
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'position'  => $request->position,
            'number_employees' => $request->number_employees,
            'industry' => $request->industry,
            'service' => $request->service,
            'details' => $request->details,
        ];

        Mail::to('dzakial@example.com')->send(new MessageMail($details));

        Message::create($data);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
