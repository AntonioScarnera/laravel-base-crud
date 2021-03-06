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
                  <input type="Text" class="form-control" name="title" id="title" placeholder="Insert Title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description"  cols="30" rows="10" placeholder="Insert Description"></textarea>
                </div>

                <div class="mb-3 ">
                    <label for="image" class="form-label">Image Url</label>
                    <input type="Text" class="form-control" name="image" id="image" placeholder="Insert Image Url">
                </div>

                <div class="mb-3 ">
                    <label class="form-label" for="type">Select Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                </div>

                <div class="mb-3 ">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Insert Price">
                </div>

                <div class="mb-3 ">
                    <label for="date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" name="date" id="date" placeholder="Insert Sale Date">
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </section>

@endsection