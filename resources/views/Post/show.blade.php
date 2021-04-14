@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                        @isset($post)
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                          <tr>
                            <td scope="row">{{$post->id}}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                          </tr>
                        
                        </tbody>
                      </table>

                    @endisset
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection