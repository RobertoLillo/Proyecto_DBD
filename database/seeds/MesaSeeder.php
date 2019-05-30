<?php

use Illuminate\Database\Seeder;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Mesa::class)->create([
            'cantidad_asientos'=>'',
            'estado_reservacion'=>'',
            'id_reserva'=>'',
            'id_restaurante'=>'1'

        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos'=>'',
            'estado_reservacion'=>'',
            'id_reserva'=>'',
            'id_restaurante'=>'1'

        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos'=>'',
            'estado_reservacion'=>'',
            'id_reserva'=>'',
            'id_restaurante'=>'1'

        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos'=>'',
            'estado_reservacion'=>'',
            'id_reserva'=>'',
            'id_restaurante'=>'1'

        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos'=>'',
            'estado_reservacion'=>'',
            'id_reserva'=>'',
            'id_restaurante'=>'1'

        ]);


		factory('App\Mesa',30)->create();
    }
}
