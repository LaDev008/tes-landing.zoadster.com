<div class="container-fluid mb-5 text-white" wire:poll.5000ms="liveSydney">

    <style>
        .main-font {
            width: fit-content;
            height: auto;
            font-size: 5rem;
            font-weight: 700;
            background: linear-gradient(45deg, magenta, purple, fuchsia);
            background-clip: text;
            background-size: cover;
            -webkit-background-clip: text;
            color: transparent;
        }

        .sydney-theme {
            background: linear-gradient(to bottom, darkviolet, purple, rebeccapurple);
        }

        .box {
            position: relative;
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            -webkit-box-reflect: below 0 linear-gradient(transparent, transparent, #0005);
        }

        .box .loader {
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            animation: animateLoading 2s linear infinite;
        }

        .box .loader:nth-child(2),
        .box .loader:nth-child(4) {
            animation-delay: -1s;
            filter: hue-rotate(290deg);
        }

        @keyframes animateLoading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .box .loader:nth-child(1)::before,
        .box .loader:nth-child(2)::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(to top, transparent, rgba(0, 255, 249, 0.5));
            background-size: 25px 45px;
            background-repeat: no-repeat;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .loader i {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 5px;
            background: #00fff9;
            border-radius: 50%;
            box-shadow: 0 0 10px #00fff9,
                0 0 5px #00fff9,
                0 0 7.5px #00fff9,
                0 0 10px #00fff9,
                0 0 12.5px #00fff9,
                0 0 15px #00fff9,
                0 0 17.5px #00fff9,
                0 0 20px #00fff9,
                0 0 22.5px #00fff9,
                0 0 25px #00fff9;
            z-index: 10;
        }

        .box .loader span {
            position: absolute;
            inset: 10px;
            background: #000;
            border-radius: 50%;
            z-index: 1;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <table class="table-bordered border-light table border-2 border text-center text-white bg-dark">
                <thead>
                    <tr class="sydney-theme">
                        <td class="fs-5 fw-semibold" colspan="2">LIVEDRAW TOGEL SYDNEY</td>
                    </tr>
                </thead>
                <tbody class="fs-5 fw-bold">
                    <tr>
                        <td colspan="2">TANGGAL : {{ $sdy_last_result }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="sydney-theme fw-semibold">Prize 1</td>
                        <td>
                            @if ($sdy_p1 == '-')
                                <x-loader />
                            @else
                                {{ $sdy_p1 }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="sydney-theme fw-semibold">Prize 2</td>
                        <td>
                            @if ($sdy_p2 == '-')
                                <x-loader />
                            @else
                                {{ $sdy_p2 }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="sydney-theme fw-semibold">Prize 3</td>
                        <td>
                            @if ($sdy_p3 == '-')
                                <x-loader />
                            @else
                                {{ $sdy_p3 }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="sydney-theme fw-semibold">Starter</td>
                        <td>
                            @if ($sdy_starter == '-')
                                <x-loader />
                            @else
                                {{ $sdy_starter }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="sydney-theme fw-semibold">Cons<span class="d-none d-lg-inline">olation</span></td>
                        <td>
                            @if ($sdy_consolation == '-')
                                <x-loader />
                            @else
                                {{ $sdy_consolation }}
                            @endif
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
