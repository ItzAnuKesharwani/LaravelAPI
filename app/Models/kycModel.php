<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kycModel extends Model
{
    use HasFactory;

    protected $table = 'kyc_tbl';

    protected $fillable = ['first_name', 'last_name', 'dob','email', 'mobile_no', 'address','city','state','country','pincode','created_at','updated_at','status'];
    protected $primaryKey = 'id';
}
