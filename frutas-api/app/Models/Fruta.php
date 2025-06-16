<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Fruta extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'color', 'fecha_cosecha', 'categoria_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($fruta) {
            $fruta->fecha_caducidad = Carbon::parse($fruta->fecha_cosecha)->addDays(7);
        });

        static::updating(function ($fruta) {
            if ($fruta->isDirty('fecha_cosecha')) {
                $fruta->fecha_caducidad = Carbon::parse($fruta->fecha_cosecha)->addDays(7);
            }
        });
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}