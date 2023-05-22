<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

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

        $this->validate(request(),[
            'firstname'    => 'required|max:200',
            'lastname'     => 'required|max:200',
            'mobile'        => 'required|max:10|min:10',
            'email'         => 'required|email',
            'address'       => 'required',

        ]);

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
    public function view($id)
    {
        $data = Doctor::find($id);
        return view('doctor.doctor_view',compact('data'));
    }
    public function edit($id)
    {
        $data = Doctor::find($id);
        return view('doctor.doctor_edit', compact('data'));
    }
    public function update(Request $upreq,$id)
    {

        $this->validate(request(),[
            'firstname'    => 'required|max:200',
            'lastname'     => 'required|max:200',
            'mobile'        => 'required|max:10|min:10',
            'email'         => 'required|email',
            'address'          => 'required',
            'status'        => 'required',
        ]);


        $doctor =  Doctor::find($id);
        $doctor->first_name = $upreq->firstname;
        $doctor->last_name = $upreq->lastname;
        $doctor->mobile = $upreq->mobile;
        $doctor->email = $upreq->email;
        $doctor->address = $upreq->address;
        $doctor->status = $upreq->status;
        $doctor->save();

        return redirect('/');
    }
    public function delete($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        //session()-
        return redirect('/');
    }
}
