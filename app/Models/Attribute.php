<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    
    protected $fillable = [
        'attributable',
        'property',
        'property_value'
    ];
    
    public function attributable()
    {
        return $this->morphTo();
    }
}
