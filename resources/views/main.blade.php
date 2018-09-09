@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="content">
            <form action="done.html">
                <div class="col-md-12">
                    <h3>@{{ message }}</h3>
                    <input v-model="message" class="col-md-12">
                    <span class="error col-md-12" v-show="!message">You must enter an input </span>
                    <pre>@{{ $data }}</pre>
                </div>

                <div class="col-md-12">
                    <button type="submit" v-if="message.length > 3">Submit!!</button>
                </div>
            </form>
            <div class="links col-md-12">
                <a class="col-md-2" href="https://laravel.com/docs">Documentation</a>
                <a class="col-md-2" href="https://laracasts.com">Laracasts</a>
                <a class="col-md-2" href="https://laravel-news.com">News</a>
                <a class="col-md-2" href="https://forge.laravel.com">Forge</a>
                <a class="col-md-2" href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
@endsection