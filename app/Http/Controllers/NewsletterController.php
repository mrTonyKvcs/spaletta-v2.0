<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribed(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletters|max:255',
            'gdpr'  => 'required'
        ]);

        Newsletter::create($request->all());

        return back()->with('success', 'Sikeres hírlevél feliratkozás!');
    }

    public function unsubscribePage()
    {
        return view('pages.unsubscribe');
    }

    public function unsubscribe(Request $request)
    {
        $email = Newsletter::where('email', $request->email)->first();

        if (empty($email)) {
            return back()->with('error', 'Ezzel a email cimmel nincs hirlevel feliratkozas!');
        }

        $email->delete();

        return back()->with('success', 'Sikeres hírlevél leiratkozás!');
    }
}
