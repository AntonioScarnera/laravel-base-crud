@extends('layouts.default')

@section('pageTitle', 'La Molisana - Nuovo Prodotto')

@section('mainContent')
    
    <section>
        <div class="container">
            <form action="{{route('products.update', $product)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="Text" class="form-control" name="title" id="title" value="{{$product->title}}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description"  cols="30" rows="10">{{$product->description}}</textarea>
                </div>

                <div class="mb-3 ">
                    <label for="image" class="form-label">Image Url</label>
                    <input type="Text" class="form-control" name="image" id="image" value="{{$product->image}}">
                </div>

                <div class="mb-3 ">
                    <label class="form-label" for="type">Select Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="comic book" {{$product->type == 'comic book' ? 'selected' :''}}>Comic Book</option>
                        <option value="graphic novel" {{$product->type == 'graphic novel' ? 'selected' :''}}>Graphic Novel</option>
                    </select>
                </div>

                <div class="mb-3 ">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}">
                </div>

                <div class="mb-3 ">
                    <label for="date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" name="date" id="date" value="{{$product->sale_date}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Modifica</button>
              </form>
        </div>
    </section>

@endsection