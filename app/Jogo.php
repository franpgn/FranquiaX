<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
	protected $fillable = [
		'nome',
		'empresa',
		'data',
		'console',
		'resumo'
	];
}
