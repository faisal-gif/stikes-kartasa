<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Navbar extends Model
{
    use HasFactory;
    protected $table='navbar';
    protected $guarded=[];
    
    public function Menu(): HasMany
    {
        return $this->hasMany(Menu::class);
    }

}
