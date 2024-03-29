<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = [];

    /*protected $fillable = [
        'title'
    ];*/

    public function user() {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
