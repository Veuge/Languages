@extends('welcome')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Detalles lenguaje de programación
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="../../dist/img/photo1.png" alt="User profile picture">
                    <h3 class="profile-username text-center">{{ $lenguaje->name }}</h3>
                    <p class="text-muted text-center">Año de lanzamiento {{ $lenguaje->release_year }}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            @if($lenguaje->imperative)
                            <span class="label label-primary">Imperativo</span>
                            @endif
                            @if($lenguaje->object_oriented)
                            <span class="label label-info">Orientado a objetos</span>
                            @endif
                            @if($lenguaje->functional)
                            <span class="label label-warning">Funcional</span>
                            @endif
                            @if($lenguaje->procedural)
                            <span class="label label-danger">Procedural</span>
                            @endif
                            @if($lenguaje->generic)
                            <span class="label" style="background-color:navy;">Genérico</span>
                            @endif
                            @if($lenguaje->reflective)
                            <span class="label" style="background-color:teal">Reflectivo</span>
                            @endif
                            @if($lenguaje->event_driven)
                            <span class="label" style="background-color:purple">Dirigido a eventos</span>
                            @endif
                            @if($lenguaje->standarized)
                            <span class="label" style="background-color:marron">Estandarizado</span>
                            @endif
                        </li>

                        <li class="list-group-item">
                            <b>Proyectos en los que se usa</b>
                            @if(count($lenguaje->projects))
                                @foreach($lenguaje->projects as $project)
                                    <a class="pull-right">{{ $project->name }}</a>
                                    <br>
                                @endforeach
                            @else
                                <a class="pull-right">--</a>
                            @endif
                        </li>
                        @if(count($lenguaje->stats))
                            @foreach($lenguaje->stats as $stat)
                                <li class="list-group-item">
                                    <b><i class="fa fa-github"></i> Cantidad de {{ $stat->type }}</b>
                                    <a class="pull-right">{{ $stat->pivot->quantity }}</a>
                                </li>
                            @endforeach
                        @endif
                        @if(count($lenguaje->uses))
                            <li class="list-group-item">
                                <b>Usos del lenguaje</b>
                                @foreach($lenguaje->uses as $use)
                                    <a class="pull-right">{{ $use->description }}</a>
                                    <br>
                                @endforeach
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer pull-right">
                    Fuente: <a href="https://www.githubarchive.org/"><i class="fa fa-github"></i> Github API</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
