<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //
    public function contact()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $data = $this->getDate($request);
        $data = ContactUs::create($data);
        Mail::to('admin@premaxcorp.com')->send(new \App\Mail\ContactUs($data));
        return redirect()->back()->with('success', "Message Sent Successfully, We Will Get Back To You Soon");
    }

    protected function getDate(Request $request)
    {
        $rules = [
          'first_name' => 'required',
          'last_name' => 'required',
          'email' => 'required',
          'phone' => 'required',
//          'country' => 'required',
//          'reason' => 'required',
//          'rel_to_premax' => 'required',
          'message' => 'required',
        ];
        return $request->validate($rules);
    }
}
