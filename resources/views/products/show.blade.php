@extends('layouts.default')

@section('pageTitle', 'Comic - Prodotto')

@section('mainContent')
    
    <main>
        <div class="container">
            <h1>{{$product->title}}</h1>
            <img src="{{$product->image}}" alt="{{$product->title}}">
            <p>
                {{$product->description}}
            </p>
        </div>
    </main>

@endsection