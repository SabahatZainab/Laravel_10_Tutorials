<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function saveData()
    {
        $teacher = new Teacher();
        $teacher->name = "ACH";
        $teacher->save();
        $subject = new Subject();
        $subject->Sub_Code = "ACH_Code";
        $teacher->$subject->save();

    }
}
