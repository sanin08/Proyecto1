@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                @php ($product = $data["product"])
                <div class="card-header">{{ $product->getName() }}</div>
                <div class="card-body">

                    <b>Product name:</b>        {{ $product->getName()        }}<br />
                    <b>Product desc:</b>        {{ $product->getDescription() }}<br /><br />
                    <b>Product price:</b>       {{ $product->getPrice()       }}<br /><br />
                    <b>Product category:</b>    {{ $product->getCategory()    }}<br />
                    <b>Product brand:</b>       {{ $product->getBrand()       }}<br /><br />
                    <!--<b>Product warranty:</b>    {{ $data["product"]["warranty"]}}   <br /><br />-->
                    
                    <form method="POST" action="{{ route('product.destroy', $product->getId()) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete &quot;{{ $product->getName() }}&quot;?')">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
