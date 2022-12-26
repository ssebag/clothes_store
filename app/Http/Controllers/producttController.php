<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Detail;
use App\Models\User;
use App\Models\Invoice;

class producttController extends Controller
{

    public function pre_index(){
        $data=Product::all();
        return view('index',['data'=>$data]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        return view('ourProduct',compact('data'));
    }


    public function create()
    {
        $id=Auth::id();

        if($id){
        if(Auth::user()->role_id == 1)
        {
            return view('addProduct');
        }
        elseif(Auth::user()->role_id== 2)
        {
        return redirect()->route('/');

        }

    }
       elseif(!$id){
        return redirect()->route('/');
       }

    }

    public function store(Request $request)
    {


       $request->validate([
            'model_name'=>'required','more_details'=>'required',  'texture'=>'required', 'height'=>'required',
            'price'=>'required',  'sale'=>'required',  'image_url'=>'required','company_id'=>'required'   ]);

        $data=Product::create($request->all());
         return view ('allProduct',['dataa'=>$data]);

    }
  public function store22($id){
    $data=Product::findOrfail($id);
    return view('addDetailsForProduct',compact('data'));
  }

    public function store2(Request $request,$id){
        $request['product_id'] = $id;
        //dd($request);
        $data=Detail::create($request->all());
        return  redirect()->back();
    }
     /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        if($id== 'jacket')
        {
            $data=Product::all()->where('more_details','jacket');
            return view('ourProduct',['data'=>$data]);
        }
        if($id== 'pant')
        {
            $data=Product::all()->where('more_details','pant');
            return view('ourProduct',['data'=>$data]);
        }
        if($id== 'dress')
        {
            $data=Product::all()->where('more_details','dress');
            return view('ourProduct',['data'=>$data]);
        }
        if($id== 'shoes')
        {
            $data=Product::all()->where('more_details','shoes');
            return view('ourProduct',['data'=>$data]);
        }
        if($id== 'sweater')
        {
            $data=Product::all()->where('more_details','sweater');
            return view('ourProduct',['data'=>$data]);
        }
        if($id== 'skirt')
        {
            $data=Product::all()->where('more_details','skirt');
            return view('ourProduct',['data'=>$data]);
        }

    }

    public function show($id)
    {   $detailsforuser=Detail::all()->where('product_id',$id)->groupBy(function($data){
        return $data->color;
    });
    {   $detailsforadmin=Detail::where('product_id',$id)->orderby('color','asc')->get();

        $product=Product::findorfail($id);
        return view('detail',['data'=>$product,'details'=>$detailsforadmin,'detailsss'=>$detailsforuser]);
    }
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product=Product::findorfail($id);
       $color_size=Detail::where('product_id',$id)->get();
        return view('forAdmin.editProduct',compact('product','color_size'));
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
       $product= Product::findorfail($id);
       $product->model_name=$request->model_name;
       $product->more_details=$request->more_details;
       $product->texture=$request->texture;
       $product->height=$request->height;
       $product->price=$request->price;
       $product->sale=$request->sale;
       $product->image_url=$request->image_url;
       $product->company_id=$request->company_id;
       $product->update();
       return redirect()->route('products.show',$product->id);
    }
    public function edit3($id)
    {
        $col_si=Detail::findorfail($id);

        return view('forAdmin.editDetail',compact('col_si'));
    }
    public function update3(Request $request, $id)
    {
       $detail= Detail::findorfail($id);
       $detail->update($request->all());
       $m=$detail->product_id;
       $data=Product::findorfail($m);
       $details=Detail::where('product_id',$m)->get();
       return redirect()->route('products.show',$m);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $detail=Detail::findorfail($id);
        $detail->delete();
        return back();
    }
    public function buyView($id){
        $product=Product::findOrfail($id);
        $details=Detail::where('product_id',$id)->select('color','size')->groupBy('color','size')->get();
        return view('buy',compact('product','details'));
    }
    public function buyPost(Request $req,$id){
        $req['product_id']=$id;
        $product=Product::findorfail($id);
        $req['size']= filter_var($req['co_si'],FILTER_SANITIZE_NUMBER_INT); //for size
        $req['color']= preg_replace('/[0-9]+/','',$req['co_si']);  //for color
        $req['color']=trim($req['color']);  //for delete spaces
        $details=Detail::where('product_id',$id)->where('color',$req['color'])->where('size',$req['size'])->first();
        if($req['number_of_pieces'] <= $details['number_of_pieces']  ){
        $req['sale']= filter_var($product['sale'],FILTER_SANITIZE_NUMBER_INT); //for sale
        $req['price']=$product['price'];
        if($req['sale'] == 1 || $req['sale'] == 0)
        {
            $req['invoice']=  $product['price'] * $req['number_of_pieces'];
        }
        else{
        $k=  $product['price']  * ( $req['sale']/100);
        $req['invoice']= ($product['price'] - $k ) * $req['number_of_pieces'];}
        $req['date']= date('Y-m-d H');
        $req['product_id']=$id;
        $req['user_id']=Auth::id();
        $invoice=Invoice::create($req->all());
        $products=Product::all();
        $details['number_of_pieces']= $details['number_of_pieces']-$req['number_of_pieces'];
        if($details['number_of_pieces'] == 0)
        {
            $de=$details['id'];
             Detail::findorfail($de)->delete();
        }
        $details->save();

        $de=Detail::where('product_id',$id)->get();
        if($de->isEmpty())
        {
            $product->delete();

        }
        return redirect()->route('products.index');}
        else
       { $nnnn="You can not buy because the quantity of this product is  "  .$details['number_of_pieces'].  "  only!!";
        return  redirect()->back()->with('alert',$nnnn);}
    }

    public function search(Request $req)
    {

        $res1=Product::where('model_name','LIKE','%'.$req['query'].'%')->orWhere('texture','LIKE','%'.$req['query'].'%')->get();

            return view('ourProduct',['data'=>$res1]);


    }


}
