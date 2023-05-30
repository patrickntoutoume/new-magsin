@extends('layout.app')
@section('title', 'Posts')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Liste des articles</h4>
                    <a href="{{ route('post.create') }}" class="btn btn-success btn-sm">Créer un article</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Catégorie</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                                @foreach ($posts as $post)
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td>{{$post->cover}}</td>
                                    <td>{{$post->catgory}}</td>
                                @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection