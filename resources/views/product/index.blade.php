@extends('layout.layout')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('product/add') }}'">
                        <i class="fas fa-plus-cirle"></i> Add new data
                    </button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">price</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ formatRupiah($row->price) }}</td>
                                    <td>
                                        <button onclick="window.location='{{ url('product/' . $row->{'id'}) }}'"
                                            type="button" class="btn btn-sm btn-info" title="Edit Data">
                                            <i>Edit</i>
                                        </button>
                                        <form onsubmit="return deleteData('{{ $row->name }}')" style="display: inline"
                                            method="POST" action="{{ url('product/' . $row->{'id'}) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                                <i>Delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteData(name) {
            pesan = confirm(`yakin data data product dengan nama ${name} ini dihapus ?`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
