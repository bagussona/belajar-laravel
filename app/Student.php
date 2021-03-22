<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

class Student extends Model
{
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
