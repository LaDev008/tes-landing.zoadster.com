<?php

namespace App\Http\Livewire\Livedraw;

use Livewire\Component;

class Hongkong extends Component
{
    public $return_value = [];

    public function mount()
    {
        $this->liveHongkong();
    }

    public function liveHongkong()
    {
        set_time_limit(0);
        date_default_timezone_set("Asia/Bangkok");


        $date = date("d F Y");
        $datecurl = date("d/m/Y");
        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, "https://livetogelresmi.net/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $html = curl_exec($ch);
        curl_close($ch);

        $split1 = explode("Result Hongkong Pools Terbaru</h5>", $html);
        $split2 = explode("</td>", $split1[1]);
        $split3 = explode("LIVE DRAW Hongkong Hari ", $split2[0]);
        $split4 = explode(", ", $split3[1]);
        $hk_last_result = $split4[1];

        $hk_p1 = substr($split2[2], -6, 6);
        $hk_p2 = substr($split2[4], -6, 6);
        $hk_p3 = substr($split2[6], -6, 6);
        $hk_starter1 = substr($split2[8], -6, 6);
        $hk_starter2 = substr($split2[9], -6, 6);
        $hk_starter3 = substr($split2[10], -6, 6);
        $hk_starter4 = substr($split2[11], -6, 6);
        $hk_consolation1 = substr($split2[13], -6, 6);
        $hk_consolation2 = substr($split2[14], -6, 6);
        $hk_consolation3 = substr($split2[15], -6, 6);
        $hk_consolation4 = substr($split2[16], -6, 6);
        $hk_consolation5 = substr($split2[17], -6, 6);
        $hk_consolation6 = substr($split2[18], -6, 6);
        $hk_consolation7 = substr($split2[19], -6, 6);
        $hk_consolation8 = substr($split2[20], -6, 6);

        foreach (range(1, 3) as $numbers) {
            if (!intval(${"hk_p" . $numbers})) {
                ${"hk_p" . $numbers} = "-";
            };
        }
        foreach (range(1, 4) as $numbers) {
            if (!intval(${"hk_starter" . $numbers})) {
                ${"hk_starter" . $numbers} = "-";
            };
        }
        foreach (range(1, 8) as $numbers) {
            if (!intval(${"hk_consolation" . $numbers})) {
                ${"hk_consolation" . $numbers} = "-";
            };
        }

        $this->return_value = [
            "hk_last_result" => $hk_last_result,
            "hk_p1" => $hk_p1,
            "hk_p2" => $hk_p2,
            "hk_p3" => $hk_p3,
            "hk_starter1" => $hk_starter1,
            "hk_starter2" => $hk_starter2,
            "hk_starter3" => $hk_starter3,
            "hk_starter4" => $hk_starter4,
            "hk_consolation1" => $hk_consolation1,
            "hk_consolation2" => $hk_consolation2,
            "hk_consolation3" => $hk_consolation3,
            "hk_consolation4" => $hk_consolation4,
            "hk_consolation5" => $hk_consolation5,
            "hk_consolation6" => $hk_consolation6,
            "hk_consolation7" => $hk_consolation7,
            "hk_consolation8" => $hk_consolation8,
        ];
    }

    public function render()
    {
        return view('livewire.livedraw.hongkong', $this->return_value);
    }
}
