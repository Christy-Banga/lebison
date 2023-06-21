<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ReservationMail;
use App\Models\Abonne;
use App\Models\Contact;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.home');
    }

    public function reservation(Request $request)
    {
        $data = [
            'name' => $request->name,
            /* 'email' => $request->email, */
            'phone' => $request->phone,
            'date' => $request->date,
            'heure' => $request->heure,
            'nbpersonne' => $request->nbpersonne,
            'message' => $request->message
        ];

        Mail::to('chris.banga07@gmail.com')->send(new ReservationMail($data));

        return redirect()->route('reservation');
    }

    public function contact(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'message' => $request->message
        ];

        Mail::to('lebison.grill@gmail.com')->send(new ContactMail($data));

        return redirect()->route('contact');
    }

    public function abonne(Request $request)
    {
        Abonne::create([
            'email' => $request->email
        ]);

        return redirect()->route('abonne');
    }
}
