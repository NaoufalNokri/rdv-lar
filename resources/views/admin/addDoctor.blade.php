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
                <label class="text-black" for="type">Type du proffessionnel</label>
                <select name="type" id="" class="form-control">
                  <option value="docteur">Docteur</option>
                  <option value="proffessionnel sante">Proffessionnel santé</option>
                </select>
                </div>
              </div>

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
                <label class="text-black" for="region">Région</label><input type="text" class="form-control" name = "region"  id="exampleFormControlInput1" placeholder="Region du docteur">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="text-black" for="ville">Ville</label><input type="text" class="form-control" name="ville" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for="tarif">Tarif</label><input type="number" class="form-control" name="tarif" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-white" for="specialite">Spécialité</label>
                <select name="specialite" id="" class="form-control">
                <option value="s1">specialite1</option>
                <option value="s2">specialite2</option>
                </select>
                </div>
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