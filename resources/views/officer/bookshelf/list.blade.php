@extends('officer.layouts.appOffice')

@section('title')
     List Book Shelf
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Buku</h5>
            <a href="{{ route('officer.bookshelf.add') }}">
                <button class="btn btn-primary">Tambah Data</button>
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($shelves as $shelve)
                <tr>
                    <td>
                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{ $loop->iteration }}</strong>
                    </td>
                    <td>{{ $shelve->name }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('officer.bookshelf.edit', ['bookShelf' => $shelve->id]) }}"><i
                                        class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                    <form action="{{ route('officer.bookshelf.delete', ['bookShelf' => $shelve->id]) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <Button class="dropdown-item"><i class="bx bx-trash me-2"></i>
                                            Delete</Button>
                                    </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection