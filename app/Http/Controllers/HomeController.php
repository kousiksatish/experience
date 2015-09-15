<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('home');

    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
            $username=explode("@",$request->get('email')); 
            $username = $username[0];
            $password=$request->get('password');
            $shellcmd = "python nitt_imap_login.py ".$username." ".$password;
            $imap = shell_exec($shellcmd);
            if($imap == 1)
            {   
                if($username == '106113077'||$username == '106114073')
                { 
                    Session::put('user_name','admin');
                    Session::put('roll_number',$username);
                }
                else
                {
                Session::put('roll_number',$username);
                }
                return Redirect::to('/');
                
            }
            else
            {
                return Redirect::to('login')->with('message', 'Incorrect Username or Password');
            }
            
               
    }
    public function logout()
    {
       
            Session::flush();
            return Redirect::to('/login')->with('message', 'Successfully Logged out.');
           
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
