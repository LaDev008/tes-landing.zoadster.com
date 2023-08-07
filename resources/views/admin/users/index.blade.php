@extends('layouts.adminlayout')
@section('title', 'USER LIST')
@section('content')
    <div class="col-12">
        <div class="col-12 position-relative mt-2">
            <h1 class="text-center">USER LIST</h1>
            <a href="{{ route('users.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>
        <table class="table-hover table table-striped table-dark table-bordered align-middle text-center">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Nama</td>
                    <td>Username</td>
                    <td>Role</td>
                    <td colspan="2">Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="w-100"><button
                                    class="btn btn-warning">EDIT</button></a></td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">@csrf @method('delete')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Yakin Ingin Hapus User ?')">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
