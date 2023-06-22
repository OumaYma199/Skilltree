@extends('base')

@section('title','Inscrire')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h1 class="text-center text-muted mb-3 mt-5">S'inscrire</h1>
                <p class="text-center text-muted mb-5">Si vous n'êtes pas encore inscrit, il est temps de créer votre compte.</p>
        <form method="POST" action="{{ route('login') }}" class="row g-3" id="form-register">
            @csrf

            <div class="col-md-6">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text"  name="prenom" class="form-control" id="prenom" value="{{ old('prenom')}}" required autocomplete="prenom" autofocus>
                <small class="text-danger fw-bold" id="error-register-prenom"></small>
            </div>
            <div class="col-md-6">
                <label for="nom"  class="form-label">Nom</label>
                <input type="text"  name="nom" class="form-control" id="nom" value="{{ old('nom')}}" required autocomplete="nom" autofocus>
                <small class="text-danger fw-bold" id="error-register-nom"></small>
            </div>
            <div class="col-md-12">
                <label for="email"  class="form-label">Email</label>
                <input type="email"  name="email" class="form-control" id="email" value="{{ old('email')}}"  autocomplete="email" autofocus>
                <small class="text-danger fw-bold" id="error-register-email"></small>
            </div>
            <div class="col-md-6">
                <label for="password"  class="form-label">Mot de passe</label>
                <input type="password"  name="password" class="form-control" id="password" value="{{ old('password')}}"  autocomplete="password" autofocus>
                <small class="text-danger fw-bold" id="error-register-password"></small>
            </div>

            <div class="col-md-6">
                <label for="password-confirm"  class="form-label">Confirmation du mot de passe</label>
                <input type="password"  name="password-confirm" class="form-control" id="password" value="{{ old('password-confirm')}}" required autocomplete="password-confirm" autofocus>
                <small class="text-danger fw-bold" id="error-register-password-confirm"></small>
            </div>
            <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Accepterlesconditions">
                <label class="form-check-label" for="Accepterlesconditions"> Accepter les conditions </label>
                <br>
                <small class="text-infos fw-bold" id="error-register-Accepterlesconditions"></small>
            </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button" id="register-user">S'inscrire</button>
            </div>
            <p class="text-center text-muted mt-5">Vous avez déjà un compte ? <a href="{{ route('login')}}">Connectez-vous.</a></p>
        </form>

            </div>
        </div>
    </div>

@endsection
