<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\TimeRecord;
class employeeController extends Controller
{
    public function start(){
      
        // $comment =new TimeRecord([
        //     'clock_in'=>'',
        //     'clock_out'=>'',
        //     'break_start'=>'',
        //     'break_end'=>'',
        //     'total_time_worked'=>0,
        //     'total_breaks_used'=>0,
        //     'is_in'=>false,
        //     'is_out'=>false,
        //     'is_break_started'=>false,
        //     'is_break_ended'=>false, 
        //     'is_in' => true]);

        // $post = Employee::find(1);
        $employee=Employee::all();
        // $post->timerecord()->save($comment);
        return view('timeTracker')->with('employee',$employee);
    }
    public function getEmployee(Request $request){

        $employee=Employee::all();
        $personEsp= Employee::find($request->id);
   
        return view('timeTracker')->with(['employee'=>$employee,'personEsp'=>$personEsp]);
    }
}
