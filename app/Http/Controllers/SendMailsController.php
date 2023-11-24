<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mail\SendMails;
use App\Mail\SendContactMails;
use Illuminate\Http\Request;

class SendMailsController extends Controller
{
    public function store(Request $request)
    {
        $this->validations($request);

        $request['subject'] = $request->subject;

        if ($request->subject == 'Asztalfoglalás') {
            $open = $this->checkOpenHours($request->checkin, $request->time);

            if (!$open) {
                return back()->with('error', 'Erre az időpontra nem tud foglalni asztalt mert az éttermünk zárva tart!');
            }

            $privateEvent = $this->privateEvent($request->checkin, $request->time);

            if ($privateEvent) {
                return back()->with('error', 'Erre az időpontra nem tud foglalni asztalt mert az éttermünk zártkörű esemény miatt zárva tart!');
            }

            \Mail::to(env('MAIL_TO_ADDRESS'), 'Spaletta Kecskemét')
                ->send(new SendMails($request->all()));

            return back()->with('success', 'Az asztalfoglalás sikeresen elküldve!');
        } elseif ($request->subject == 'Kapcsolat') {
            \Mail::to(env('MAIL_TO_ADDRESS'), 'Spaletta Kecskemét')
                ->send(new SendContactMails($request->all()));

            return back()->with('success', 'A levél sikeresen elküldve!');
        }
    }

    public function validations(Request $request)
    {
        // $request->validate([
        //     'g-recaptcha-response' => 'required|captcha'
        // ]);

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        if ($request->matchmaker) {
            $request->validate([
                'matchmaker' => 'required'
            ]);
        }

        if ($request->phone) {
            $request->validate([
                'phone' => 'required'
            ]);
        }

        if ($request->message) {
            $request->validate([
                'message' => 'required'
            ]);
        }

        if ($request->checkin) {
            $request->validate([
                'checkin' => 'required'
            ]);

            $request['checkin'] = Carbon::parse($request->checkin)->format('Y-m-d');
        }

        if ($request->time) {
            $request->validate([
                'time' => 'required'
            ]);
        }

        if ($request->persons) {
            $request->validate([
                'persons' => 'required'
            ]);
        }
    }

    public function privateEvent($date, $time)
    {
        if ($date == '2021-08-28' && $time >= '13:40') {
            return true;
        }

        return false;
    }

    public function checkOpenHours($checkin, $time)
    {
        $day = Carbon::parse($checkin)->format('l');

        if ($day === 'Monday') {
            return false;
        } elseif ($day === 'Tuesday') {
            return false;
        } elseif ($day === 'Sunday' && $time >= '15:00') {
            return false;
        } elseif ($time < '11:30' || $time > '22:40') {
            return false;
        } elseif ($checkin === '2023-11-28') {
            return false;
        }


        return true;
    }
}
