@extends('layouts.articlelayout')
@section('title', 'Daftar Member')
@section('content')
    <div class="col-12 col-lg-8 mx-auto bg-dark p-3 p-lg-5 mb-5" style="border: 6px ridge magenta">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <h1 class="text-white text-center mb-5">DAFTAR AKUN MEMBER LIVEDRAW NANA4D</h1>
            <div class="">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" required name="name">
            </div>
            <div class="mt-4">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
                @error('username')
                    <span class="error text-danger">{{ $error->message }}</span>
                @enderror
            </div>
            <div class="mt-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                    <span class="error text-danger">{{ $error->message }}</span>
                @enderror
            </div>
            <div class="mt-4">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    required>
                @error('password_confirmation')
                    <span class="error text-danger">{{ $error->message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label for="phone_number">Nomor Handphone</label>
                <input type="numeric" class="form-control" id="phone_number" name="phone_number" required>
                @error('phone_number')
                    <span class="error text-danger">{{ $error->message }}</span>
                @enderror
            </div>

            <div class="col-12 mt-4">
                <div class="alert alert-warning" role="alert">
                    <h3 class="text-black">PERHATIAN !!</h3>
                    <h6>Isilah data dengan benar sesuai dengan akun yang terdaftar di Situs Nana4D. Agar mempermudah proses
                        pembagian hadiah event - event togel.</h6>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-3 mt-5">
                <a href="{{ route('home') }}" class="w-25">
                    <button class="btn btn-danger w-100" type="button">CANCEL</button>
                </a>
                <button class="btn btn-primary w-25">SUBMIT</button>
            </div>

        </form>

    </div>
@endsection
