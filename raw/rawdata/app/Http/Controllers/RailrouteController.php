<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;






class RailrouteController extends Controller
{
    public function home()
    {
        return view('1st page');
    }


    public function ulogin()
    {
        return view('user_login');
    }
    

    public function ucreate()
    {
        return view('ucreate');
    }


    public function Au_or_not(Request $r)
    {
        $r->validate(
            [
                'ID'=>'bail|required',
                'Pass'=>'bail|required',     //****************************
            ]
                
            );




        $a = $r->ID;
        $b = $r->Pass;


        $data = DB::select('select * from users 
                            where id = ?', [$a]);



        $t = json_decode(json_encode($data), true);




        if($a == $t[0]['id'] and $b == $t[0]['password'])
        {
            //return view('main_page');
            echo 'h1';
        }
        elseif($a == $t[0]['id'] and $b != $t[0]['password']) 
        {
            echo 'hello';
        }
        else
        {
            echo 'hello2';
        }     
    }


    public function new_Account(Request $s)
    {
        $s->validate(
            [
                'name'=>'bail|required',
                'number'=>'bail|required',
                'email_id'=>'bail|required',       //****************************
                'type'=>'bail|required',
                'password_confirmation'=>'bail|required|confirmed',
                'apass'=>'bail|required',    
            ]
                
            );




        $a = $s->name;
        $b = $s->number;
        $c = $s->email_id;
        $d = $s->type;
        $e = $s->apass;



        $r = bin2hex(random_bytes(3));

        echo 'Entering' . '<br>';

        echo $r . '<br>';



        
        $data = DB::insert('insert into users (id, name, Mobile, email, gender, password) values (?, ?, ?, ?, ?, ?)', [$r, $a, $b, $c, $d, $e]);



        if($data == true)
        {
            echo 'Records inserted' . '<br>';
        }


        echo 'Leaving' . '<br>';

        echo 'Your ID is ' . $r;

        //sleep(10);



        //return view('main page');

    }













}
