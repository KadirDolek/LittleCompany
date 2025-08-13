<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';
    protected $fillable = ['nom','type','descriptif','img','prix'];
}
