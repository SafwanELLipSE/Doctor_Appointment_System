<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
  public function createDoctor(Request $request)
  {
      return view("backend.doctors.create_doctor");
  }
  public function getDoctorList(Request $request)
  {
      return view("backend.doctors.doctor_list");
  }
}
