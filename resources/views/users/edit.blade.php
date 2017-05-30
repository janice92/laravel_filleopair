@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edition de l'utilisateur : {{$user->name}}</h1>
        <form action="{{ route('users.update', $user->id) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <input type="text" name="title" class="form-control" value="{{ $user->name }}" placeholder="Nom de l utilisateur" required>

           <input type="text" name="title" class="form-control" value="{{ $user->email }}" placeholder="Nom de l utilisateur" required>


            <select name="user" class="form-control" required>
                <option>Merci de sélectionner un utilisateur</option>
                @foreach($users AS $user)
                    <option value="{{ $user->id }}" {{ ( $user->id == $users->user->id ) ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-warning">Gonzaguerie</button>
        </form>
    </div>
@stop