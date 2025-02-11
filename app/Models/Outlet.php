<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $table = 'tb_outlet';

    protected $fillable = [
        'nama',
        'alamat',
        'tlp'
    ];

    public function users(){
        return $this->hasMany(User::class, 'id_outlet');
    }
}
