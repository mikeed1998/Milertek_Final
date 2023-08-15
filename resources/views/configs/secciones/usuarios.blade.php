@extends('layouts.admin')

@section('cssExtras')
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>

    <style>      
        @media(min-width: 1800px) {

        }
    
        /* xxl */
        @media (min-width: 1400px) {
           
        }

        /* xl */
        @media (min-width: 1200px) and (max-width: 1400px) {
            

        }

        /* lg */
        @media (min-width: 992px) and (max-width: 1200px) {
         
        }

        /* md */
        @media (min-width: 768px) and (max-width: 992px) {
          

        }

        /* sm */
        @media (min-width: 576px) and (max-width: 768px) {
          

        }

        /* xs */
        @media (min-width: 0px) and (max-width: 576px) {
           
        }
    </style>
	

@endsection

@section('jsLibExtras')

@endsection

@section('styleExtras')

@endsection

@section('content')
@php
    $method_aux = $_GET['leng'];
@endphp
<div class="row mb-4 px-2">
    <div class="col-9">
        @if ($method_aux == 'eng')
            <a href="/admin/config/secciones/users_en" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i>Regresar</a>
        @else
            <a href="/admin/config/secciones/users" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i>Regresar</a>
        @endif
            
    
    </div>
    <div class="col-3 text-center">
        @php
            
            $dir1 = "".$usuario->id."?leng=eng";
            $dir2 = "".$usuario->id."?leng=esp";
        @endphp
        <a href="{{ $dir1 }}" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/usa.png') }}" alt=""></a>
        <a href="{{ $dir2 }}" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/mexico.png') }}" alt=""></a>
    </div>
</div>

    <div class="card fs-5 text-center">
        <div class="card-header">
            {{ $usuario->name ." ". $usuario->lastname }}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3 py-2 fs-5">
                    <label for="">{{ ($method_aux == 'eng') ? 'Phone number' : 'Telefono' }}</label>
                    <input disabled type="text" class="form-control" value="{{ $usuario->telefono }}" name="telefono_">
                </div>
                <div class="col-3 py-2 fs-5">
                    <label for="">{{ ($method_aux == 'eng') ? 'Username' : 'Nombre de usuario' }}</label>
                    <input disabled type="text" class="form-control" value="{{ $usuario->username }}" name="usuario_">
                </div>
                <div class="col-6 py-2">
                    <label for="">{{ ($method_aux == 'eng') ? 'Address' : 'Dirección' }}</label>
                    <input disabled type="text" class="form-control" value="{{ $usuario->address }}" name="direccion_">
                </div>
                <div class="col-3 py-2">
                    <label for="">{{ ($method_aux == 'eng') ? 'Suburb' : 'Colonia' }}</label>
                    <input disabled type="text" class="form-control" value="{{ $usuario->colonia }}" name="colonia_">
                </div>
                <div class="col-3 py-2">
                    <label for="">{{ ($method_aux == 'eng') ? 'Postal Code' : 'Código Postal' }}</label>
                    <input disabled type="text" class="form-control" value="{{ $usuario->codigo_postal }}" name="codigop_">
                </div>
                <div class="col-3 py-2">
                    <label for="">{{ ($method_aux == 'eng') ? 'State' : 'Estado' }}</label>
                    <input disabled type="text" class="form-control" value="{{ $usuario->estado }}" name="estado_">
                </div>
                <div class="col-3 py-2">
                    <label for="">{{ ($method_aux == 'eng') ? 'Town' : 'Municipio' }}</label>
                    <input disabled type="text" class="form-control" value="{{ $usuario->municipio }}" name="municipio_">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>{{ ($method_aux == 'eng') ? 'Only the owner user can modify their data' : 'Solamente el usuario propietario puede modificar sus datos' }}</small>
                </div>
            </div>
        </div>
        <div class="card-footer text-body-secondary">
            {{ ($method_aux == 'eng') ? 'Account created on: ' : 'Cuenta creada el: ' }} {{ $usuario->created_at->format('d/m/Y')  }}
        </div>
      </div>

@endsection

@section('jsLibExtras2')

    
@endsection

@section('jqueryExtra')


	

@endsection
