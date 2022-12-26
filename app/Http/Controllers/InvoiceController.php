<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\softDeletes;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $id=Auth::id();
        $invoices=Invoice::where('user_id',$id)->get();
        if($id){
            if(Auth::user()->role_id == 1)
            {
             $invoices=Invoice::all();
             return view('invoice',compact('invoices'));

            }

            else
            {
             $invoices=Invoice::where('user_id',$id)->get();
                 if($invoices->isEmpty())
                 {

                   return view('invoice',compact('invoices'));}
                 else{

                 return view('invoice',compact('invoices'));

                }
                 }
        }
        else
        {
           return redirect()->route('/');
        }

    }

    public function search(Request $req)
    {
       if(Auth::user()->role_id ==1)
       {
        if($req['query'] == null)
        {

          return redirect()->route('invoice.index');
        }
        else
        {$pro=Product::where('model_name',$req['query'])->withTrashed()->first();
            $user=User::where('name',$req['query'])->first();
            if($pro)
            {
                $p=$pro['id'];
                $res1=Invoice::where('product_id','LIKE','%'.$p.'%')->get();
                return view('invoice',['invoices'=>$res1]);

            }

            elseif($user){
                $u=$user['id'];
                $res1=Invoice::where('user_id','LIKE','%'.$u.'%')->get();
                return view('invoice',['invoices'=>$res1]);

            }
            else{

                return redirect()->route('invoice.index')->with('alert','NoOoOoOoO Result!!!!!!!!!!');


            }

        }
       }

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
    public function store(Request $request)
    {
        //
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
    public function result(Request $req){
        $invoices =$req->input('invoices');
        $in=0;
       if(!$invoices){
          return redirect()->route('invoice.index')->with('alert',"Select any invoice!!!!");
       }
       else{
        for($i =0 ; $i< count($invoices) ; $i++){
            $in =$in+ $invoices[$i];
          }
         return redirect()->route('invoice.index')->with('alertt',$in);

       }

    }
}
