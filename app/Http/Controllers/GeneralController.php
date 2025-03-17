<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public $cars = [
        1 => ['marca' => 'BMW', 'modello' => 'M3', 'img' => '/media/bmw.svg'],
        2 => ['marca' => 'Ford', 'modello' => 'Mustang', 'img' => '/media/ford.png']
    ];

    public function homepage() {
        return view('welcome', ['cars' => $this->cars]);
    }

    public function secondPage() {
        return view('about-us');
    }

    public function thirdPage() {
        return view('contact-us');
    }

    public function dettaglioAuto($id) {
        if (!array_key_exists($id, $this->cars)) {
            return redirect(route('homepage'))->with('error', 'Auto non trovata!');
        }
    
        return view('dettaglio-auto', ['car' => $this->cars[$id]]);
    }    
}
