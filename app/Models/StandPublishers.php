<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StandPublishers extends Model
{
    use HasFactory, \OwenIt\Auditing\Auditable;


    /*    protected $guard_name = 'web';*/
    /* protected $fillable = [
         'user_1', 'user_2', 'stand_template_id',
     ];*/

    public const TABLE = 'stands_publishers';

    protected $table = self::TABLE;

    protected $fillable = [
        'day',
        'time',
        'date',
        'stand_template_id',
        'user_1',
        'user_2',
        'user_3',
        'user_4',

    ];

    /**
     * Get all of the standTemplates for the StandPublishers
     *
     * @return HasMany
     */
    public function standTemplates(): HasMany
    {
        return $this->hasMany(StandTemplate::class, 'id', 'stand_template_id');
    }



    /**
     * Get the user associated with the StandPublishers
     *
     * @return HasOne
     */
    public function user(): HasOne {
        return $this->hasOne(User::class, 'id', 'user_1');
    }

    /**
     * Get the user associated with the StandPublishers
     *
     * @return HasOne
     */
    public function user2(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_2');
    }

    public function user3(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_3');
    }
    /**
     * Get the user associated with the StandPublishers
     */
    public function users(){
        return $this->hasMany(User::class, '');
    }

    public function standReports(){
        return $this->hasMany(StandReports::class, '');
    }
}
