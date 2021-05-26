@extends('layouts.app')
@section('navbar')
@include('layouts.navbars.navs.guest')
@endsection
@section('content')
<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; ">
<span class="mask bg-default opacity-6"></span>
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid mt--7">
    <div class="card bg-secondary">
          <div class="card-body">
          <form>
            <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for="date">Date et Heure de Rendez-vous</label><input type="datetime-local" class="form-control" name = "date"  id="date" >
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for="sp">Spécialité</label>
                <select name="sp" id="sp" class="form-control">
                  <option value="ai">L'allergologie ou l'immunologiecteur</option>
                  <option value="anest">L'anesthésiologie</option>
                  <option value="andrologie">L'andrologie</option>
                  <option value="cardio">La cardiologie</option>
                  <option value="chir">La chirurgie</option>
                  <option value="gastro">La gastro-entérologie</option>
                </select>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                <label class="text-black" for="medecin">Medecin</label>
                <select name="medecin" id="medecin" class="form-control">
                  <option value="yh20">Yassine EL HACHIMI</option>
                  <option value="Naoufal">Naoufal Nokri</option>
                </select>
                </div>
              </div>

              
              <div class="col-md-12">
                <div class="form-group">
                <label class="text-black" for="sym">Symptome</label>
                <textarea name="sym" id="sym" class="form-control" rows="10" placeholder="Quels sont vos Symptomes ..."></textarea>

               
                </div>
              </div>


              
              <div class="col-4"></div>
              <div class="col-4">
                <div class="form-group">
                  <input type="submit" name="submit" class="form-control btn-default" id="exampleFormControlInput1" value="Rendez-vous">
                </div>
              </div>
            <div>
          </form>
          </div>
        </div>
    </div>
        

    </div>
    @include('layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush