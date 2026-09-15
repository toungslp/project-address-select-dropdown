<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Dristric;
class HomeController extends Controller
{
    //
    public function index(){
        $province = Province::all();
        return view('address',compact('province'));
    }

    public function getDistrict(Request $request){
        $pr_id = $request->query('pr_id');
        $distric = Dristric::where('pr_id','=',$pr_id)->get();
        echo '<option value="">-- ກະລຸນາເລືອກເມືອງ --</option>';
        foreach($distric as $item){
            echo "<option value='".$item->dr_id."'>".$item->dr_name."</option>";
        }
    }
}
