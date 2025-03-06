<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaksi extends Model
{
    use HasFactory;
    
    protected $table = 'tb_transaksi';
    // public $timestamps = false;
    public $timestamps = false;
    protected $fillable = [
        'id_outlet',
        'kode_invoice',
        'id_member',
        'tgl',
        'batas_waktu',
        'tgl_bayar',
        'biaya_tambahan',
        'diskon',
        'pajak',
        'status',
        'dibayar',
        'id_user'
    ];

    public function outlet() {
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }

    public function member()  {
        return $this->belongsTo(Pelanggan::class, 'id_member');
    }

    public function user()  {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function details() {
        return $this->hasMany(DetailTransaksi::class,'id_transaksi');
    }

    // protected static function boot() {
    //     parent::boot();

    //     static::updated(function ($transaksis) {
    //         // \Log::info('updating transaksi ID: ' .$transaksis->id);
            
    //         $detail = DB::table('tb_detail_transaksi')->where('id_transaksi', $transaksis->id)->first();

    //         if (!$detail) {
    //             DB::table('tb_detail_transaksi')->insert([
    //                 'id_transaksi' => $transaksis->id,
    //                 'id_paket' => request()->id_paket ?? null,
    //                 'qty' => request()->qty ?? null,
    //                 'keterangan' => $transaksis->dibayar,
    //                 'created_at' => now(),
    //                 'updated_at' => now(),
    //             ]);   
    //         }
    //     });
    // }
}
