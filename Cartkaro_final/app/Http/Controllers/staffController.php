<?php

namespace App\Http\Controllers;
use App\Models\Staff;

use Illuminate\Http\Request;

class staffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $staffs = Staff::get();
        return view('Admin.Staff.staffs', ['staffs' => $staffs]);
    }
    public function create()
    {
        return view('Admin.Staff.staffadd');
    }
    public function delete($id)
    {
        $staffs = Staff::where('id', $id)->first();
        $staffs->delete();
        return back();
    }
    public function edit($id)
    {
        $staff = staff::where('id',$id)->first();
        return view('Admin.Staff.staffedit',['staff'=>$staff]);
    }
    public function update(Request $request,$id){
        $staff = staff::where('id',$id)->first();
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->Phone_no = $request->Phone_no;
        $staff->position = $request->position;
        $staff->date_of_joining = $request->date_of_joining;
        $staff->aadhar_no = $request->aadhar_no;


        $staff->save();
        return redirect("staffs");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'position' => 'required',
            'date_of_joining' => 'required',
            'aadhar_no' => 'required',
            'imageName' => 'required',
        ]);

        // dd($request->all());
        //Upload imager
        $imageName = time() . '.' . $request->imageName->extension();
        $request->imageName->move(public_path('staff_aadhar'), $imageName);

        $staff = new Staff;
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->Phone_no = $request->phone_no;
        $staff->position = $request->position;
        $staff->date_of_joining = $request->date_of_joining;
        $staff->aadhar_no = $request->aadhar_no;
        $staff->aadhar_img = $imageName;
        $staff->password = bcrypt($request->aadhar_no);
        $staff->shop_name = $request->aadhar_no;

        $staff->save();

        return redirect('staffs');
        // return back();
    }
}
