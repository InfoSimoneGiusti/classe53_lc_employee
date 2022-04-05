@extends('layouts.base')

@section('pageTitle', 'Crea un nuovo impiegato')

@section('content')

    <div class="container">

        <h1>Crea un nuovo impiegato</h1>

        <form method="POST" action="{{route('employees.store')}}">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Cognome</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}">
            </div>

            <div class="mb-3">
                <label for="badge_number" class="form-label">Matricola</label>
                <input type="text" class="form-control" id="badge_number" name="badge_number"
                    value="{{ old('badge_number') }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Ruolo</label>
                <select class="form-select" name="role" id="role">
                    <option {{ old('role') == 'segretario' ? 'selected' : '' }} value="segretario">Segretario</option>
                    <option {{ old('role') == 'capoprogetto' ? 'selected' : '' }} value="capoprogetto">Capoprogetto</option>
                    <option {{ old('role') == 'programmatore' ? 'selected' : '' }} value="programmatore">Programmatore
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Foto</label>
                <input type="text" class="form-control" id="photo" name="photo" value="{{ old('photo') }}">
            </div>

            <div class="mb-3">
                <label for="level" class="form-label">Livello</label>
                <input type="number" class="form-control" id="level" name="level" value="{{ old('level') }}">
            </div>


            <button type="submit" class="btn btn-primary">Invia</button>

        </form>

    </div>

@endsection
