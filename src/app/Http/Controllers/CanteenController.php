<?php

namespace App\Http\Controllers;

use App\Models\Canteen;
use App\Models\Order;
use App\Models\Rfid;
use App\Models\User;
use Illuminate\Http\Request;

class CanteenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Canteen";
        if (is_null(auth()->user()->canteen)) {
            if(is_null(auth()->user()->wallet)){
                return view('panel.wallet.setup');
            }
            return view('panel.canteen.setup');
        }else{
            $food=auth()->user()->canteen->food;
            return view('panel.canteen.index',compact(['title','food']));
        }
    }
    public function beli(Request $request)
    {
        $request->validate([
            'food_list'=>'required',
            'total'=>'required',
        ]);
        $req=$request->all();
        $req['user_id']=auth()->user()->id;
        Order::create($req);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setup(Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2048',
            'name'=>'required',
        ]);
        $image=$request->file("image");
        $image=$image->store("public/image/canteen");
        $canteen=$request->all();
        $canteen['image']=str_replace('public/image/',"image/",$image);
        Auth()->user()->canteen()->create($canteen);
        return redirect()->route('panel.canteen');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2048',
            'name'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'jenis'=>'required',
        ]);
        $image=$request->file("image");
        $image=$image->store("public/image/canteen/food");
        $canteen=$request->all();
        $canteen['image']=str_replace('public/image/',"image/",$image);
        Auth()->user()->canteen->food()->create($canteen);
        return redirect()->route('panel.canteen');
    }
    public function pay(Rfid $rfid){
        $rfid->wallet->user->myorders->payment=1;
        $rfid->wallet->user->myorders->save();
        
        dd($rfid->wallet->user->full_name,$rfid->wallet->user->myorders->payment);

    }
    public function explore(){
        $title="Explore Canteen";
        $canteen=Canteen::all();
        return view('panel.canteen.explore',compact(['canteen','title']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canteen  $canteen
     * @return \Illuminate\Http\Response
     */
    public function show(Canteen $canteen)
    {
        $title="Explore $canteen->name";
        $food=$canteen->food->all();
        // dd($food);
        return view('panel.canteen.show',compact(['food','title']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canteen  $canteen
     * @return \Illuminate\Http\Response
     */
    public function edit(Canteen $canteen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Canteen  $canteen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canteen $canteen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canteen  $canteen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canteen $canteen)
    {
        //
    }
}
