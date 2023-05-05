<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 2;
    const RW = 3;
    const KRT = 4;
    const PKK = 5;
    const TAKMIR = 6;
    const NOACCESS = 7;
}
