@extends('layout.layout')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Please Login Here !!!</div>
                <div class="card-body">
                    <form action="{{ route('authenticate') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" placeholder="Recipient's email"
                                aria-label="Recipient's email" aria-describedby="basic-addon2">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="input-group-text" id="basic-addon2">Email Address</span>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="password" value="{{ old('password') }}" placeholder="Recipient's password"
                                aria-label="Recipient's password" aria-describedby="basic-addon2">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <span class="input-group-text" id="basic-addon2">Password</span>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="col-md-3 offset-md-0 btn btn-primary" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
