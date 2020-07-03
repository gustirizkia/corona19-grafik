<?php

namespace App\Http\Controllers;

use App\Charts\CovidChart;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function index(){
        $response = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $chart_options = $response->flatten(1);
        // $labels = $responseData->pluck('Provinsi');
        // $data = $responseData->pluck('Kasus_Posi');
        // $dataDeath = $responseData->pluck('Kasus_Meni');
        // // $color = $labels->map(function($item){
        //     return '#' . substr(md5(mt_rand()), 0, 6);
        // });
        // $chart = new CovidChart;
        // $chart->labels($labels);
        // $chart->dataset('Data Kasus Positif di Indonesia', 'pie', $data)->backgroundColor($color);

        // $chart2 = new CovidChart;
        // $chart2->labels($labels);
        // $chart2->dataset('Data Kasus Positif di Indonesia', 'pie', $dataDeath)->backgroundColor($color);
        $chart = new LaravelChart($chart_options);
        return view('corona', compact('chart'));
        // return view('corona', [
        //     'chart' => $chart,
        //     // 'chart2' => $chart2,
        // ]);
    }
}
