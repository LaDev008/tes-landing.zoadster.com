<div class="container text-white" wire:poll.5000ms="liveHongkong">

    <style>
        .main-font {
            width: fit-content;
            height: auto;
            font-size: 5rem;
            font-weight: 700;
            background: linear-gradient(to right, magenta, fuchsia);
            background-clip: text;
            background-size: cover;
            -webkit-background-clip: text;
            color: transparent;
        }

        .hongkong-theme {
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

    <div class="row justify-content-center p-lg-3">
        <div class="col-lg-6 col-sm-12 p-0">
            <table class="table-bordered border-info fw-bold fs-6 table border-2 border text-center text-white bg-dark">
                <thead>
                    <tr class="hongkong-theme">
                        <td class="fs-5" colspan="4">Hongkong POOLS</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4">Last Result : {{ $hk_last_result }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="hongkong-theme" colspan="2">Prize 1</td>
                        <td colspan="2">
                            @if ($hk_p1 == '-')
                                <x-loader />
                            @else
                                {{ $hk_p1 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="hongkong-theme" colspan="2">Prize 2</td>
                        <td colspan="2">
                            @if ($hk_p2 == '-')
                                <x-loader />
                            @else
                                {{ $hk_p2 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="hongkong-theme" colspan="2">Prize 3</td>
                        <td colspan="2">
                            @if ($hk_p3 == '-')
                                <x-loader />
                            @else
                                {{ $hk_p3 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="hongkong-theme" colspan="4">Starter</td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($hk_starter1 == '-')
                                <x-loader />
                            @else
                                {{ $hk_starter1 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_starter2 == '-')
                                <x-loader />
                            @else
                                {{ $hk_starter2 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_starter3 == '-')
                                <x-loader />
                            @else
                                {{ $hk_starter3 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_starter4 == '-')
                                <x-loader />
                            @else
                                {{ $hk_starter4 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="hongkong-theme" colspan="4">Consolation</td>
                    </tr>
                    <tr>
                        <td>
                            @if ($hk_consolation1 == '-')
                                <x-loader />
                            @else
                                {{ $hk_consolation1 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_consolation2 == '-')
                                <x-loader />
                            @else
                                {{ $hk_consolation2 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_consolation3 == '-')
                                <x-loader />
                            @else
                                {{ $hk_consolation3 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_consolation4 == '-')
                                <x-loader />
                            @else
                                {{ $hk_consolation4 }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if ($hk_consolation5 == '-')
                                <x-loader />
                            @else
                                {{ $hk_consolation5 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_consolation6 == '-')
                                <x-loader />
                            @else
                                {{ $hk_consolation6 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_consolation7 == '-')
                                <x-loader />
                            @else
                                {{ $hk_consolation7 }}
                            @endif
                        </td>
                        <td>
                            @if ($hk_consolation8 == '-')
                                <x-loader />
                            @else
                                {{ $hk_consolation8 }}
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
