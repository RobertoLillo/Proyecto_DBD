<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	protected $table = 'pagos';
    protected $fillable = ['tipo', 'monto', 'fecha'];
    
    public function tarjetas()
    {
    	return $this->belongsTo('App\Tarjeta');
    }

    public function pedidos()
    {
    	return $this->belongsTo('App\Pedido');
    }
}
