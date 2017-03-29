@extends('welcome')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Lista de Lenguajes de Programación
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box box-success">
        <div class="box-body">
            <table class="table table-hover table-striped">
                <tbody>
                    <tr>
                        <th style="width:5%;">#</th>
                        <th style="width:20%">Nombre</th>
                        <th style="width:15%">Año de lanzamiento</th>
                        <th style="width:40%">Características</th>
                        <th style="width:20">Acciones</th>
                    </tr>
                    @foreach($languages as $language)
                    <tr>
                        <td>{{ $language->id }}</td>
                        <td>{{ $language->name }}</td>
                        <td>
                            @if($language->release_year === 1)
                            --
                            @else
                            {{ $language->release_year }}
                            @endif
                        </td>
                        <td>
                            @if($language->imperative)
                            <span class="label label-primary">Imperativo</span>
                            @endif
                            @if($language->object_oriented)
                            <span class="label label-info">Orientado a objetos</span>
                            @endif
                            @if($language->functional)
                            <span class="label label-warning">Funcional</span>
                            @endif
                            @if($language->procedural)
                            <span class="label label-danger">Procedural</span>
                            @endif
                            @if($language->generic)
                            <span class="label" style="background-color:navy;">Genérico</span>
                            @endif
                            @if($language->reflective)
                            <span class="label" style="background-color:teal">Reflectivo</span>
                            @endif
                            @if($language->event_driven)
                            <span class="label" style="background-color:purple">Dirigido a eventos</span>
                            @endif
                            @if($language->standarized)
                            <span class="label" style="background-color:marron">Estandarizado</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm"><a href="/lenguajes/{{ $language->id }}"><i class="fa fa-eye"></i></a></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                @if(count($language->stats) > 0)
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-bar-chart-o"></i></button>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer pull-right">
            Fuente: <a href="https://en.wikipedia.org/wiki/Comparison_of_programming_languages"><i class="fa fa-wikipedia-w"></i> Wikipedia</a>
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
@endsection
