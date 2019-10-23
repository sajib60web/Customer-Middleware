<?php

namespace App\Http\Controllers;

use App\Routine;
use App\RoutineTest;
use App\Student;
use Illuminate\Http\Request;
use Image;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('pages.student', compact('students'));
    }

    public function addStudent()
    {
        return view('pages.add-student');
    }

    public function studentSave(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->save();
        $student_id = $student->id;
        $times = count($request->day);
        $f_value = 0;
        for ($i = 0; $i < $times; $i++) {
            $routine = new Routine();
            $routine->student_id = $student_id;
            $routine->day = $request->day[$i];
            $routine->time1 = $request->time1[$i];
            $routine->time2 = $request->time2[$i];
            $routine->time3 = $request->time3[$i];
            $routine->save();
            $routine_id = $routine->id;
            $day_id = $routine->day;
            $data = [$request->time1[$i], $request->time2[$i], $request->time3[$i]];
            $sm_count = count($data);
            if ($i > 0) {
                for ($f = 0; $f < 3; $f++) {
                    $order_value = new RoutineTest();
                    $order_value->student_id = $student_id;
                    $order_value->routine_id = $routine_id;
                    $order_value->day = $day_id;
                    $order_value->time = $data[$f];
                    $order_value->save();
                }
            } else {
                for ($f = 0; $f < $sm_count; $f++) {
                    $order_value = new RoutineTest();
                    $order_value->student_id = $student_id;
                    $order_value->routine_id = $routine_id;
                    $order_value->day = $day_id;
                    $order_value->time = $data[$f];
                    $order_value->save();
                }
            }
        }

        session()->flash('message', 'Service Inserted Successfully');
        session()->flash('type', 'success');
        return redirect()->back();
    }

    public function editStudent($id){
        $student = Student::find($id);
        $routines = Routine::where('student_id', $student->id)->get();
        return view('pages.edit-student' , compact('routines','student'));
    }


    public function updateStudent(Request $request)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->save();
        $student_id = $student->id;
        RoutineTest::whereIn('student_id',explode(",",$request->id))->delete();

        $times = count($request->day);
        $f_value = 0;
        for ($i = 0; $i < $times; $i++) {
            $routine = Routine::find($request->routine_id[$i]);
            $routine->day = $request->day[$i];
            $routine->time1 = $request->time1[$i];
            $routine->time2 = $request->time2[$i];
            $routine->time3 = $request->time3[$i];
            $routine->save();
            $routine_id = $routine->id;
            $day_id = $routine->day;
            $data = [$request->time1[$i], $request->time2[$i], $request->time3[$i]];
            $sm_count = count($data);
            if ($i > 0) {
                for ($f = 0; $f < 3; $f++) {
                    $order_value = new RoutineTest();
                    $order_value->student_id = $student_id;
                    $order_value->routine_id = $routine_id;
                    $order_value->day = $day_id;
                    $order_value->time = $data[$f];
                    $order_value->save();
                }
            } else {
                for ($f = 0; $f < $sm_count; $f++) {
                    $order_value = new RoutineTest();
                    $order_value->student_id = $student_id;
                    $order_value->routine_id = $routine_id;
                    $order_value->day = $day_id;
                    $order_value->time = $data[$f];
                    $order_value->save();
                }
            }
        }



        session()->flash('message', 'Service Inserted Successfully');
        session()->flash('type', 'success');
        return redirect()->back();
    }

    public function classRoutine(){
        $routines = RoutineTest::all();
        return view('pages.classRoutine' , compact('routines'));
    }


    public function insertUpdate()
    {
        $student = Student::where('id', 1)->first();
        return view('pages.insert-update', compact('student'));
    }

    public function insertUpdateInsert(Request $request)
    {
        $student = new Student();
        $student_image = $request->file('student_image');
        if ($student_image) {
            $student_image_name = rand(11111, 99999) . '_' . $student_image->getClientOriginalName();
            $student_image_path = 'studentImage/';
            Image::make($student_image)->resize(413, 531)->save($student_image_path . $student_image_name);
            $student->student_image = $student_image_path . $student_image_name;
        }
        $student->name = $request->name;
        $student->save();
        return redirect()->back();
    }

    public function insertUpdateUpdate(Request $request)
    {
        $student = Student::where('id', $request->id)->first();
        $student_image = $request->file('student_image');
        if ($student_image) {
            unlink($student->student_image);
            $student_image_name = rand(11111, 99999) . '_' . $student_image->getClientOriginalName();
            $student_image_path = 'studentImage/';
            Image::make($student_image)->resize(413, 531)->save($student_image_path . $student_image_name);
            $student->student_image = $student_image_path . $student_image_name;
        }
        $student->name = $request->name;
        $student->save();
        return redirect()->back();
    }
}
