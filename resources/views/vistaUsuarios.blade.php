<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Mi perfil - YA-PEDIDOS</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
        <link rel="stylesheet" href="assets/css/select.css">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #ea745d; -moz-box-shadow: 1px 1px 3px 2px #cc1414;
        -webkit-box-shadow: 1px 1px 3px 2px #cc1414;
        box-shadow:         1px 1px 3px 2px #cc1414;">
            <div class="container">
                <a href="/" class="navbar-brand js-scroll-trigger">YA-PEDIDOS</a>
                <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                    </ul>
                    @if(auth()->check())
                        <li class="btn btn-primary dropdown" style="background-color: #ffffff;" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Bienvenido {{auth()->user()->nombre }}
                        </a>
                        <div class="dropdown-menu sm-menu">
                            <a class="dropdown-item" href="/user">Mi perfil</a>
                            <div class="dropdown-divider"></div>   
                            <form method="POST" action="{{ route ('logout') }}">
                                {{csrf_field()}}
                                <button class="btn btn-primary">Cerrar sesión</button>
                            </form>
                        </div>
                        </li>
                    @else
                        <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('login') }}">Inicia sesión</a>
                            <a class="btn btn-primary" href="{{ url('register') }}">Registrate</a>
                        </li>
                    @endif    
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        
                            <div class="card-title mb-4">
                                <div class="d-flex justify-content-start">
                                    <div class="userData ml-3">
                                        <br><br><br>
                                        <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">Mi Perfil</h2>
                                    </div>
                                    <div class="ml-auto">
                                        <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <ul class="list-group">
                                        <li class="list-group-item text">Información Personal</li>
                                        <li class="list-group-item text"><span class="pull-left">
                                            <strong>Nombre</strong></span><br>
                                            <span class="pull-left text-muted">{{$usuario->nombre}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Apellido</strong></span><br>
                                            <span class="pull-left text-muted">{{$usuario->apellido}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Email</strong></span><br>
                                            <span class="pull-left text-muted">{{$usuario->correo}}</span>
                                        </li>
                                        <li class="list-group-item text">
                                            <span class="pull-left"><strong>Creación</strong></span><br>
                                            <span class="pull-left text-muted">{{$usuario->created_at}}</span>
                                        </li>
                                    </ul>
                                </div>

                                
                                <div class="col-9">
                                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="misDirecciones-tab" data-toggle="tab" href="#misDirecciones" role="tab" aria-controls="misDirecciones" aria-selected="true">Mis direcciones</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="misPedidos-tab" data-toggle="tab" href="#misPedidos" role="tab" aria-controls="misPedidos" aria-selected="false">Mis pedidos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="misReservas-tab" data-toggle="tab" href="#misReservas" role="tab" aria-controls="misReservas" aria-selected="false">Mis reservas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="editarPerfil-tab" data-toggle="tab" href="#editarPerfil" role="tab" aria-controls="editarPerfil" aria-selected="false">Editar información</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content ml-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="misDirecciones" role="tabpanel" aria-labelledby="misDirecciones-tab">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label><strong>Alias</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Calle</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Número</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Comuna</strong></label>
                                                </div>

                                                @foreach($usuario->direcciones as $direccion)
                                                    <div class="col-sm-3 text-muted">
                                                        <label>{{$direccion->alias}}</label>
                                                    </div>
                                                    <div class="col-sm-3 text-muted">
                                                        <label>{{$direccion->calles->nombre}}</label>
                                                    </div>
                                                    <div class="col-sm-3 text-muted">
                                                        <label>{{$direccion->calles->numero}}</label>
                                                    </div>
                                                    <div class="col-sm-3 text-muted">
                                                        @foreach($comunas as $comuna)
                                                            @if($comuna->id == $direccion->calles->calles_comunas->first->id->id_comuna)
                                                                <label>{{$comuna->nombre}}</label>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="misPedidos" role="tabpanel" aria-labelledby="misPedidos-tab">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label><strong>Fecha</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Restaurant</strong></label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><strong>Valor</strong></label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><strong>Tipo</strong></label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><strong>Estado</strong></label>
                                                </div>

                                                @foreach($usuario->pedidos as $pedido)
                                                    <div class="col-sm-3 text-muted">
                                                        <label><strong>{{$pedido->fecha}}</strong></label>
                                                    </div>

                                                    <div class="col-sm-3 text-muted">
                                                        <label><strong>{{$pedido->restaurantes->nombre}}</strong></label>
                                                    </div>

                                                    <div class="col-sm-2 text-muted">
                                                        <label><strong>{{$pedido->pagos->monto}}</strong></label>
                                                    </div>

                                                    @if($pedido->tipo_entrega == false) <!--Retiro-->
                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>Retiro</strong></label>
                                                        </div>

                                                        @if($pedido->estado == false) <!--No completado-->
                                                            <div class="col-sm-2 text-muted">
                                                                <label><strong>Incompleto</strong></label>
                                                            </div>
                                                        @elseif($pedido->estado == true) <!--Completado-->
                                                            <div class="col-sm-2 text-muted">
                                                                <label><strong>Completado</strong></label>
                                                            </div>
                                                        @endif

                                                    @elseif($pedido->tipo_entrega == true) <!--Despacho-->
                                                        <div class="col-sm-2 text-muted">
                                                            <label><strong>Despacho</strong></label>
                                                        </div>

                                                        @if($pedido->estado == false) <!--No entregado-->
                                                            <div class="col-sm-2 text-muted">
                                                                <label><strong>Incompleto</strong></label>
                                                            </div>
                                                        @elseif($pedido->estado == true) <!--Entregado-->
                                                            <div class="col-sm-2 text-muted">
                                                                <label><strong>Entregado</strong></label>
                                                            </div>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="misReservas" role="tabpanel" aria-labelledby="misReservas-tab">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <label><strong>Fecha</strong></label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><strong>Hora inicio</strong></label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><strong>Hora fin</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Restaurant</strong></label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label><strong>Estado</strong></label>
                                                </div>

                                                @foreach($usuario->reservas as $reserva)
                                                    <div class="col-sm-2 text-muted">
                                                        <label><strong>{{$reserva->fecha_resevacion}}</strong></label>
                                                    </div>
                                                    <div class="col-sm-2 text-muted">
                                                        <label><strong>{{$reserva->horarios_mesas->hora_inicio}}</strong></label>
                                                    </div>
                                                    <div class="col-sm-2 text-muted">
                                                        <label><strong>{{$reserva->horarios_mesas->hora_fin}}</strong></label>
                                                    </div>
                                                    <div class="col-sm-3 text-muted">
                                                        <label><strong>{{$reserva->horarios_mesas->mesas->restaurantes->nombre}}</strong></label>
                                                    </div>
                                                    @if($reserva->estado == false)
                                                        <div class="col-sm-3 text-muted">
                                                            <label><strong>Incompleta</strong></label>
                                                        </div>
                                                    @elseif($reserva->estado == true)
                                                        <div class="col-sm-3 text-muted">
                                                            <label><strong>Completada</strong></label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div> 
                                        </div>

                                        <div class="tab-pane fade show text-center" id="editarPerfil" role="tabpanel" aria-labelledby="editarPerfil-tab">
                                            <div class="row center">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="nombreNuevo">Nombre</label>
                                                        <input type="text" id="nombreNuevo" class="form-control" placeholder="Nicolás">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="apellidoNuevo">Apellido</label>
                                                        <input type="text" id="apellidoNuevo" class="form-control" placeholder="Ayala">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nuevoMail">Correo electrónico</label>
                                                        <input type="text" class="form-control" id="nuevoMail" placeholder="NicoAyala@mail.com">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>