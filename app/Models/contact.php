<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
   protected $afilable =[
    'full_name',
    'campus_email',
    'department',
    'message',
   ]; //
}
