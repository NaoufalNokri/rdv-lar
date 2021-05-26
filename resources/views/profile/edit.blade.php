@extends('layouts.app', ['title' => __('User Profile')])
@section('navbar')
@include('layouts.navbars.navs.guest')
@endsection
@section('content')
    @include('users.partials.header', [
        'title' => __('Bonjour') . ' '. auth()->user()->name,
        'class' => 'col-lg-12'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
        <div class="col-4"></div>
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('assets') }}/img/theme/team-3.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                       
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">20302030</span>
                                        <span class="description">CIN</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Nombre de Consultation</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Rendez-Vous en attente</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light">, 27</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ __('Bucharest, Romania') }}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{ __('Solution Manager - Creative Tim Officer') }}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ __('University of Computer Science') }}
                            </div>
                            <hr class="my-4" />
                            <p>Dans le cas d'urgence contactez-nous sur le 0520302030</p>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
