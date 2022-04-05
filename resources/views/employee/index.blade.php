@extends('layouts.base')

@section('pageTitle', 'Lista degli impiegati')

@section('content')

<div class="container">

    <a href="{{route('employees.create')}}" class="btn btn-primary">Crea un impiegato</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">Matricola</th>
            <th scope="col">Email</th>
            <th scope="col">Ruolo</th>
            <th scope="col">Livello</th>
            <th scope="col">Azioni</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td><img src="{{$employee->photo}}" alt="Fototessera di {{$employee->lastname}}"></td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->lastname}}</td>
                    <td>{{$employee->badge_number}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->role}}</td>
                    <td>{{$employee->level}}</td>

                    <td>
                        <a href="{{route('employees.show', ['employee' => $employee->id])}}" class="btn btn-primary">Vedi</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
      </table>

</div>

@endsection
