<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = employee::all();
        return view('/employee.index',[
            'title'=>'Employee Index',
            'employees'=>$employee,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/employee/create',[
            'title'=>'Add Employee'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreemployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemployeeRequest $request)
    {
        $validate = $request->validate([
            'name'=>'required | min:3',
            'address'=>'required',
            'phone'=>'required|min_digits:12|max_digits:13|numeric',
            'password'=>"required|min:3",
            'username'=>'required|min:3|unique:employee',
            'shift'=>'required',
        ]);
        // dd($validate);
        $employee = new employee();
        $employee->name = $validate['name'];
        $employee->address = $validate['address'];
        $employee->phone = $validate['phone'];
        $employee->password = Hash::make($validate['password']);
        $employee->username = $validate['username'];
        $employee->shift = $validate['shift'];
        $employee->save();
        return redirect()->route('employee.index')->with('pesan',"Penambahan data {$validate['name']} berhasil");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        return view('/employee.show',[
            'title' => 'Employee Show',
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employee.edit',[
            'employee'=>$employee,
            'title' => 'Edit Employee'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeeRequest  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemployeeRequest $request, employee $employee)
    {
        $validate = $request->validate([
            'name'=>'required | min:3',
            'address'=>'required',
            'phone'=>'required|min_digits:12|max_digits:13|numeric',
            'password'=>"required|min:3",
            'username'=>'required|min:3|unique:employee,username,'.$employee->id,
            'shift'=>'required',
        ]);
        $updatedEmployee =[
            'name' => $validate['name'],
            'address' => $validate['address'],
            'phone' => $validate['phone'],
            'password' => Hash::make($validate['password']),
            'username' => $validate['username'],
            'shift' => $validate['shift'],
        ];
        // dump($updatedEmployee);
        employee::where('id',$employee->id)->update($updatedEmployee);
        return redirect()->route('employee.index')->with('pesan',"Pengubahan data {$validate['name']} berhasil");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('pesan',"Penghapusan data $employee->name berhasil");
    }
}
