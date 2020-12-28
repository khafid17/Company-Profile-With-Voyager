<?php

namespace App\Http\Controllers;

use App\Charts\CovidChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function chart(){
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $suspectsData = $suspects->flatten(1);

        $labels = $suspectsData->pluck('Provinsi');
        $data = $suspectsData->pluck('Kasus_Posi');
        $deaths = $suspectsData->pluck('Kasus_Meni');
        $sembuh = $suspectsData->pluck('Kasus_Semb');
        $colors = $labels->map(function($item){
            return '#'. substr(md5(mt_rand()), 0, 6);
        });

        $chart1 = new CovidChart;
        $chart1->labels($labels);
        $chart1->dataset('Data Kasus Positif di Indonesia', 'pie', $data)->backgroundColor($colors);

        $chart2 = new CovidChart;
        $chart2->labels($labels);
        $chart2->dataset('Data Kasus Meninggal di Indonesia', 'bar', $deaths)->backgroundColor($colors);

        $chart3 = new CovidChart;
        $chart3->labels($labels);
        $chart3->dataset('Data Kasus Sembuh di Indonesia', 'line', $sembuh)->backgroundColor($colors);

        return view('corona', [
            'chart1' => $chart1,
            'chart2' => $chart2,
            'chart3' => $chart3,
        ]);
    }
}
