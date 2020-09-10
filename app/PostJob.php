<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostJob extends Model
{
    protected $fillable = [
        'name','category_id','nature_id','company_id','location',
        'primary_skill','secondary_skill','experience','salary',
        'description'
    ];
}
