@extends('default.default')
@section('title')Mail
@endsection
@section('content')
    <div class="well col-sm-8">
        <h1>There is a new Post from {{ $post->author }}</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                </tr>
            </tbody>
        </table>
@endsection
