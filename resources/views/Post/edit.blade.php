@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form method="Post" action="{{ route('posts.update', $post->id) }}">
                        @method('PATCH')
                        @csrf
                            <span style="margin-right:6.5%">Title</span>
                            <input type="type" name="title">
                            <br><br>
                            <span>Description</span>
                            <textarea name="description"> </textarea>
                            <br><br>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div> 
                            <br><br>

                        </form>
                   
@endsection