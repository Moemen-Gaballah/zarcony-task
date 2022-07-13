<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable= ['from', 'to', 'amount'];

    // transaction from user A
    public function fromUser(){
        return $this->belongsTo(User::class, 'from', 'id');
    }

    // transaction to user B
    public function toUser(){
        return $this->belongsTo(User::class, 'to', 'id');
    }
}
