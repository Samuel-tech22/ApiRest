<?php

namespace App\Models;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [

    ];
    
    /**
     * Get all of the invoices for the costomer
     * 
     * @return \Illuminante\Database\Elocuent\Relations\HasMany
     */
    public function invoices()
    {
        return $this-> hasMany (Invoice::class);
    }
}
