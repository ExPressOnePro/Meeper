<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    public const TABLE = 'permissions';

    protected $fillable = [
        'name',
        'slug',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }

    public function rolesPermissions()
    {
        return $this->hasMany(RolesPermissions::class);
    }
}
