<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipvojske extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'tipvojskes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'naziv_tipvojske',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function vrstaoruzjas()
    {
        return $this->belongsToMany(Oruzja::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
