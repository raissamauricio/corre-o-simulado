<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movimentacao extends Model
{
    protected $fillable = [
        'quantidade',
        'data_movimentacao',
        'tipo',
        'produto_id',
        'user_id'
    ];
    
    public function prodututo(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }

     public function user(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }
  
}
