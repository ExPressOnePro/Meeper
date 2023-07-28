<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public const TABLE = 'roles';

    protected $fillable = [
        'name',
        'slug',
    ];


    public function rolesPermissions()
    {
        return $this->hasMany(RolesPermissions::class);
    }

    public function permissions() {
        return $this->belongsToMany(Permissions::class,'roles_permissions');
    }

    public function UsersRoles() {
        return $this->belongsTo(UsersRoles::class, 'id', 'role_id');
    }

    public function rolesPermission() {
        return $this->belongsToMany(RolesPermissions::class,'id', 'role_id');
    }
}
