@extends('usermanagement::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('usermanagement.name') !!}
    </p>

    <p>
        User Lists
    </p>
@endsection
