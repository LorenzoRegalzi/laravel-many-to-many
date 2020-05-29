@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center">
                    <li class="nav.item">
                        <a class="nav-link active" href="{{route('admin.pages.create')}}">Aggiungi Pagina</a>
                    </li>
                    <li class="nav.item">
                        <a class="nav-link active" href="{{route('admin.pages.create')}}">Torna alla dashboard</a>
                    </li>
                </ul>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Categoria</th>
                            <th>Tags</th>
                            <th>Data crazione</th>
                            <th>Data update</th>
                            <th colspan="3">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as  $page)
                            <tr>
                                <td>{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->Categories->name}}</td>
                                <td>
                                    @foreach ($page->tags as $tag)
                                        {{$tag->name}} <br>
                                    @endforeach
                                </td>
                                <td>{{$page->created_at}}</td>
                                <td>{{$page->updated_at}}</td>
                                <td>Visualizza</td>
                                <td>Modificz</td>
                                <td>Elimina</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
