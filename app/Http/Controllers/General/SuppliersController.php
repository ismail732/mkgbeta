<?php

namespace App\Http\Controllers\General;

use App\Models\Suppliers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DataTables;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $data = Suppliers::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm edit-btn">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm delete-btn">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        $user=Auth::user();
        $data['suppliers']=Suppliers::Where('delete_status','=',1)->get();
        return view('general.suppliers.index',$data);
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
        $validator = Validator::make($request->all(), [
            'name'         => 'required|string|min:1|max:255',
            'company_name' => 'required|string|min:1|max:50',
            'contact'      => 'required|string',
            'contact_1'    => 'required|string',
            'address'      => 'required|string',
            'city'         => 'required|string',
            'email'        => 'required|string',
            'description'  => 'required|string',

        ]);
        if ($validator->fails())
        {
            $response = [
                'success' => false,
                'data'    => $validator->errors(),
                'message' => "Validation error",
            ];
            return response()->json($response);
        }
            //
        $user=Auth::user();
            $suppliers=Suppliers::updateOrCreate(
                [    'id'               => $request->supplier_id],
                    ['name'             => $request->name,
                    'company_name'      => $request->company_name,
                    'contact'           => $request->contact,
                    'contact_1'         => $request->contact_1,
                    'address'           => $request->address,
                    'city'              => $request->city,
                    'email'             => $request->email,
                    'description'       => $request->description,
                    'company_id'        => $user->company_id,

                ]
            );
            $response = [
                'success' => true,
                'data'    => $suppliers,
                'message' => "Suppliers Added Succesfully",
            ];
            return response()->json($response);
            return redirect()->back()->with('error', __('Permission denied.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $suppliers = Suppliers::find($id);
        return response()->json($suppliers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suppliers $suppliers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Suppliers::find($id)->delete();

        return response()->json(['success'=>'Suppliers deleted successfully.']);
    }
}
