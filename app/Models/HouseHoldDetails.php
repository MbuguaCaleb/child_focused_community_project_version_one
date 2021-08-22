<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseHoldDetails extends Model
{
    use HasFactory;
    public  $table = 'registered_children';
    public $timeStamps = true;

    protected $fillable = [
        'first_name', 'last_name', 'age', 'profile_picture', 'dob', 'gender', 'is_sponsored', 'custodian_id'
    ];
}
