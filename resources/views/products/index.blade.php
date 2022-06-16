@extends('layouts.default')

@section('pageTitle', 'Comic - Prodotti')

@section('mainContent')
    
    <section>
        <div class="container">
            <h1>Prodotto</h1>


            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Visualizza</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Cancella</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($prodotti as $prodotto)
                        <tr>
                            <td>{{$prodotto->title}}</td>
                            <td>{{$prodotto->series}}</td>
                            <td>{{$prodotto->price}}</td>
                            <td>{{$prodotto->type}}</td>
                            <td>{{$prodotto->sale_date}}</td>

                            <td><a href="{{route('products.show', $prodotto)}}" class="btn btn-info">Visualizza</a></td>
                            <td><a href="{{route('products.edit', $prodotto)}}" class="btn btn-warning">Modifica</a></td>
                            <td>
                                <form action="{{route('products.destroy', $prodotto)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancella</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>


        </div>
    </section>

@endsection