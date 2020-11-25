@extends('layouts.template')

@section('content')
    <h1 class="text-center pb-5">All Posts</h1>
<a class ="btn btn-primary mb-2" href="{{route("posts.create")}}">Add New Post</a>
    <table class="table text-center table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Version</th>
                <th>show</th>
                <th>update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $post)
                <tr>
                    <td> {{ $post['title'] }}</td>
                    <td> {{ $post['body'] }}</td>
                    <td> {{ $post['slug'] }}</td>
                    <td> {{ $post['version'] }}</td>
                   <td> <a class="btn btn-success" href="{{route("posts.show",$post)}}">Show</a>
                   <td> <a class="btn btn-primary" href="{{route("posts.edit",$post)}}">Update</a>

                    <form action="{{route("posts.delete",$post)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <td> <input type="submit" class="btn btn-danger "value= "Delete"></td>

                    </form>
                    </td>
                </tr>

            @endforeach



        </tbody>
    </table>


@endsection
