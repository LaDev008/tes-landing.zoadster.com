<?php

namespace App\Http\Livewire\Livedraw;

use Livewire\Component;
use Illuminate\Support\Str;

class Singapore extends Component
{
    public $return_value = [];

    public function mount()
    {
        $this->liveSingapore();
    }

    public function liveSingapore()
    {
        set_time_limit(0);
        date_default_timezone_set("Asia/Bangkok");


        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, "https://livetogelresmi.net/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $html = curl_exec($ch);
        curl_close($ch);

        $split1 = explode("Result Singapore Pools Terbaru</h5>", $html);
        $split2 = explode("</td>", $split1[1]);
        $split3 = explode("POOLS Singapore", $split2[0]);
        $split4 = explode(", ", $split3[1]);
        $sgp_4D_last_result = $split4[1];

        // 4D Lottery Results
        $sgp_p1 = substr($split2[2], -4, 4);
        $sgp_p2 = substr($split2[4], -4, 4);
        $sgp_p3 = substr($split2[6], -4, 4);
        $sgp_starter1 = substr($split2[9], -4, 4);
        $sgp_starter2 = substr($split2[10], -4, 4);
        $sgp_consolation1 = substr($split2[11], -4, 4);
        $sgp_consolation2 = substr($split2[12], -4, 4);
        $sgp_starter3 = substr($split2[13], -4, 4);
        $sgp_starter4 = substr($split2[14], -4, 4);
        $sgp_consolation3 = substr($split2[15], -4, 4);
        $sgp_consolation4 = substr($split2[16], -4, 4);
        $sgp_starter5 = substr($split2[17], -4, 4);
        $sgp_starter6 = substr($split2[18], -4, 4);
        $sgp_consolation5 = substr($split2[19], -4, 4);
        $sgp_consolation6 = substr($split2[20], -4, 4);
        $sgp_starter7 = substr($split2[21], -4, 4);
        $sgp_starter8 = substr($split2[22], -4, 4);
        $sgp_consolation7 = substr($split2[23], -4, 4);
        $sgp_consolation8 = substr($split2[24], -4, 4);
        $sgp_starter9 = substr($split2[25], -4, 4);
        $sgp_starter10 = substr($split2[26], -4, 4);
        $sgp_consolation9 = substr($split2[27], -4, 4);
        $sgp_consolation10 = substr($split2[28], -4, 4);
        // End Of Singapore Pools 4D

        // $clearWhiteSpace = preg_replace('/\s+/', '', $sgp_consolation3);


        // Satpam Nomor
        foreach (range(1, 3) as $numbers) {
            if (!intval(${"sgp_p" . $numbers})) {
                ${"sgp_p" . $numbers} = "-";
            } else if (Str::length(preg_replace('/\s+/', '', ${"sgp_p" . $numbers})) == 3) {
                ${"sgp_p" . $numbers} = "0" . ${'sgp_p' . $numbers};
            };
        }
        foreach (range(1, 10) as $numbers) {
            if (!intval(${"sgp_starter" . $numbers})) {
                ${"sgp_starter" . $numbers} = "-";
            } else if (Str::length(preg_replace('/\s+/', '', ${"sgp_starter" . $numbers})) == 3) {
                ${"sgp_starter" . $numbers} = "0" . ${"sgp_starter" . $numbers};
            };
        }
        foreach (range(1, 10) as $numbers) {
            if (!intval(${"sgp_consolation" . $numbers})) {
                ${"sgp_consolation" . $numbers} = "-";
            } else if (Str::length(preg_replace('/\s+/', '', ${"sgp_consolation" . $numbers})) == 3) {
                ${"sgp_consolation" . $numbers} = "0" . ${"sgp_consolation" . $numbers};
            };
        }

        // Toto Singapore Result
        $split1 = explode("Result Singapore Pools Terbaru</h5>", $html);
        $split2 = explode("</td>", $split1[1]);
        $split3 = explode("Toto Singapore", $split2[29]);
        $split4 = explode(", ", $split3[1]);
        $sgp_toto_last_result = $split4[1];

        $result_array = [];

        foreach (range(0, 5) as $index) {
            $result_array[$index] = substr($split2[31 + $index], -2, 2);

            $check = substr($result_array[$index], 0, 1);

            if ($check == ">") {
                $result_array[$index] = "0" . substr($result_array[$index], 1, 1);
            }
        }

        $sgp_toto_winning_number1 = $result_array[0];
        $sgp_toto_winning_number2 = $result_array[1];
        $sgp_toto_winning_number3 = $result_array[2];
        $sgp_toto_winning_number4 = $result_array[3];
        $sgp_toto_winning_number5 = $result_array[4];
        $sgp_toto_winning_number6 = $result_array[5];
        $sgp_toto_additional_number = substr($split2[38], -2, 2);
        $sgp_toto_result = substr($split2[40], -4, 4);


        foreach (range(1, 6) as $numbers) {
            if (!intval(${"sgp_toto_winning_number" . $numbers})) {
                ${"sgp_toto_winning_number" . $numbers} = "-";
            };
        }

        $check_additional_number = substr($sgp_toto_additional_number, 0, 1);

        if ($check_additional_number == ">") {
            $sgp_toto_additional_number = "0" . str_replace(">", "", $sgp_toto_additional_number);
        };
        // End Of Toto Singapore Result


        $this->return_value = [
            "sgp_4d_last_result" => $sgp_4D_last_result,
            "sgp_p1" => $sgp_p1,
            "sgp_p2" => $sgp_p2,
            "sgp_p3" => $sgp_p3,
            "sgp_starter1" => $sgp_starter1,
            "sgp_starter2" => $sgp_starter2,
            "sgp_starter3" => $sgp_starter3,
            "sgp_starter4" => $sgp_starter4,
            "sgp_starter5" => $sgp_starter5,
            "sgp_starter6" => $sgp_starter6,
            "sgp_starter7" => $sgp_starter7,
            "sgp_starter8" => $sgp_starter8,
            "sgp_starter9" => $sgp_starter9,
            "sgp_starter10" => $sgp_starter10,
            "sgp_consolation1" => $sgp_consolation1,
            "sgp_consolation2" => $sgp_consolation2,
            "sgp_consolation3" => $sgp_consolation3,
            "sgp_consolation4" => $sgp_consolation4,
            "sgp_consolation5" => $sgp_consolation5,
            "sgp_consolation6" => $sgp_consolation6,
            "sgp_consolation7" => $sgp_consolation7,
            "sgp_consolation8" => $sgp_consolation8,
            "sgp_consolation9" => $sgp_consolation9,
            "sgp_consolation10" => $sgp_consolation10,
            "sgp_toto_last_result" => $sgp_toto_last_result,
            "sgp_toto_winning_number1" => $sgp_toto_winning_number1,
            "sgp_toto_winning_number2" => $sgp_toto_winning_number2,
            "sgp_toto_winning_number3" => $sgp_toto_winning_number3,
            "sgp_toto_winning_number4" => $sgp_toto_winning_number4,
            "sgp_toto_winning_number5" => $sgp_toto_winning_number5,
            "sgp_toto_winning_number6" => $sgp_toto_winning_number6,
            "sgp_toto_additional_number" => $sgp_toto_additional_number,
            "sgp_toto_result" => $sgp_toto_result,
        ];
    }

    public function render()
    {
        return view('livewire.livedraw.singapore', $this->return_value);
    }
}
