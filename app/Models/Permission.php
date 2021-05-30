<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Shanmuga\LaravelEntrust\Models\EntrustPermission;

class Permission extends EntrustPermission
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'display_name',
        'description',
        'group_permission_id',
        'createa_at',
        'updated_at',
    ];

    public function permissionChildrent()
    {
        return $this->hasMany(Permission::class, 'parent_id');
    } 

}
