<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accholder extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'upi_id';
    public $incrementing = false;
}
