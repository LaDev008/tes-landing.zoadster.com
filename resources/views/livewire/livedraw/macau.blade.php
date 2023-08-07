<div class="row justify-content-center p-lg-4">
    <div class="col-lg-6 col-12" wire:poll.6000ms='liveFeed'>

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
                -webkit-text-stroke: yellow 1px;
            }

            .macau-theme {
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

        <table
            class="table-bordered border-info fw-bold fs-5 table border-2 border text-center text-white bg-dark align-middle">
            <thead>
                <tr class="macau-theme">
                    <th class="fs-3 border-right-0" colspan="6" style="border-right: none">{{ $title }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>00.01 WIB</td>
                    <td>13.00 WIB</td>
                    <td>16.00 WIB</td>
                    <td>19.00 WIB</td>
                    <td>22.00 WIB</td>
                </tr>
                <tr>
                    <td>
                        @if ($macau1 == 0)
                            <x-loader />
                        @else
                            {{ $macau1 }}
                        @endif
                    </td>
                    <td>
                        @if ($macau2 == 0)
                            <x-loader />
                        @else
                            {{ $macau2 }}
                        @endif
                    </td>
                    <td>
                        @if ($macau3 == 0)
                            <x-loader />
                        @else
                            {{ $macau3 }}
                        @endif
                    </td>
                    <td>
                        @if ($macau4 == 0)
                            <x-loader />
                        @else
                            {{ $macau4 }}
                        @endif
                    </td>
                    <td>
                        @if ($macau5 == 0)
                            <x-loader />
                        @else
                            {{ $macau5 }}
                        @endif
                    </td>
            </tbody>
        </table>
    </div>
</div>
