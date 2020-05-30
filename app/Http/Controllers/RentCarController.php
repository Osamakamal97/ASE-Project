<?php

namespace App\Http\Controllers;

use App\Delivery;
use Illuminate\Http\Request;

class RentCarController extends Controller
{
    public function index()
    {
        return view('rentCar');
    }

    public function create()
    {
        return view('rentCarRegistration');
    }

    public function show($index){
        dd(Delivery::all());
    }

}
