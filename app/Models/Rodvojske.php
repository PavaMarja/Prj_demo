<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rodvojske extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'rodvojskes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'rodvojske',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function rodvojskeTipvojskes()
    {
        return $this->hasMany(Tipvojske::class, 'rodvojske_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
