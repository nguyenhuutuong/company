<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebInformation extends Model
{
    use HasFactory;
 
    protected $table = 'web_informations';

    protected $fillable = [
        'logo',
        'email',
        'name',
        'phone',
        'branch',
    ]; 
}
