<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vojske extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'vojskes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'vojska',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function tip_vojskes()
    {
        return $this->belongsToMany(Tipvojske::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
