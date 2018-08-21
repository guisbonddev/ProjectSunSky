@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="alert alert-info" role="alert">
                Welcome back, {{auth::user()->name}}
            </div>
            <div class="card">
                <div class="card-header">
                    Announcements
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
