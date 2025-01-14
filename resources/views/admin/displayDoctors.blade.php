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
                <th scope="col">Type</th>
                <th scope="col">Spécialité</th>
                <th scope="col">Tarif</th>
                <th scope="col">Consultations réalisés</th>
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
                  NOKRI
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                    Naoufal
                    </span>
                </td>
                <td>
                   Medecin
                   

                </td>
                <td>
                    <div class="d-flex align-items-center">
                        Génichologue
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        250dh
                    </div>
                </td>
                <td>
                <div class="text-center"">
                        12
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                <div class="media align-items-center">
                        
                        <div class="media-body">
                            <span class="mb-0 text-sm">2</span>
                        </div>
                    </div>
                </th>
                <td>
                   ELHACHIMI
                </td>
                <td>
                    <span class="badge badge-dot">
                    Yassine
                    </span>
                </td>
                <td>
                    Proffessionnel santé
                </td>
                <td>
                  Cardiologue
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        250dh
                    </div>
                </td>
                <td>
                <div class="text-center"">
                        25
                    </div>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
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