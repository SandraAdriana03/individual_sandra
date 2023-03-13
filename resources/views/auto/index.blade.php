@extends('layouts.app')

@section('title', 'Automobile')
 
@section('content')
@forelse($auto as $item)
<div class="card">
    <h2>Nume:{{ $item->nume}}</h2>
    <p>Combustibil:{{ $item->combustibil}}</p>
    <p>Motor:{{ $item->motor}}</p>
    <p>Pret:{{ $item->pret}}</p>
    <p>Kilometraj:{{ $item->kilometraj}}</p>
    <div>
        <a href="{{route('auto.edit',['auto'=>$item->id]) }}">Edit</a>
        <form action="{{route('auto.destroy',['auto'=>$item->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    </div>
</div>
@empty
<p>Nu sunt automobile</p>
@endforelse
@endsection
@push('styles')
 <style>
    #app{
        margin-top:40px;
        display:flex;
        flex-wrap:wrap;
        gap:15px;
    }
    .card{
        padding:15px;
        border:1px solid black;
    }
    .card > *{
      margin:0;
      line-height: 1.5;
    }
    .butons{
        display:flex;
        justify-content:space-between;
    }
    .buttons a{
        color:white;
        padding:5px 15px;
        background-color:orange;
    }
    .buttons button{
        padding:5px 15px;
        color:white;
        background-color:red;
    }
 </style>
@endpush