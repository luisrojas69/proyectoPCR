@extends('layouts.master')

@section('title-page', "Home")

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

                            <div class="card-header-right">

                                <button type="button" 
                                        class="btn waves-effect waves-light btn-primary m-0 has-ripple" 
                                        data-toggle="modal" 
                                        data-target="#modal-report">
                                    <i class="feather icon-plus"></i>
                                    Nuevo Veh&iacute;culo
                                    <span class="ripple ripple-animate" 
                                        style="height: 137.031px; 
                                               width: 137.031px;
                                               animation-duration: 0.7s;
                                               animation-timing-function: linear; 
                                               background: rgb(255, 255, 255); 
                                               opacity: 0.4; 
                                               top: -40.508px; 
                                               left: -39.4767px;">
                                    </span>
                                </button>

                                 <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-car mr-1"></i>Agregar Veh&iacute;culo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="floating-label" for="Placa">Placa</label>
                                                            <input type="text" class="form-control" id="plate" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="Color">Color</label>
                                                            <input type="text" class="form-control" id="color" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="floating-label" for="Marca">Marca</label>
                                                            <input type="text" class="form-control" id="mark" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="Modelo">Modelo</label>
                                                            <input type="text" class="form-control" id="model" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="floating-label" for="Description">Descripcion</label>
                                                            <textarea class="form-control" id="Description" rows="3"></textarea>
                                                        </div>
                                            <button class="btn btn-primary" v-on:click.prevent="firstMethod">Enviar</button>
                                                        <button class="btn btn-danger">Limpiar</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                  
                    </div>

                    <div class="card-body">

                       <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">PLACA</th>
                                        <th class="border-top-0">MARCA</th>
                                        <th class="border-top-0">MODELO</th>
                                        <th class="border-top-0">COLOR</th>
                                        <th class="border-top-0"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr v-for="vehicle in arrayVehicles" :key="vehicle.id">
                                        <td v-text="vehicle.plate"></td>
                                        <td v-text="vehicle.mark"></td>
                                        <td v-text="vehicle.model"></td>
                                        <td v-text="vehicle.color"></td>
                                        <td>
                                            <a href="#" class="text-muted"><i class="feather icon-edit mr-1"></i></a>
                                            <a href="#"  v-on:click.prevent="deleteVehicle(vehicle)" class="text-muted"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>                               

                                </tbody>
                            </table>
                            <div class="pagination-block text-center">
                                <nav aria-label="Page navigation example" class="d-inline-block">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>

@endsection

 