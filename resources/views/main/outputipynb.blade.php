@extends('main.core.index')

@section('core-content')

<div>
    <h1>Output dari Python</h1>

    <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>

</div>

@endsection