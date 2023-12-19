<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
        $a = $r->ID;
        $b = $r->Pass;


        $data = DB::select('select * from users 
                            where id = ?', [$a]);


        echo 'entering';

        echo 'your ID is ' . $data[0]['id'];


/*

        if($a == $data['id'] and $b == $data['password'])
        {
            //return view('main_page');
            echo 'h1';
        }
        elseif($a == $data['id'] and $b != $data['password']) 
        {
            echo 'hello';
        }
        else
        {
            echo 'hello2';
        }    

        
*/
        echo 'Working :)';  
    }


    public function new_Account(Request $s)
    {
        $a = $s->name;
        $b = $s->number;
        $c = $s->email_id;
        $d = $s->type;
        $e = $s->apass;



        $r = bin2hex(random_bytes(3));

        echo 'Entering';



        $quer = DB::insert('insert into users (id, name, Mobile, email, gender, password) values (?, ?, ?, ?, ?, ?)', [$r, $a, $b, $c, $d, $e]);


        echo 'Leaving';

        echo 'Your ID is ' . $r;



    }





    
}
