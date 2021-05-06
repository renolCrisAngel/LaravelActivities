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
                            <th class="text-center" scope="col">Image</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                          <tr>
                            <td scope="row">{{$post[0]->id}}</td>
                            <td>{{ $post[0]->title }}</td>
                            <td>{{ $post[0]->description }}</td>
                            <td><img style="width:100px" src="{{ asset('/storage/img/'.$post[0]->img) }}" alt="No image found"></td>
                            <td>
                            <form method="post" action="{{ route('comments.store') }}">  
                        @csrf
                       
                        <span class="badge badge-pill badge-secondary h3">Comment:</span><br>

                           <div class="col-md-6">
                               <input id="description" type="text" class="form-control  @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required>
                               <input type="hidden" name="post_id" value="{{ $post[0]->id }}">        
                               
                               @error('description')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>

                           <br>
                           <br>

                           <div class="form-group">
                                <input type="submit" class="btn btn-block btn-outline-primary" value="Add Comment">
                           </div>


                      </form>
                            </td>
                            <a href="/posts/{{$post[0]->id}}/edit" class="btn btn-info">Edit</a>
                          </tr>
                        </tbody>
                      </table>

                      @if ($post[0]->comments)
                      <span class="badge badge-pill badge-secondary h3">Comments:</span><br>
                      @foreach ($post[0]->comments as $comment)
                          <div class="display-comment" >
                              <p>{{ $comment->description }}</p>
                              <a href="" id="reply"></a>
                              <form method="post" action="{{ route('comments.store') }}">
                                  @csrf
                                  <div class="form-group">
                                      <input type="text" name="description" class="form-control" />
                                      <input type="hidden" name="post_id" value="{{ $comment->post_id }}" />
                                      <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                                  </div>
                                  <div class="form-group">
                                      <input type="submit" class="btn btn-success" value="Reply" />
                                  </div>
                              </form>
                          </div>
                      @endforeach                            
                  @endif

                    @endisset
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection