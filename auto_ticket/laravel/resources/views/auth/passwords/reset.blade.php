@extends('layouts.app')

@section('content')
    <form action=" # ">
        <div class="content">
            <h1>Réinitialiser son mot de passe</h1>
            <p>Compléter les champs ci-dessous pour réinitialiser son mot de passe.</p>
            <hr>
            <label for="email"><b>Email :</b></label>
            <input type="email" placeholder="Entrer votre email" name="email" id="email" required>
            <hr>
            <button type="submit" class="button-register">Réinitialiser !</button>
        </div>
    </form>
@endsection
