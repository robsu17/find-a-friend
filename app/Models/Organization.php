<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Organization extends Model
{
    use HasFactory;

    protected $table = 'organizations';

    protected $fillable = [
        'name',
        'cep',
        'address',
        'whatsapp',
        'adminId'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'adminId');
    }
}

