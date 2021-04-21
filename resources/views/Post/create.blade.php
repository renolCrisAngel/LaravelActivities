@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form method="Post" action="{{ route('posts.store') }}"  enctype="multipart/form-data">
                        @csrf
                            <span style="margin-right:6.5%">Title</span>
                            <input type="type" name="title" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"   autofocus>
                            @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            <br><br>
                            <span>Description</span>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" name="description"> </textarea>
                            @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            <br><br>
                            <div class="form-group row">
                                <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Post Image')}}</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control-file @error('img') is-invalid @enderror" name="img">

                                    @error('img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                                
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-block btn-outline-primary">
                                        {{ __('Submit') }}
                                      
                                    </button>
                                </div>
                            </div>
                            <br><br>

                        </form>
                   
@endsection