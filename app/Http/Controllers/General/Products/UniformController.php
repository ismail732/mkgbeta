<?php


namespace App\Http\Controllers\General\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ProductMeta;
use App\Models\Books;
use App\Models\Units;
use App\Models\Publishers;
use App\Models\Authors;
use App\Models\Classes;
use App\Models\Schools;
use App\Models\languages;
use App\Models\Series;
use App\Models\Topics;
use App\Models\Suppliers;
use App\Models\Subjects;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Bindings;
use Illuminate\Support\Facades\Auth;

use App\Models\Uniform;
use Illuminate\Http\Request;

class UniformController extends Controller
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
        $user=Auth::user();
        $company_id = $user->company_id;
        $data=array();
        $data['units']              = Units::get()->pluck('title', 'id');
        $data['schools']            = Schools::get()->pluck('name', 'id');
        $data['suppliers']           = Suppliers::where('company_id',$company_id)->get()->pluck('name', 'id');
        $data['categories']         = Categories::where('company_id',$company_id)->where('product_type_id',4)->get()->pluck('title', 'id');
        $data['subcategories']      = SubCategories::where('company_id',$company_id)->get()->pluck('name', 'id');


        return view("general.product.uniform.create",$data);
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
        $user=Auth::user();
        $products = Products::create([
            'product_id'            =>4,
            'name'                  =>$request->name,
            'label_txt'             =>$request->label_txt,
            'barcode'               =>$request->barcode,
            'description'           =>$request->description,
            'l_purchase_price'      =>$request->l_purchase_price,
            'l_comission'           =>$request->l_comission,
            'l_sale_price'          =>$request->l_sale_price,
            'weight'                =>$request->weight,
            'dimensions'            =>$request->dimensions,
            'keywords'              =>$request->keywords,
            'sub_category_id'       =>$request->sub_category_id,
            'alternate_code'        =>$request->alternate_code,
            'company_id'            => $user->company_id,

  
         ]);
         $meta = $products->id;
         ProductMeta::create([
            
            'product_id'            =>4,
            'school_id'             =>$request->school_id,
            'size'                  =>$request->size,
            'color'                 =>$request->color,
            'additional_topics'     =>$request->additional_topics,
            'p_id' => $meta

  
         ]);
         return redirect('uniform/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data['meta']= ProductMeta::where('product_id', 4)->get();
        $data['data']= Products::where('product_id', 4)->get();
        $data['classes']= Classes::all();
        $data['category']= SubCategories::all();

        return view("general.product.uniform.index",compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function edit(Uniform $uniform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uniform $uniform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uniform  $uniform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uniform $uniform)
    {
        //
    }
}
