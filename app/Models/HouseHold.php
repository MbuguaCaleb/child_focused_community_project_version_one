<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseHold extends Model
{
    use HasFactory;
    public $timeStamps = true;
    public $table = 'households';


    protected $fillable = [
        'no_of_children', 'country', 'custodian_id', 'custodian_name', 'sponsored_children'
    ];
}
