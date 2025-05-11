@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome</div>
                    <div class="card-body">
                        <h1>Welcome to PT ABHIRAJA GIOVANNI TRYAMANDA</h1>
                        <p>Thank you for visiting our website.</p>
                        <a href="{{ url('/home') }}" class="btn btn-primary">Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
