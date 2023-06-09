@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <h2 class="text-center p-5">Welcome To Our Project</h2>
              <div class="card-header text-center"><a href="{{route('customers.index')}}" class="btn btn-success px-5 my-3 text-center">Click Here</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
