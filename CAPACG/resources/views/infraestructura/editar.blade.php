@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Infraestructura</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/infraestructuras/{{$infraestructura->id}}" enctype="multipart/form-data" >
                    <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
               
                        <div class="form-group{{ $errors->has('Placa') ? ' has-error' : '' }}">
                            <label for="Placa" class="col-md-4 control-label">Placa o Patrimonio</label>

                            <div class="col-md-6">
                                <input id="Placa" type="text" class="form-control" name="Placa" value="{{ $infraestructura->activo->Placa}}" required autofocus>    

                                
                                @if ($errors->has('Placa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Placa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Descripcion') ? ' has-error' : '' }}">
                            <label for="Descripcion" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <input id="Descripcion" type="text" class="form-control" name="Descripcion" value="{{ $infraestructura->activo->Descripcion }}" required autofocus>                               
                           
                                @if ($errors->has('Descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('TipoActivo') ? ' has-error' : '' }}">
                        <label for="TipoActivo" class="col-md-4 control-label">Categoría</label>
                        <div class="col-md-6">
                        <select name="TipoActivo" id="tipoActivo_id" class="form-control" required>
                            
                        <option value="{{ $tipos->id }}">{{$tipos->Tipo}}</option>
                        @foreach($Tipos as $tipo)
                                                
                        <option value="{{$tipo['id']}}">{{$tipo['Tipo']}}</option>
                        
                            @endforeach
                        </select>

                        
                        @if ($errors->has('TipoActivo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('TipoActivo') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('Programa') ? ' has-error' : '' }}">
                            <label for="Programa" class="col-md-4 control-label">Programa</label>

                            <div class="col-md-6">
                                <input id="Programa" type="text" class="form-control" name="Programa" value="{{ $infraestructura->activo->Programa }}" required>                               
                           
                                @if ($errors->has('Programa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Programa') }}</strong>
                                    </span>
                                @endif
                           
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('SubPrograma') ? ' has-error' : '' }}">
                            <label for="SubPrograma" class="col-md-4 control-label">SubPrograma</label>

                            <div class="col-md-6">
                                <input id="SubPrograma" type="text" class="form-control" name="SubPrograma" value="{{ $infraestructura->activo->SubPrograma}}" required>                               
                           
                                @if ($errors->has('SubPrograma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('SubPrograma') }}</strong>
                                    </span>
                                @endif
                           
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Color') ? ' has-error' : '' }}">
                            <label for="Color" class="col-md-4 control-label">Color</label>

                            <div class="col-md-6">
                                <input id="Color" type="text" class="form-control" name="Color" value="{{ $infraestructura->activo->Color }}" required>                               
                           
                                @if ($errors->has('Color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Color') }}</strong>
                                    </span>
                                @endif
                           
                            </div>
                        </div>   

                     

                        <div class="form-group{{ $errors->has('Dependencia') ? ' has-error' : '' }}">
                            <label for="Dependencia" class="col-md-4 control-label">Dependencia</label>
                            <div class="col-md-6">
                            <select name="Dependencia" id="dependencia_id" class="form-control" required>
                                
                            <option value="{{ $dependencias->id }}">{{$dependencias->Dependencia}}</option>
                            @foreach($Dependencias as $dependencia)

                          
                            <option value="{{$dependencia['id']}}">{{$dependencia['Dependencia']}}</option>
                         
                                  
                                @endforeach
                            </select>

                            
                            @if ($errors->has('Dependencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Dependencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   

                        <div class="form-group">
                            <label for="Foto" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <input id="Foto" type="file" class="form-control" name="Foto" >
                            </div>
                        </div>
                       


                        <div class="form-group{{ $errors->has('NumeroFinca') ? ' has-error' : '' }}">
                            <label for="NumeroFinca" class="col-md-4 control-label">Número de Finca</label>

                            <div class="col-md-6">
                                <input id="NumeroFinca" type="text" class="form-control" name="NumeroFinca" value="{{ $infraestructura->NumeroFinca }}" required autofocus>    
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('AreaConstruccion') ? ' has-error' : '' }}">
                            <label for="AreaConstruccion" class="col-md-4 control-label">Área de Construcción</label>

                            <div class="col-md-6">
                                <input id="AreaConstruccion" type="text" class="form-control" name="AreaConstruccion" value = "{{$infraestructura->AreaConstruccion}}"  required autofocus>                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('AreaTerreno') ? ' has-error' : '' }}">
                            <label for="AreaTerreno" class="col-md-4 control-label">Área de Terreno</label>

                            <div class="col-md-6">
                                <input id="AreaTerreno" type="text" class="form-control" name="AreaTerreno" value="{{ $infraestructura->AreaTerreno }}" required>                               
                            </div>  
                        </div>

                        

                        <div class="form-group{{ $errors->has('AnoFabricacion') ? ' has-error' : '' }}">
                            <label for="AnoFabricacion" class="col-md-4 control-label">Año de Fabricación</label>

                            <div class="col-md-6">
                                <input id="AnoFabricacion" type="text" class="form-control" name="AnoFabricacion" value="{{ $infraestructura->AnoFabricacion }}" required>
                            </div>
                        </div>

                        

                        <div class="form-group" align = "center"></div>
                            <button type="submit" class="btn btn-success"> 
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Editar </button>
                            <a href="/infraestructuras" class="btn btn-default"> 
                            <i class="fa fa-times" aria-hidden="true"></i> Cancelar </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
