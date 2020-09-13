<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function createReceptionist(Request $request)
    {
        return view("backend.receptionists.create_receptionist");
    }
    public function getReceptionistList(Request $request)
    {
        return view("backend.receptionists.receptionist_list");
    }
}
