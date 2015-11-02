<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Exams as Exams;

class ExamsController extends Controller
{
    public function index()
    {
        $details = Exams::paginate(10);
	$details->setPath('entrance_exams');
        return view('Categories/exams', compact('details'));
    }
}
