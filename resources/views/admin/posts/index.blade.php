@extends('layouts.admin')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            elenco
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>id</th>
                    <th>titolo</th>
                    <th>linguaggio</th>
                    <th>descrizione</th>
                    <th>slug</th>
                    <th>azioni</th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->language}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->slug}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection