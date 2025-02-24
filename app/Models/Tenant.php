<?php

namespace App\Models;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends BaseTenant
{
    use HasFactory;

    protected $fillable = ['id', 'domain', 'data'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

