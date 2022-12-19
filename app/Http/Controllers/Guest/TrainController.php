<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;
// il controllore deve assumersi la responsabilità di visionare i biglietti
class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('trains.train', compact('trains'));
    }
}
