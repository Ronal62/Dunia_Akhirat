@extends('layout.layout')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('product') }}'">
                        <i class="fas fa-plus-cirle"></i> Kembali
                    </button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('product') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                                id="name" aria-describedby="emailHelp" value="{{ old('name') }}">
                            @error('name')
                                <div id="emailHelp" class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">price</label>
                            <input type="number" name="price" class="form-control  @error('price') is-invalid @enderror"
                                id="price" aria-describedby="emailHelp" value="{{ old('price') }}">
                            @error('price')
                                <div id="emailHelp" class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
