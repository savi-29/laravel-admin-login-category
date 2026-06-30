<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function categoryInsert($id)
    {
        if($id['category_id']=="")
        {
            return DB::table('category')->insert([
                "category_name"=>$id['category_name'],
                "category_desc"=>$id['category_desc']
            ]);
        }
    }
    
}