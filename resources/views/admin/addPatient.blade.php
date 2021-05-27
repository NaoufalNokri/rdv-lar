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
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for="">Nom</label><input type="text" class="form-control" name="nom" id="exampleFormControlInput1" placeholder="Nom du medecin">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for=""> Prénom</label><input type="text" class="form-control" name="prenom" id="exampleFormControlInput1" placeholder="Prenom du medecin">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for="">E-mail</label> <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="E-mail du medecin">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for="cne">CNE</label><input type="text" class="form-control" name = "cne"  id="exampleFormControlInput1" placeholder="CNE">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="text-black" for="sexe">Sexe</label>
                  <select name="sexe" id="" class="form-control">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for="telephone">Telephone</label><input type="number" class="form-control" name="telephone" id="exampleFormControlInput1" placeholder="Telephone">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-white" for="specialite">Date de naissance</label>
                <input type="date" name="dn" class="form-control"/>
                </div>
              </div>

              
              <div class="col-4">
              </div>
              <div class="col-4">
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="submit" name="submit" class="form-control btn-success" id="exampleFormControlInput1" value="Add">
                </div>
              </div>
            <div>
          </form>
          </div>
        </div>
    </div>
        

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush