@extends('layouts.articlelayout')

@section('title', $predict->name)

@section('stylesheet')
    <style>
        .bg-gradient {
            background: linear-gradient(45deg, purple, rebeccapurple, magenta, fuchsia) !important;
        }

        .predict-title {
            color: yellow;
        }

        .predict-table {
            width: 50%;
        }

        .cta-button:hover {
            background: linear-gradient(-45deg, purple, rebeccapurple, magenta, fuchsia) !important;
            color: black !important;
        }

        @media screen and (max-width: 992px) {
            .predict-table {
                width: 100%;
            }

        }
    </style>
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center w-100">
        <table class="table-bordered table-striped mx-lg-0 predict-table mx-2 table text-center text-white">
            <thead class="bg-gradient fs-3 fw-semibold">
                <tr>
                    <td colspan="2">PREDIKSI ANGKA <span class="predict-title">{{ $predict->name }}</span> <br>
                        {{-- {{ date('l, d M Y', strtotime($predict->updated_at->addDays(1))) }}</td> --}}
                        {{ $predict->updated_at->addDays(1)->isoFormat('dddd, D MMMM Y') }}
                </tr>
            </thead>
            <tbody class="bg-light text-black">
                <tr>
                    <td>BBFS</td>
                    <td>{{ $predict->bbfs }}</td>
                </tr>
                <tr>
                    <td>ANGKA MAIN</td>
                    <td>{{ $predict->angka_main }}</td>
                </tr>
                <tr>
                    <td>COLOK BEBAS</td>
                    <td>{{ $predict->colok_bebas }}</td>
                </tr>
                <tr>
                    <td>COLOK MACAU</td>
                    <td>{{ $predict->colok_macau }}</td>
                </tr>
                <tr>
                    <td>COLOK SHIO</td>
                    <td>{{ $predict->shio }}</td>
                </tr>
                <tr>
                    <td class="align-middle">ANGKA 2D</td>
                    <td>
                        {{ $predict->dua_d1 . ' * ' . $predict->dua_d2 . ' * ' . $predict->dua_d3 . ' * ' . $predict->dua_d4 . ' * ' . $predict->dua_d5 }}
                        <br>
                        {{ $predict->dua_d6 . ' * ' . $predict->dua_d7 . ' * ' . $predict->dua_d8 . ' * ' . $predict->dua_d9 . ' * ' . $predict->dua_d10 }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><a href=""><button
                                class="btn bg-gradient fw-bold w-50 cta-button text-white">PASANG
                                SEKARANG</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('footer')

    {!! $predict->article !!}

@endsection
