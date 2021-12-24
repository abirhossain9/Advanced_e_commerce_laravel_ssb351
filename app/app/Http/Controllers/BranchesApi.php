<?php

namespace App\Http\Controllers;

use App\Models\Backend\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BranchesApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Branch::all();
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
        $branch = new Branch();
        $branch->name = $request->name;
        $branch->bangla_name = $request->bangla_name;
        $branch->slug = Str::slug($request->name) ;
        $branch->address_line1 = $request->address1;
        $branch->address_line2 = $request->address2;
        $branch->email = $request->email;
        $branch->phone = $request->phone;
        $branch->status = $request->status;
        $branch->save();
        return ["result"=>"New Branch Added"];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Branch::find($id);
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
        $branch = Branch::find($id);;
        if(!empty($branch)){
                $branch->name = $request->name;
                $branch->bangla_name = $request->bangla_name;
                $branch->slug = Str::slug($request->name) ;
                $branch->address_line1 = $request->address1;
                $branch->address_line2 = $request->address2;
                $branch->email = $request->email;
                $branch->phone = $request->phone;
                $branch->status = $request->status;
                $branch->save();
                if($branch){
                    return ["result"=>"Branch Has Been Updated"];
                }
                else{
                    return ["result"=>"Branch Has not been Updated"];
                }
        }
        elseif(empty($branch)){
            return ["result"=>"no branch found"];
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);
        if(!is_null($branch)){
            $branch->delete();
            return ["result"=>"Branch Has Been Deleted"];;
        }
        else{
             return ["result"=>"Branch Has Not Been Found"];;
        }
    }
}
