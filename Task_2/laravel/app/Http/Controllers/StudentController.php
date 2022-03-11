<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function studentlist()
    {
        
        //$student=array();

        $students=student::all();

       // for($i=0; $i<10;$i++){
         //   $student=array(
           //     "name"=>"Student ".($i+1),
             //   "id"=>"00".($i+1),
               // "dob"=>"11-12-13"
            //);
            //$students[]=(object)$student;
        //}

        //return view('stu.student')->with('students',$students);
        return view('stu.student')->with('students',$students);
    }


    public function studentcreat()
    {
        return view('stu.studentcreat');
    }

    public function Regestration()
    {
        return view('stu.Regestration');
    }

    public function Contact()
    {
        return view('stu.Contact');
    }

    public function Login()
    {
        return view('stu.Login');
    }



    public function studentcreatsubmit(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required',
            'id'=>'required',
            'dob'=>'required',
            'email'=>'required'
        ],
        [
            'name.required'=>'please name correctlay',
            'name.min'=>'8 chak must be'
        ]
            
    );
            $student=new Student();
            $student->name=$request->name;
            $student->student_id=$request->id;
            $student->dob=$request->dob;
            $student->save();

            return $student;

        return "ok";
       
    }
    


    public function Regestrationsubmit(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required',
            'id'=>'required',
            'dob'=>'required',
            'email'=>'required'
        ]);

        $student=new Student();

        $student->name=$request->name;
        $student->student_id=$request->id;
        $student->dob=$request->dob;

        $student->save();

        return "Ok registration compleate";
    }

    public function Loginsubmit(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required',
            'id'=>'required',
            
        ]);


        return "Ok registration compleate";
    }
}
