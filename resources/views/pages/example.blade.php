@extends('layouts.master')

@section('title-page', "Pagina Maqueta")

@section('message')
{{-- Incluimos las plantillas de error and success --}}
@endsection

@section('content')

      <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">@yield('title-page')</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">@yield('title-page')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
      <!-- [ breadcrumb ] end -->
   
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>@yield('title-page')</h5>
                        @include('layouts.includes.frame.my_function_windows')
                    </div>
                    <div class="card-body">
                        <p>Aqui va el Contenido</p>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>

@endsection

 