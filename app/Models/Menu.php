<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;
    protected $table='menu';
    protected $guarded=[];

    public function Sub_Menu(): HasMany
    {
        return $this->hasMany(Sub_Menu::class);
    }
    
}
