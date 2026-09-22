<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        $customers = Customers::all();
        return view("customer", compact("customers"));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate(
            [
                "name_lastname" => "required",
                "vill_id" => "required",
                "street_address" => "required",
            ],//ກຳນົດເງື່ອນໄຂການກວດສອບ
            [
                "name_lastname.required" => "ກຳນົດຊື່ລູກຄ້າ",
                "vill_id.required" => "ກຳນົດ ບ້ານ ຂອງລູກຄ້າ",
                "street_address.required" => "ກຳນົດ ທີ່ຢູ່ສະເພາະ ດ້ວຍ",
            ]//ສົ່ງ error ໃຫ້ກັບ fontend
        );
        //save data
        Customers::create($validate);

        return redirect()->route("customer.index")->with("success", "ບັນທືກຂໍ້ມູນສຳເລັດ");
    }
}
