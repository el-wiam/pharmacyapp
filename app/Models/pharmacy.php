<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharmacy extends Model
{
    use HasFactory;
    protected $fillable = ['name','dr','email','mdp','patente','adresse','ville','num','quartier','cp','rc'];
}
