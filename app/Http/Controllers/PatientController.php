<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function createPatient(Request $request)
    {
        return view("backend.patients.create_patient");
    }
    public function getPatientList(Request $request)
    {
        return view("backend.patients.patient_list");
    }
}
