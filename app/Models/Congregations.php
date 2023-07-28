<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Congregations extends Model
{
    use HasFactory;

    public const TABLE = 'congregations';

    protected $fillable = [
        'name',
        'address',
        'weekday_meeting',
        'weekend_meeting'
    ];

    /**
     * Get all of the stands for the Congregation
     *
     * @return HasMany
     */
    public function stand(): HasMany
    {
        return $this->hasMany(Stands::class, 'stand_id', 'id');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'congregation_id', 'id');
    }


}
