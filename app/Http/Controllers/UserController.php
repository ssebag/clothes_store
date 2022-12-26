<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    public function index()
    {
       $user= User::all();
       $id=Auth::id();
       if($id){
        if(Auth::user()->role_id == 1)
        {
             return view ('forAdmin.users',compact('user'));
        }
        else{
            return redirect()->route('/');
        }}
        else{
            return redirect()->route('/');
        }


    }
    public function show($id){
        $user=User::where('id',$id)->withTrashed()->get();
        return view ('forAdmin.userInformation',compact('user'));
    }
    public function edit($id){
        $user=User::findorfail($id);
        return view('forAdmin.editUser',compact('user'));

    }
    public function update($id){
      $user=User::findorfail($id);
      if($user['role_id'] == 1)
      {
        $user['role_id'] = 2;
      }
      elseif($user['role_id'] == 2)
      {
        $user['role_id'] =1;
      }
      $user->save();
      return redirect()->back();
    }
    public function update2(Request $request, $id)
    {
       $userr=User::findorfail($id);
       $userr->update($request->all());
       $user= User::all();
       return view('forAdmin.users',compact('user'));
    }
    public function destroy($id){
        $user=User::findorfail($id);
        if($user['role_id'] != 1){
            $user->delete();
        }
        return back();
    }


}
