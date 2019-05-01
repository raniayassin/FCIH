<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class usersboard extends Controller
{

        public function show()
    {
        return view('usersboard');
    }

 public function deleteUser($id)
    {

        $user =UserModel::find($id);
        if($user!=null)
        {                                 
            $user->delete();
            return redirect()->back()->with('status','user deleted');
        }
        return redirect('/FCIH/public/usersboard')->with('status','faild deletion');   
    }



    public function showUsers()
    {
        $users=UserModel::all(); 
        return view('usersboard')->with('users',$users);
    }
}



