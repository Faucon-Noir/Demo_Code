@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="content">
            <h1>Connexion</h1>
            <p>Compléter les champs ci-dessous pour vous connectez.</p>
            <hr>
            <label for="email"><b>Email :</b></label>
            <input type="email" placeholder="Entrer votre email" name="email" id="email" required>
            <hr>
            <label for="psw"><b>Mot de passe :</b></label>
            <input type="password" placeholder="Entrer votre mot de passe" name="password" id="psw" required>
            <hr>
            <p>Vous avez oublié votre mot de passe ?<a href="/password/reset" style="color:dodgerblue"><br>Réinitialiser votre mot de passe</a>.</p>
            <button type="submit" class="button-register">Se connecter !</button>
        </div>
    </form>
@endsection
