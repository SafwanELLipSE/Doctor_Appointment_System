<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function createTest(Request $request)
    {
          return view("backend.tests.create_test");
    }
    public function getTestList(Request $request)
    {
          return view("backend.tests.test_list");
    }
}
