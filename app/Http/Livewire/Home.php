<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $sydney, $singapore, $hongkong, $singapore_toto;

    public function mount()
    {
        set_time_limit(0);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://livetogelresmi.net/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $html = curl_exec($ch);
        curl_close($ch);

        //sydney
        $pecah1 = explode(' <div class="tabel tabel-prize text-center">', $html);
        $pecah2 = explode('</table>', $pecah1[3]);
        $this->sydney = trim($pecah2[0]) . "</table>";

        // singapore
        $pecah_sgp1 = explode('<div class="col-lg-6">', $html);
        $pecah_sgp2 = explode('</div>', $pecah_sgp1[1]);
        $this->singapore = trim($pecah_sgp2[0]);

        $pecah_sgp_toto = explode('</div>', $pecah_sgp1[2]);
        $this->singapore_toto = trim($pecah_sgp_toto[0]);

        // Hongkong
        $pecah_hk1 = explode('<h5>Result Hongkong Pools Terbaru</h5>', $html);

        $pecah_hk2 = explode('</div>', $pecah_hk1[1]);
        $this->hongkong = trim($pecah_hk2[0]);
    }

    public function render()
    {
        return view('livewire.home');
    }
}
