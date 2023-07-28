<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StandTemplates extends Model
{
    use HasFactory;

    public const TABLE = 'stand_templates';

    protected $fillable = [
        'type',
        'week_schedule',
        'activation',
        'stand_id',
        'congregation_id',
    ];

    protected $casts = [
        'week_schedule' => 'array'
    ];

    /**
     * Get all the stands for the StandTemplate
     *
     * @return HasOne
     */
    public function stand(): HasOne
    {
        return $this->hasOne(Stands::class, 'id', 'stand_id');
    }

    /**
     * Get all the congregations for the StandTemplate
     *
     * @return HasOne
     */
    public function congregation(): HasOne
    {
        return $this->hasOne(Congregations::class, 'id', 'congregation_id');
    }

    /**
     * Get the standPublishers that owns the StandTemplate
     *
     * @return HasMany
     */
    public function standPublishers(): HasMany
    {
        return $this->hasMany(StandPublishers::class);
    }
}
