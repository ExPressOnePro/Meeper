<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stands extends Model
{
    public const TABLE = 'stands';

    use HasFactory;

    protected $fillable = [
        'name',
        'congregation_id',
    ];

    /**
     * Get the congregations that owns the Stand
     *
     * @return BelongsTo
     */
    public function congregations(): BelongsTo
    {
        return $this->belongsTo(Congregations::class);
    }
}
