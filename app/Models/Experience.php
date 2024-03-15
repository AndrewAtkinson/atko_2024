<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['company', 'title', 'description', 'start_date', 'end_date'];

    /**
     * Scope a query to sort by date.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeDate($query)
    {
        $query->orderBy('start_date', 'desc');
    }
}
