<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'judul', 'tahun', 'isCompleted'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
