<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'reference',
        'merchant_ref',
        'package_name',
        'fullname',
        'email',
        'phone',
        'address',
        'total_amount',
        'method',
        'status',
    ];
}
