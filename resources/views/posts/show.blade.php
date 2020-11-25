@extends('layouts.template')

@section('content')
    <h1 class="text-center pb-5">All Posts</h1>

    <table class="table text-center table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Version</th>
               
            </tr>
        </thead>
        <tbody>
{{-- {{dd($post)}} --}}
           
                <tr>
                    <td> {{ $post['title'] }}</td>
                    <td> {{ $post['body'] }}</td>
                    <td> {{ $post['slug'] }}</td>
                    <td> {{ $post['version'] }}</td>
                   
                  
                    </td>
                </tr>

         



        </tbody>
    </table>
   <a class="btn btn-success" href="{{route("posts")}}">Back</a>

@endsection
