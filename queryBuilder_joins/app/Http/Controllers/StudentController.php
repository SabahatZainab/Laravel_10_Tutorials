<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents(){

        $students = DB::table('students')
                            ->leftJoin('cities',function(JoinClause $join){
                                $join->on('students.city','=','cities.id')
                                    ->where('cities.city_name','=','City1');
                            })
                            ->select('students.*','cities.city_name')
                            ->get();

        // return $students;

        
    }
    public function uniondata()
    {
        $lecturers = DB::table('lecturers')
                            ->select('name','email','city_name')
                            ->join('cities','lecturers.city','=','cities.id')
                            ->where('city_name','=','City1');
        $students = DB::table('students')
                            ->union($lecturers)
                            ->select('name','email','city_name')
                            ->join('cities','students.city','=','cities.id')
                            ->where('city_name','=','City2')
                            ->get();
        return $students;
        return view('welcome',compact('students'));
    }
    public function whendata()
    {
        $flag = true;
        $students = DB::table('students')
                            ->when($flag, function($query){
                                $query->where('age','>',20);
                            }, function($query){
                                $query->where('age','<',20);
                            })
                            ->get();
        return $students;
    }
    public function chunkdata(){
        $students = DB::table('students')->orderBy('id')
                        ->chunkById(3,function($students){
                            echo "<div style='border: 1px solid red; margin-bottom: 15px;'>";
                            foreach($students as $student){
                                echo $student->name."<br>";
                            }
                            echo "</div>";
                        });
    }
}
