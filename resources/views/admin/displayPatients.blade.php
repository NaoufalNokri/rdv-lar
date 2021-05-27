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
        <div class="card">
            <div class="card-body">
            <div class="table-responsive">
        <table class="table align-items-center">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">CNE</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">sexe</th>
                <th scope="col">age</th>
                <th scope="col">telephone</th>
                <th scope="col">Action</th>
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
                  NOKRI
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                    Naoufal
                    </span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        BB454698
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        10/10/1999
                    </div>
                </td>
                <td>
              
                        M
              
                </td>
                <td>
             
                        21
              
                </td>
                <td>
               
                        0615179828
                
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Edit</a>
                           
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
                
          </div>
        </div>
    </div>
        

        
    </div>
    
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush