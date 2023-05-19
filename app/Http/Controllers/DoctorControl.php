<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorControl extends Controller
{
    public function index()

    {
        $data = Doctor::all();
        return view('doctor.doctor_index',compact('data'));
    }
    public function create()
    {
        return view('doctor.doctor_create');
    }
    public function store(Request $req)
    {

        $doctor = new Doctor();
        $doctor->first_name = $req->firstname;
        $doctor->last_name = $req->lastname;
        $doctor->mobile = $req->mobile;
        $doctor->email = $req->email;
        $doctor->address = $req->address;
        $doctor->status = 0;
        $doctor->save();

        return redirect('/');
    }
}
