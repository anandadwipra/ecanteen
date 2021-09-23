<?php

namespace App\Http\Controllers;

use App\Models\Acces;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function check(){
        if(auth()->user()->access_id!=1){
            return abort(403);
        }
    }
    public function index()
    {
        $user=new Acces();
        return view('panel.dashboard',compact('user'));
    }
    public function userman()
    {
        $this->check();
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
        $this->check();
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
        $this->check();
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
        $this->check();
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
        $this->check();
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
        $this->check();
        try {
            $user->wallet->delete();
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        $user->delete();
        return redirect()->route('panel.userman');
    }
}
