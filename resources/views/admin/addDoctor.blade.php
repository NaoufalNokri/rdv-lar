@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
          
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label class="text-white" for="">Nom :</label><input type="text" class="form-control" name="nom" id="exampleFormControlInput1" placeholder="Nom du medecin">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-white" for=""> Prénom :</label><input type="text" class="form-control" name="prenom" id="exampleFormControlInput1" placeholder="Prenom du medecin">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-white" for="">E-mail :</label> <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="E-mail du medecin">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-white" for=""></label><input type="email" class="form-control"  id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="text-white" for=""></label><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="text-white" for=""></label><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="submit" name="submit" class="form-control btn-success" id="exampleFormControlInput1" value="submit">
                </div>
              </div>
              
          </form>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush