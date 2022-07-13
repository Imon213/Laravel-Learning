<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\Alluser;
use App\Http\Requests\StoreDeliveryRequest;
use App\Http\Requests\UpdateDeliveryRequest;
use Illuminate\Support\Facades\Hash;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDeliveryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryRequest  $request
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryRequest $request, Delivery $delivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        //
    }
    public function addDeliveryMan(){
        return view('pages.Admin.addDelMan');
    }
    public function addDeliveryManSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'phone'=>'required',
            'nid'=>'required',
            'address'=>'required',
             'password'=>'required| min:8 | max:12'
        ]);
        
        $st = new Alluser();
        $st->name = $request->name;
        $st->email = $request->email;
        $st->phone = $request->phone;
        $st->nid = $request->nid;
        $st->address = $request->address;
        $st->password = Hash::make($request->password);
        $st->type = 'deliveryman';
        $st->status = "active";
        if($st)
        {
            $st->save();
            return redirect()->route('user');
        }
    }

    public function DeliveryHistory(){
        $d = Delivery::get();
        return view('pages.Admin.Delivery.list')->with('delivery',$d);
    }
    public function DeliveryDetails(Request $request){
        $o = Order::where('o_id',$request->id)->get();
       return view('pages.Admin.Delivery.details')->with('order',$o);
    }
}
