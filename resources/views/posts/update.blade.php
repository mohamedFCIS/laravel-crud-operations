@extends('layouts.template')

@section('content')

<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Add </strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
    <form class="text-center" action="{{route("posts.update",$post)}}" method="post"style="color: #4f4b4b;" >
        @csrf
        @method("PUT")

            <!-- Title -->
            <div class="md-form mt-3">
                <label for="materialContactFormName">Title</label>

                <input type="text" id="materialContactFormName" class="form-control" name="title" value=" {{old("title") ?? $post["title"]}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- slug -->
            <div class="md-form">
                <label for="materialContactFormEmail">Slug</label>

                <input type="text" id="materialContactFormEmail" class="form-control" name="slug" value="{{old("slug") ?? $post["slug"]}}">
                @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="md-form">
                <label for="materialContactFormEmail">Version</label>

                <input type="number" id="materialContactFormEmail" class="form-control" name="version" value="{{old("version") ?? $post["version"]}}">
          
                @error('version')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

           

           
            <div class="md-form">
                <label for="">Content</label>

            <textarea id="" class="form-control md-textarea" rows="3" name="body">{{old("body") ?? $post["body"]}}</textarea>
            @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 " type="submit">Send</button>
           

        </form>
        <!-- Form -->

    </div>

</div>

@endsection