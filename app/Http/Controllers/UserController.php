<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function testData() {
        $data = Users::paginate(5);
        // $users = Users::all(); 
        return view('user', ['users' => $data]);
    }
    
    public function deleteUser($id){
        $data = Users::find($id);
        $data->delete();
        return redirect('datatest');
    }
    public function addUser(Request $request){
        $user = new Users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('signup');
    }
    public function OneToOne(){
        return Users::find(2)->getCompany;
    }
    public function signup(Request $request){
        $data = $request->all();
        $data['is_admin'] = 0;
        Users::create($data);
        Session::flash('message', 'Successfully register new user');
        return ('Signup Successfully');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required||max:30',
            'password' => 'required||min:5'
        ]);

        $data = $request->input();
        $request->session()->put('user', $data['username']);
        return redirect('home');
    }

    public function index($user) {
        echo $user;
        echo ", Hello from Users controller";
        echo "\n";
        return ['name'=>$user, 'age'=>18];

    }
    public function loadView($user){
        $data=['YLLoo', "Peter", "Nigel"];
        return view("user", ['user'=>$user,'users'=>$data]);
    }
}
