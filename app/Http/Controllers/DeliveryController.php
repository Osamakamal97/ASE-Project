<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Http\Requests\StoreDeliveryRequest;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        return view('delivery');
    }

    public function create()
    {
        return view('deliveryRegistration');
    }

    public function store(StoreDeliveryRequest $deliveryRequest)
    {
        Delivery::create($deliveryRequest->validated());
        return redirect()->back()->with('success', 'Delivery registered successfully.');
    }
}
