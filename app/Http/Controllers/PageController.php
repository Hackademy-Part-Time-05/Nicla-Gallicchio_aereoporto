<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{


  public static $flights = [
    [
      'id' => 1,
      'destination' => 'Torino',
      'time' => [
        'departure' => '11:30',
        'arrival' => '15:00',
      ],
      'image' => "image/torino.jpg"
    ],
    [
      'id' => 2,
      'destination' => 'Basilea',
      'time' => [
        'departure' => '09:30',
        'arrival' => '11:00',
      ],
      'image' => "image/basilea.jpg"
    ],
    [
      'id' => 3,
      'destination' => 'Napoli',
      'time' => [
        'departure' => '17:30',
        'arrival' => '19:00',
      ],
      'image' => "image/napoli.jpg"
    ],
    [
      'id' => 4,
      'destination' => 'Basilea',
      'time' => [
        'departure' => '19:30',
        'arrival' => '23:00',
      ],
      'image' => "image/basilea2.jpg"
    ],
  ];
  public function homepage()
  {

    return view('homepage', ['voli' => self::$flights]);
  }

  public function list()
  {

    return view('list', ['voli' => self::$flights]);
  }

  public function show($id)
  {

    foreach (self::$flights as $volo) {
      if ($volo['id']==$id)   {
        return view('show', ['volo' => $volo]);
      }
    }
     abort(404);
  }

  public function contact()
  {

    return view('contact');
  }

  public function send(Request $request)
  {

    $request->validate([
      'name' => 'required|max:20',
      'phone' => 'required|numeric',
      'email'=> 'required|email',
      'message' => 'required|min:5',
    ]);

    $data=[
      'name' => $request->name,
      'phone' => $request->phone,
      'email'=> $request->email,
      'message' => $request->message,
    ];
    
    Mail::to($request->email)->send(new InfoMail($data));
    return redirect()->route('thankyou');
  }
}

  

