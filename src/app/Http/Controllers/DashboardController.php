<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }  
    public function index()
    {
        return view('panel.dashboard');
    }
    public function userman()
    {
        $title="Userman";
        $users= User::get();
        return view('panel.userman',compact(['title','users']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function usermanAdd(){
        $title="Add User";
        return view('panel.usermanAdd',compact('title'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function usermanStore(Request $request){
        $request->validate([
            'username'=>'required',
            'full_name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
        $requests=$request->all();
        $requests['password']=bcrypt($requests['password']);
        User::create($requests);
        return redirect()->route('panel.userman');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function usermanShow(User $user){
        // return Auth::;
        $title="Show";
        return view('panel.usermanShow',compact(['title','user']));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function usermanUpdate(Request $request, User $user){
        $request->validate([
            'username'=>'required',
            'full_name'=> 'required',
            'email'=> 'required',
            'access_id'=> 'required',
        ]);        

        if(is_null($request->password)){
            $request->request->remove('password');
            $req=$request->all();
        }else{
            $req=$request->all();
            $req['password']=bcrypt($request->password);
        }
        $user->update($req);

        return redirect()->route('panel.userman');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function usermanDestroy(User $user){
        $user->delete();
        return redirect()->route('panel.userman');
    }
}
