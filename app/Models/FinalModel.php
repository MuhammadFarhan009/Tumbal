<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalModel extends Model
{
    protected $table = 'nama_dosen';
    protected $fillable = ['ID', 'nama'];
    
}
