<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $table = 'documentos';
    protected $primaryKey = 'doc_id';
    public $timestamps = false;
    protected $fillable = [
        'doc_nombre',
    ];
    protected $guarded = [];

}