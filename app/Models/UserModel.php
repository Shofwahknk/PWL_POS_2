<?php

namespace App\Models;

use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class UserModel extends Authenticatable implements JWTSubject {
    use HasFactory;

    protected $table = 'm_barangs';        // Mendefinisikan nama tabel yang digunakan untuk model ini
    protected $primaryKey = 'barang_id';  // Mendefinisikan primary key dari tabel yang digunakan

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
    protected $table = 'm_users';        // Mendefinisikan nama tabel yang digunakan untuk model ini
    protected $primaryKey = 'user_id';  // Mendefinisikan primary key dari tabel yang digunakan
    protected $fillable = ['barang_id', 'kategori_id', 'barang_kode', 'barang_nama', 'harga_beli','harga_jual','image'];
    // protected $fillable = ['level_id', 'username', 'nama'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    // protected $fillable = ['level_id','username','nama','password'];
 