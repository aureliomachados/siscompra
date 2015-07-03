<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model {

	    protected $fillable = ['descricao', 'status', 'dataAbertura', 'dataFechamento'];
}
