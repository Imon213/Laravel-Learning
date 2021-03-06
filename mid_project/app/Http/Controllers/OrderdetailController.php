<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Http\Requests\StoreOrderdetailRequest;
use App\Http\Requests\UpdateOrderdetailRequest;
use Illuminate\Http\Request;

class OrderdetailController extends Controller
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
     * @param  \App\Http\Requests\StoreOrderdetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderdetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderdetailRequest  $request
     * @param  \App\Models\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderdetailRequest $request, Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderdetail $orderdetail)
    {
        //
    }
    public function OrderInfo(){
        $order = Order::get();
        return view('pages.Admin.Order.list')->with('order',$order);
    }

    public function OrderDetails(Request $request){
      $detail = Orderdetail::where('o_id',$request->id)->get();
      return view('pages.Admin.Order.details')->with('detail',$detail);
    }
    public function OrderHistory(){
        $order = Order::get();
     
        {
        return view('pages.Admin.OrderHistory.list')->with('order',$order);
        }
    }
    public function HistoryDetails(Request $request){
        $detail = Orderdetail::where('o_id',$request->id)->get();
      
            return view('pages.Admin.Order.details')->with('detail',$detail);
        
        
      }
}
