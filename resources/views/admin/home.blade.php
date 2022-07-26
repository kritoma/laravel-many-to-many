@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{route ('admin.posts.index')}}">Visualizza i Post</a>
                    <a class="btn btn-primary" href="{{route ('admin.categories.index')}}">Visualizza le Categorie</a>
                    <a class="btn btn-primary" href="{{route ('admin.tags.index')}}">Visualizza le tags</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
