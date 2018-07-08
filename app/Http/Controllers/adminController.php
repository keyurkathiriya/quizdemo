<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class adminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }
    public function department(){
    	$department = Department::all();
    	return view('admin.department')->with('deptdata',$department);
    }
    public function addDepartment(Request $req){
    	$dept = new Department;
    	$dept->departmentname= $req->departmentname;
    	$dept->save();
    	return redirect('/admin/department');
    }
    public function edit(Request $req){
    	$editdepartment = Department::where('id',$req->id)->first();
    	
    	return view('admin.editdepartment')->with('editdept',$editdepartment);
    }
    public function update(Request $req){
    	$updept = Department::where('id',$req->id)->first();
    

    	$updept->departmentname = $req->departmentname;
    	$updept->update();
    	return redirect('/admin/department');
    }
    

}
