<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteQuestionController extends Controller
{
    public function RouteQuestion($room_id)
    {
        $rooms = [
            'room' => '200',
            'id' => '3'
        ];
        return view('RouteQuestion', $rooms);
    }
}
