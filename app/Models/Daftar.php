<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'petani'; 
    protected $primaryKey = 'id';
    protected $fillable = ['nama','hp','kecamatan','desa', 'nmtumbuhan','kelas','luas','tumbuhan','waktu_panen','jumlah_bibit','koordinat','tanggal','user'];
}