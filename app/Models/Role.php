<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Shanmuga\LaravelEntrust\Models\EntrustRole;

class Role extends EntrustRole
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'display_name',
        'description',
        'created_at',
        'updated_at',
    ];

    public function permissionsRole()
    {
        return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id');
    } 

    // public function users()
    // {
    //     return $this->belongsToMany(Config::get('auth.providers.users.model'), Config::get('entrust.tables.role_users'), Config::get('entrust.foreign_keys.role'), Config::get('entrust.foreign_keys.users'));
    // }
}
