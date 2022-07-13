<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Alluser;
use App\Models\Product;
use App\Models\Orderdetail;
use App\Http\Requests\StoreAlluserRequest;
use App\Http\Requests\UpdateAlluserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use PDF;

class AlluserController extends Controller
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
     * @param  \App\Http\Requests\StoreAlluserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlluserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function show(Alluser $alluser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function edit(Alluser $alluser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlluserRequest  $request
     * @param  \App\Models\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlluserRequest $request, Alluser $alluser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alluser $alluser)
    {
        //
    }


    public function Registration()
    {
        return view('pages.public.registration');
    }
    public function registrationSubmitted(Request $request)
    {
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'phone'=>'required',
            'nid'=>'required',
            'address'=>'required',
            'type'=>'required',
             'password'=>'required| min:8 | max:12'
        ]);
        
        $st = new Alluser();
        $st->name = $request->name;
        $st->email = $request->email;
        $st->phone = $request->phone;
        $st->nid = $request->nid;
        $st->address = $request->address;
        $st->password = Hash::make($request->password);
        $st->type = $request->type;
        $st->status = "active";
        if($st)
        {
            $st->save();
            $request->session()->put('user',$st->id);
            return redirect()->route('adminDashboard');
        }
    }

    public function login()
    {
        return view('pages.public.login');
    }
    public function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            'email'=>'email',
             'password'=>'required'
        ]);
        $stu = Alluser::where('email',$request->email)
                       ->where('password',$request->password)
                        ->first();
        if($stu){
            $request->session()->put('user',$stu->id);
            $request->session()->put('name',$stu->name);
            if($request->rem) 
            {
                setcookie('email', $stu->email, time()+30);
                setcookie('password', $stu->password, time()+30);
            }
            
            
            return redirect()->route('adminDashboard');
        }
        return back();
       
                     
    }
    public function adminDashboard(Request $request)
    {
        $value = $request->session()->get('user');
        $stu = Alluser::where('id',$value)->first();
        if($stu)
        {
           $buyer = Alluser::get();
           $pro = Product :: get();
           $orders = Order :: get();
            return view('pages.admin.dashboard')->with('buyer',$buyer)
                                                ->with('product',$pro)
                                                ->with('orders',$orders);
        }
       
    }
    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
    public function Adminprofile(Request $request)
    {
        $value = $request->session()->get('user');
        $stu = Alluser::where('id',$value)->first();
        if($stu)
        {
            return view('pages.Admin.profile')->with('user',$stu);
        }
    }
    public function AdminprofileSubmitted(Request $request)
    {
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'phone'=>'required',
            'nid'=>'required',
            'address'=>'required',
             'password'=>'required| min:8 | max:12'
        ]);
        $value = $request->session()->get('user');
        $st = Alluser::where('id',$value)->first();
        $st->name = $request->name;
        $st->phone = $request->phone;
        $st->nid = $request->nid;
        $st->address = $request->address;
        $st->password = $request->password;
       if($st)
       {
        $st->save();
        return redirect()->route('profile');
       }
      
    }
    public function Users()
    {
        $user = Alluser::get();
        return view('pages.Admin.users')->with('user', $user);
    }
    public function DeleteUser(Request $request)
    {
        $user = Alluser::where('id',$request->id)->first();
        $user->delete();
        return redirect()->route('user');
    }
    
    public function DetailsInfo(Request $request)
    {
        $u = Alluser::where('id',$request->id)->first();
       
            return view('pages.Admin.details')->with('user',$u);
        
    }

    public function DetailsInfoSubmitted(Request $request)
    {
        $u = Alluser::where('id',$request->id)->first();
       
           $u->name = $request->name;
           $u->email = $request->email;
           $u->phone = $request->phone;
           $u->nid = $request->nid;
           $u->address = $request->address;
           if($u)
           {
            $u->save();
            return redirect()->route('user');
           }
           return back();
        
    }
    public function acceptDel(Request $request)

    {
        $u = Alluser::where('id',$request->id)->first();
        $u->status ="active";
        if($u)
        {
            $u->save();
            return redirect()->route('adminDashboard');
        }
        return back();
    }
    public function downloadPdf(Request $request){
        $detail = Orderdetail::where('o_id',$request->id)->get();
        $pdf = PDF::loadView('pdf.orderDetails',[
            'detail' => $detail
        ]);
    
        return $pdf->download('Orders.pdf');
    }
}
