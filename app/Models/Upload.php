<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $table = 'uploads';
    protected $fillable = ['src', 'mime_type', 'size'];

    public function categories()
    {
        return $this->hasMany(Category::class, 'thumbnail_id', 'id');
    }

    public function packages()
    {
        return $this->hasMany(Package::class, 'thumbnail_id', 'id');
    }

    public function payment_gateways()
    {
        return $this->hasMany(PaymentGateway::class, 'thumbnail_id', 'id');
    }

    public function upgrade_packages()
    {
        return $this->hasMany(UpgradePackage::class, 'thumbnail_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'thumbnail_id', 'id');
    }
}
