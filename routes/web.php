<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', function () {
    return redirect('admin/home');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' =>'admin', 'as'=>'admin.'], function(){
      Route::get('logout',['as' =>'logout','uses' =>'DashboardController@logout2']);
      Route::get('home',['as' =>'home','uses' =>'DashboardController@index']);
    });

    Route::group(['prefix' =>'department', 'as'=>'department.'], function(){
        Route::get('create',['as' =>'create','uses' =>'DepartmentController@createDepartment']);
        Route::get('all-department-list',['as' =>'all_department_list','uses' =>'DepartmentController@getDepartmentList']);
      });
    Route::group(['prefix' =>'doctor', 'as'=>'doctor.'], function(){
        Route::get('create',['as' =>'create','uses' =>'DoctorController@createDoctor']);
        Route::get('all-doctor-list',['as' =>'all_doctor_list','uses' =>'DoctorController@getDoctorList']);
      });
    Route::group(['prefix' =>'patient', 'as'=>'patient.'], function(){
        Route::get('create',['as' =>'create','uses' =>'PatientController@createPatient']);
        Route::get('all-patient-list',['as' =>'all_patient_list','uses' =>'PatientController@getPatientList']);
      });
    Route::group(['prefix' =>'receptionist', 'as'=>'receptionist.'], function(){
        Route::get('create',['as' =>'create','uses' =>'ReceptionistController@createReceptionist']);
        Route::get('all-receptionist-list',['as' =>'all_receptionist_list','uses' =>'ReceptionistController@getReceptionistList']);
      });
    Route::group(['prefix' =>'test', 'as'=>'test.'], function(){
        Route::get('create',['as' =>'create','uses' =>'TestController@createTest']);
        Route::get('all-test-list',['as' =>'all_test_list','uses' =>'TestController@getTestList']);
      });

});
