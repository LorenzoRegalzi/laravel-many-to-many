@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($errors->all() as $message)
                    {{$message}}
                @endforeach
                <form class="" action="{{route('admin.pages.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Sommario</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Testo</label>
                        <textarea name="body" id="" rows="10" cols="30" class="form-control">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            <h3>Tags</h3>
                            @foreach ($tags as $tag)
                                <label for="tags-{{($tag->id)}}">{{$tag->name}}</label>
                                <input type="checkbox" name="tags[]" id="tags-{{$tag->id}}" value="{{$tag->id}}">
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            <h3>Photo</h3>
                            @foreach ($photos as $photo)
                                <label for="tags-{{($photo->id)}}">{{$photo->name}}</label>
                                <input type="checkbox" name="tags[]" id="tags-{{$photo->id}}" value="{{$photo->id}}">
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Salva">
                </form>
            </div>
        </div>
    </div>
@endsection
