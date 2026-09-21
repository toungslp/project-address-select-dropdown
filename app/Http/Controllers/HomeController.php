<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Dristric;
use App\Models\Village;
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

    //load data village
    public function getVillage(Request $request){
        $dr_id = $request->query('dr_id');
        echo '<option value="">-- ກະລຸນາເລືອກບ້ານ --</option>';

        $villages = Village::where('dr_id','=',$dr_id)->get();
        foreach($villages as $village){
            echo '<option value="'.$village->vill_id.'">'.$village->vill_name.'</option>';
        }

    }
}
