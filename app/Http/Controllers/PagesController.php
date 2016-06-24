<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;

class PagesController extends Controller
{
    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function contact_store(ContactFormRequest $request) {
        return \Redirect::route('contact')
            ->with('message-info', 'Thanks for contacting us!');
    }
}
