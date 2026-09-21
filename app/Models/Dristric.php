<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dristric extends Model
{
    //
    protected $table = 'dristric';

    protected $primaryKey = 'dr_id';

    public $incrementing = false;

    protected $fillable = ['dr_id','dr_name','dr_name_en','pr_id'];

    public function province(){
        return $this->belongsTo(Province::class,'pr_id','pr_id');
    }
}
