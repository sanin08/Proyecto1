@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">Create product</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('product.save') }}">
                    @csrf
                    <input type="text" placeholder="Enter name" name="name" value="{{ old('name') }}" /><br /><br />
                    <input type="text" placeholder="Enter description" name="description" value="{{ old('description') }}" /><br /><br />
                    <input type="text" placeholder="Enter price" name="price" value="{{ old('price') }}" /><br /><br />
                    <input type="text" placeholder="Enter category" name="category" value="{{ old('category') }}" /><br /><br />
                    <input type="text" placeholder="Enter brand" name="brand" value="{{ old('brand') }}" /><br /><br />
                    <input type="text" placeholder="Enter warranty" name="warranty" value="{{ old('warranty') }}" /><br /><br />
                    <input type="submit" value="Create" />
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
