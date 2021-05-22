<?php

namespace App\Http\Controllers;
use App\User;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(){

        $users=User::where('id', Auth::user()->id)->orderBy('id','DESC')->paginate(2);
        return view('users.dashboard', compact('users'));
    }

    public function edit($id){
        $data=Application::find($id);
        return view('users.editapply', compact('data'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'body'=>'required',
            'region'=>'required',
            'type'=>'required',
            'school_name'=>'required'
        ]);

        $data=Application::find($id);
        $data->body=$request->body;
        $data->region=$request->region;
        $data->type=$request->type;
        $data->schoolname=$request->school_name;
        $data->save();
        return redirect()->route('users.dashboard')->with('success', 'Application is updated successfully!');
    }

    public function delete($id){
        Application::where('id', $id)->delete();
        return back()->with('success', 'Application deleted successfully!');
    }
    public function settings(){
        $users= User::where('id', auth()->user()->id)->get();
        return view('users.settings', compact('users'));
    }
    public function useredit($id){
        $data= User::find($id);
        return view('users.useredit', compact('data'));
    }
    public function userupdate(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required'

        ]);

        $data= User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->username=$request->username;
        $data->password=Hash::make($request->password);
        $data->save();
        return redirect()->route('settings')->with('success', 'Updated successfully!');
    }

    public function userdelete($id){
        User::where('id', $id)->delete();
        return redirect()->route('register')->with('success','You have deleted your account! Register again!');
    }
}
