@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="content">
        <h1>Inscription</h1>
        <p>Compléter les champs ci-dessous pour finaliser votre inscription.</p>
        <hr>
        <label for="lastname"><b>Prénom :</b></label>
        <input type="text" placeholder="Entrer votre nom" name="lastname" id="lastname" required>
        <hr>
        <label for="firstname"><b>Nom :</b></label>
        <input type="text" placeholder="Entrer votre prénom" name="firstname" id="firstname" required>
        <hr>
        <label for="address"><b>Adresse :</b></label>
        <input type="text" placeholder="Entrer votre adresse" name="address" id="address" required>
        <hr>
        <label for="email"><b>Email :</b></label>
        <input type="email" placeholder="Entrer votre email" name="email" id="email" required>
        <hr>
        <label for="psw"><b>Mot de passe :</b></label>
        <input type="password" placeholder="Entrer votre mot de passe" name="password" id="psw" required>
        <hr>
        <label for="password-confirm"><b>Confirmer votre mot de passe :</b></label>
        <input type="password" placeholder="Confirmer votre mot de passe" name="password-confirm" id="password-confirm" required>
        <hr>
        <button type="submit" class="button-register">S'inscrire !</button>
    </div>
</form>
@endsection

