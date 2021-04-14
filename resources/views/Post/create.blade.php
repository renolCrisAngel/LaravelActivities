@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form method="Post" action="{{ route('posts.store') }}">
                        @csrf
                            <span style="margin-right:6.5%">Title</span>
                            <input type="type" name="title">
                            <br><br>
                            <span>Description</span>
                            <textarea name="description"> </textarea>
                            <br><br>

                            <input type="submit">
                            <br><br>

                        </form>
                   
@endsection