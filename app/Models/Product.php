<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name_en', 'name_bn', 'scientific_name', 'manufacture_company',
        'category_id', 'type_id', 'size', 'unit_id',
        'pack_qty', 'pack_type_id', 'pack_size',
        'image', 'price', 'commission', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function packType()
    {
        return $this->belongsTo(PackType::class);
    }
}
