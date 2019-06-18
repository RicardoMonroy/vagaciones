@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('permissions.index') }}">Permisos</a>
        </li>
        <li class="breadcrumb-item">
            Creación
        </li>
        <!-- Breadcrumb Menu-->
        {{-- <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('permissions.create')
                <a class="btn" href="{{ route('permissions.create') }}">
                    <i class="icon-plus"></i> Crear</a>
            @endcan
        </div>
        </li> --}}
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- @can('permissions.create')
                                <a class="btn" href="{{ route('permissions.create') }}">
                                    <i class="icon-plus"></i> Crear</a>
                            @endcan --}}
                        </div>
                        <div class="card-body">
                            {{ Form::open(['route' => 'permissions.store']) }}
                                @include('permissions.partials.form')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
