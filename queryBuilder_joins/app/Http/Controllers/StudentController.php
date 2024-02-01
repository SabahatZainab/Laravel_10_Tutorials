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

        return view('welcome',compact('students'));
    }
}
