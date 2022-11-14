@extends('backend.master')
@section('content')
<h1>This is Dashboard</h1>
<h2>

welcome{{auth()->user()-> name}}

</h2>

@endsection