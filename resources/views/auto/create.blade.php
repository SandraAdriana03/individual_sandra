@extends('layouts.app')
@section('title', 'Adauga Auto')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form action="{{ route('auto.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nume">Nume</label>
        <input type="text" name="nume" id="nume">
    </div>
    <div class="mb-3">
        <label for="nume">Combustibil</label>
        <select name="combustibil" id="combustibil">
            <option>Benzina</option>
            <option>Motorina</option>
            <option>Gaz</option>
        </select>    
    </div>
    <div class="mb-3">
        <label for="motor">Capacitatea motor</label>
        <input type="text" name="motor" id="motor">
    </div>
    <div class="mb-3">
        <label for="pret">Pret</label>
        <input type="number" name="pret" id="pret">
    </div>
    <div class="mb-3">
        <label for="kilometraj">kilometraj</label>
        <input type="number" name="kilometraj" id="kilometraj">
    </div>
    <button type="submit">Salveaza</button>
  </form>
@endsection
 @push('styles')
 
 <style>
        form{
            width: 100%;
            margin-top: 40px;
            padding: 15px;
        }
        .mb-3{
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }
        .mb-3 label{
            font-weight: bold;
        }
        .mb-3 input, .mb-3 select{
            padding: 5px 15px;
        }
        form button{
            padding: 5px 15px;
            background-color: black;
            color: white;
        }
        form button:active{
            background-color: #2d3748
        }

    </style>
 @endpush

 