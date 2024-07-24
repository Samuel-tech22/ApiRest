<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [

    ];

    /**
     * Get the user that owns the Invoice
     * 
     * @return \Illuminante\Database\Elocuent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this-> belongsTo (Invoice::class);
    }
}
