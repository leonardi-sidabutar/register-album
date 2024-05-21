<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Register extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'nik_sap',
        'fullname',
        'username',
        'password',
        'nickname',
        'company_code',
        'kebun',
        'namakebun',
        'afdeling',
        'kode_kebun',
        'kode_ptpn',
        'kode_afdeling',
        'token',
        'jabatan',
        'no_hp',
        'email',
        'regional',
        'namaafdeling'
    ]; // Tambahkan 'nik_sap' di sini

    public $timestamps = false;
}