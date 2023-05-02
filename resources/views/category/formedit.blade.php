@extends('layout.layout')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('category') }}'">
                        <i class="fas fa-plus-cirle"></i> Kembali
                    </button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('category/' . $id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" name="name" class="form-control  @error('name') is-invalid @enderror"
                                id="name" aria-describedby="emailHelp" value="{{ $name }}">
                            @error('name')
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
