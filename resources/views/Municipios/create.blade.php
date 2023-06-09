@extends('template.master')
@section('contenido_central')

<!-- ***** Banner Start ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="main-profile ">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="main-info header-text">
                        <h1>Crear Municipio</h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                    <ul>
                        <li>
                            {!! Form::open(['url'=>'/municipios']) !!}
                            {!! Form::label ('id_pais','Pais:') !!}
                            <span>
                                {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , null
                                ,[
                                    'placeholder'=>'Seleccionar ...',
                                    'class'=>'form-control',
                                    'onchange'=>'cargarEntidades(this.value);'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('id_entidad','Entidad:') !!}
                            <span>
                                {!! Form::select ('id_entidad', array(''=>'') , null
                                ,[
                                    'placeholder'=>'Seleccionar ...',
                                    'class'=>'form-control'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('nombre','Nombre del municipio') !!}
                            <span>
                                {!! Form::text ('nombre',null,[
                                    'placeholder'=>'Ingresa nombre del municipio',
                                    'class'=>'form-control'
                                    ]) !!}
                            </span>
                        </li>
                        <li>
                            {!! Form::label ('status','Status:') !!}
                            <span>
                                {!! Form::select ('status',
                                array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...', 'class'=>'form-control']) !!}
                            </span>
                        </li>
                        <li>
                            <span>
                                {!! Form::submit('Guardar Municipio') !!}
                                {!! Form::close() !!}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Banner End ***** -->


@endsection()