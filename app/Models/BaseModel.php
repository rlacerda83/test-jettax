<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class BaseModel extends Model
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT =  'updatedAt';
}
