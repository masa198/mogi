<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Register;

class Register extends Model
{
    use HasFactory;
        protected $table = 'register';
        // テーブル名のていぎ
        protected $fillable = [
            'name',
            'email',
            'password'
        ];
}