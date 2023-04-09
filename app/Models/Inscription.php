<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable=['level','nom','prenom','sexe','etablisement','date','nom','prenom','tele','adresse','profession','email'];
}
