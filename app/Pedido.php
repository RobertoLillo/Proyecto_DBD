<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    
    protected $fillable = ['nombre_cliente', 'apellido_cliente', 'rut_cliente', 'correo_cliente',
    'fecha', 'tipo_entrega', 'hora_estimada', 'estado'];
    
    public function usuarios()
    {
    	return $this->belongsTo('App\User');
    }

    public function despachos()
    {
    	return $this->belongsTo('App\Despacho');
    }

    public function pedidos_productos()
    {
    	return $this->hasMany('App\Pedido_Producto');
    }

    public function pagos()
    {
        return $this->hasOne('App\Pago');
    }
}
