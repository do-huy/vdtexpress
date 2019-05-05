<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
    public function regis()
    {
        $province_list = DB::table("tbl_province")
        		// ->groupBy('province_name')
        		->get();
        return view('admincp.register')->with('province_list',$province_list);
    }
    public function getStateList($proviceId)
    {
        $district_list = DB::table("tbl_district")
        ->where("district_province_id",$proviceId)
        ->select(["district_name","district_id"])
        ->get()->toArray();

        return response()->json($district_list);
    }
     public function getWardList($districtId)
    {
        $ward_list = DB::table("tbl_ward")
        ->where("ward_district_id",$districtId)
        ->select(["ward_name","ward_id"])
        ->get()->toArray();

        return response()->json($ward_list);
    }

}
