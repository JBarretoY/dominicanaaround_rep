<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reservation;
class ReservationController extends Controller
{

    public function update(Request $request, $id)
    {
        $reservation = Reservation::with('tours','vips','transfers')->find($id);
        $reservation->estado = $request->estado;
        $reservation->save();
        return $reservation;
    }
}
