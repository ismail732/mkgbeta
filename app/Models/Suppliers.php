<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'company_name', 
        'contact',
        'contact_1',
        'address',
        'city', 
        'email', 
        'description', 
        'company_id', 
        'is_active'];
}
