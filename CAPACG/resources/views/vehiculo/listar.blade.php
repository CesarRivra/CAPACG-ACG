@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('partials.message')
        <div class="col-lg-10 col-md-offset-1">
        <br>
    
        <a class="btn btn-primary my-5" href="/vehiculos/create">
        <i class="fa fa-plus-circle" aria-hidden="true"></i></span> Crear nuevo Vehiculo</a> 
        <a class="btn btn-success my-5" href="/vehiculos/excel">
        <i class="fa fa-download" aria-hidden="true"></i></span> Generar Reporte</a> 
        <div class="btn-group">
        <button class="btn btn-warning dropdown-toggle my-5" type="button" data-toggle="dropdown">Filtrar Vehiculos
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
            <li><a class="btn btn-default " href="/vehiculos">
            <i class="fa fa-check" aria-hidden="true"></i> Estado Activo</a></li>

            <li><a class="btn btn-default filtrar" href="/vehiculos/filter">
            <i class="fa fa-times" aria-hidden="true"></i> Estado Inactivo</a></li>

            <li><a class="btn btn-default filtarDependencia" data-toggle="modal" data-target="#FiltrarDependencia">
            <span class="fa fa-list-alt" aria-hidden="true"></span> Dependencia</a></li>

            <li><a class="btn btn-default filtrarTipo" data-toggle="modal" data-target="#FiltrarTipo">
            <span class="fa fa-clone" aria-hidden="true"></span> Tipo</a></li>

            <li><a class="btn btn-default filtrarFecha" data-toggle="modal" data-target="#FiltrarFecha">
            <i class="fa fa-calendar" aria-hidden="true"></i> Fecha</a></li>
            
        </ul>
        </div>
       
            <br>
            <br>

            <div class="panel panel-info">

            {!! Form::open(['url' => 'vehiculos/search', 'method' =>'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                {!! Form::text('buscar', null,['class'=> 'form-control', 'placeholder' => 'Buscar']) !!}
                <button type="submit" class="btn btn-primary"><span class="fa fa-search" ></span></button>
            {!! Form::close() !!}

                <div class="panel-heading"><h4>Vehículos</h4> </div>
                <div class="panel-body">
                {{ $vehiculos->links() }}
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                             <tr>
                                @include('partials.thActivo')
                                <th>Serie</th>
                                <th>Opciones</th>
                                
                             </tr>
                      </thead>
                    <tbody>

                        @foreach ($vehiculos as $vehiculo)
                            <tr>
                                <td class="info"> {{$vehiculo->Placa}} </td>
                                <td class="info"> {{$vehiculo->Descripcion}} </td>
                                <td class="info"> {{$vehiculo->Programa}} </td>
                                <td class="info"> {{$vehiculo->SubPrograma}} </td>
                                <td class="info"> {{$vehiculo->Color}} </td>
                                
                                

                                <td class="info"> {{$vehiculo->Serie}} </td>
                                
                                <td class="warning"> 
                                <a class="btn btn-danger btn-xs fa fa-trash-o estado" data-estado ="{{$vehiculo->id}}" data-toggle="tooltip" data-placement="bottom" title="Eliminar"></a>
                                <a class="fa fa-eye btn btn-success btn-xs detalleVehiculo" data-vehiculo = "{{$vehiculo->id}}" data-toggle="tooltip" data-placement="bottom" title="Ver"></a>
                                <a href="/vehiculos/{{$vehiculo->id}}/edit" class="btn btn-warning btn-xs fa fa-pencil"data-toggle="tooltip" data-placement="bottom" title="Editar"></a>
                                <a href="#" class="btn btn-info btn-xs fa fa-link"data-toggle="tooltip" data-placement="bottom" title="Asignar Responsable"></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.estado')
@include('modals.detalleVehiculo')
@include('modals.modalPrueba')
@include('modals.filtrar')
@include('modals.filtrarDependencia')
@include('modals.filtrarTipo')
@include('modals.filtrarFecha')
    <script src="{{ asset('js/vehiculo.js') }}"></script> 
    <script type="text/javascript">
setTimeout(function(){
    $('#mensaje').fadeOut('fast');
}, 2000);
    
</script>
<script type="text/javascript">
    $(function(){
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
@endsection