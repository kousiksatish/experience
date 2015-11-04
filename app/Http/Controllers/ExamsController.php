<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Exams as Exams;

class ExamsController extends Controller
{
    public function index(Request $request)
    {
        $exams = ["GRE","GATE","TOEFL","CAT"];
        $exam = $request->get('exam');
        if(in_array($exam, $exams))
        {
            $details = Exams::where("exam","=",$exam)->paginate(10);
        }
        else
        {
            $details = Exams::paginate(10);
            $exam = "all";
        }
        return view('Categories/exams', ['details'=>$details,"exam"=>$exam]);
        
    }
}
