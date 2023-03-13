@extends('layouts.app')
@section('title', 'Acasa')

@section('content')
  <h1>Bine ati venit!</h1>
  <p>Salonul auto AutoSud</p>
@endsection
 @push('styles')
 <style>
        #app h1{
            font-size: 20px;
            text-align: center;
            text-transform: uppercase;
            margin-top: 40px;
        }
        #app p{
            text-align: center
        }
    </style>

 
 @endpush

 @push('scripts')

 @endpush