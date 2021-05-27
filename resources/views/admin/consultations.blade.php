@extends('layouts.app')
@section('sidebar')
  @include('layouts.navbars.sidebars.adminSidebar')
@endsection
@section('navbar')
  @include('layouts.navbars.navs.auth')
@endsection
@section('content')
<div class="header bg-default pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
            </div>
        </div>
    </div>
</div>
    
    <div class="container-fluid mt--7">
        <div class="card" >
            <div class="card-body">
            <div class="table-responsive">
        <table class="table align-items-center">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom patient</th>
                <th scope="col">Nom medecin</th>
                <th scope="col">CNE patient</th>
                <th scope="col">Date</th>
                <th scope="col">Heure Debut</th>
                <th scope="col">Sujet</th>
                <th scope="col">Action</th>

                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <div class="media align-items-center">
                        
                        <div class="media-body">
                            <span class="mb-0 text-sm">1</span>
                        </div>
                    </div>
                </th>
                <td>
                 Khribech
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                   NOKRI
                    </span>
                </td>
                <td>
                  BB158693
                   

                </td>
                <td>
                    <div class="d-flex align-items-center">
                        14/02/2022
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        15:20
                    </div>
                </td>
                <td>
                <div class="text-left"">
                       Maux de Tete
                    </div>
                </td>
                <td class="text-center">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Update</a>
                        </div>
                    </div>
                </td>
            </tr>
     
           
                
          </div>
        </div>
    </div>
        

        
    </div>
    
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush