@extends('layouts.admin')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div>
                    <h1>elenco progetti</h1>
                </div>
                <div class="my-2">
                    <a href="{{ route('admin.posts.create')}}" class="btn btn-primary">aggiungi progetto</a>
                </div>

            </div>
            


        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>id</th>
                    <th>titolo</th>
                    <th>linguaggio</th>
                    
                    <th>slug</th>
                    <th>azioni</th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->language}}</td>
                       
                        <td>{{$post->slug}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection