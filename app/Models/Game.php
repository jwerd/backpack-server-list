<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    
    public function server() {
        return $this->hasMany(Server::class);
    }

    /**
     * Get all of the games's attributes.
     */
    public function attributes()
    {
        return $this->morphMany('Attribute', 'attributable');
    }
}
