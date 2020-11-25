@extends('layouts.template')

@section('content')

    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Add Posts</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" action="{{ route('posts.insert') }}" method="post" style="color: #4f4b4b;">
                @csrf

                <!-- Title -->
                <div class="md-form mt-3">
                    <label for="title">Title</label>

                    <input type="text" id="title" class="form-control" name="title" value="{{old('title')  }}">
                    {{-- @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                    <label class="text-danger"> {{$errors->first("title")}}</label>
                </div>

                <!-- slug -->
                <div class="md-form">
                    <label for="materialContactFormEmail">Slug</label>

                    <input type="text" id="slug" class="form-control" name="slug" value="{{old('slug')  }}">
                    @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="md-form">
                    <label for="version">Version</label>

                    <input type="number" id="materialContactFormEmail" class="form-control" name="version" value="{{old('version')  }}">
                    @error('version')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>




                <div class="md-form">
                    <label for="">Content</label>

                    <textarea id="" class="form-control md-textarea" rows="3" name="body">{{old('body')  }}</textarea>
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 " type="submit">Send</button>


            </form>
            <!-- Form -->

        </div>

    </div>

@endsection
