<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'rfid' => ['required'],
        ]);
        
        
        $rfidData = new RfidData();
        $rfidData->rfid = $request->rfid;
        $rfidData->save();

        event(new RfidDataReceived($rfidData->rfid));

        return response()->json(['message' => 'Data saved successfully']);
    }
}
