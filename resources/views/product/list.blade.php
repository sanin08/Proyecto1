@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">List of products</div>
                <div class="card-body">

                    <ul>
                        @foreach($data["products"] as $product)
                            <!-- Solo puse los atrubutos Nombre, Precio y Marca para que se vea más organizado, pero se le pueden agregar todos. -->
                            @if($loop->index <= 1)
                                <li><a href="{{ route('product.show', $product->getId()) }}"><b>{{ $product->getId() }}</b></a> - 
                                    {{ $product->getName() }} : 
                                    {{ $product->getPrice() }} - 
                                    {{ $product->getBrand() }}
                                </li>                                    
                            @else
                                <li><a href="{{ route('product.show', $product->getId()) }}">{{ $product->getId() }}</a> - 
                                    {{ $product->getName() }} : 
                                    {{ $product->getPrice() }} - 
                                    {{ $product->getBrand() }}
                                </li>
                            @endif                           
                        @endforeach
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
