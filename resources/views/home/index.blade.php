@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('msg.dashboard')}}</div>
                <div class="card-body">

                    <!--<a href="product/create">Create product</a><br />
                    <a href="product/list">List of products</a>-->
                    <a href="{{ route('product.create') }}"><input type="submit" value="Create product"></a><br /><br />
                    <a href="{{ route('product.list') }}"><input type="submit" value="List of products"></a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
