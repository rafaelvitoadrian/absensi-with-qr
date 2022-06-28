@extends('layouts.app')

@section('content')
<div class="container">
    {{ Auth::user()->role}}
</div>
@endsection
