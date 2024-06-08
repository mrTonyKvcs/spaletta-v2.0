<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mail\SendMails;
use App\Mail\SendContactMails;
use App\Models\Location;
use App\Models\Reservation;
use App\Models\ReservationException;
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
                return back()->with('error', 'Erre az időpontra nem tud foglalni asztalt!');
            }

            $privateEvent = $this->privateEvent($request->checkin, $request->time);

            if ($privateEvent) {
                return back()->with('error', 'Erre az időpontra nem tud foglalni asztalt mert az éttermünk zártkörű esemény miatt zárva tart!');
            }

            $request['day'] = $request['checkin'];
            $request['number_of_persons'] = $request['persons'];
            $request['location_id'] = Location::where('name', $request['locale'])->first()?->id;
            $request['reservation_for_tv'] = $request['matchmaker'] === 'Igen' ? 1 : 0;
            Reservation::create($request->all());

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
        } elseif ($this->checkForOverlap($checkin, $time)) {
            return false;
        }


        return true;
    }

    private function checkForOverlap($chekin, $time)
    {
        $overlappingReservations = ReservationException::where(function ($query) use ($chekin) {
            $query->where('day_from', $chekin)
                ->orWhere('day_to', $chekin)
                ->orWhere(function ($query) use ($chekin) {
                    $query->where('day_from', '<', $chekin)
                        ->where('day_to', '>', $chekin);
                });
        })->where(function ($query) use ($time) {
            $query->where('time_from', $time)
                ->orWhere('time_to', $time)
                ->orWhere(function ($query) use ($time) {
                    $query->where('time_from', '<', $time)
                        ->where('time_to', '>', $time);
                });
        })->get();

        if ($overlappingReservations->count()) {
            return true;
        }

        return false;
    }
}
