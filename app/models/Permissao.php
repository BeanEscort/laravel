<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model 
{

    protected $table = 'permissoes';
    public $timestamps = false;
    protected $fillable = array('nome', 'slug');

}