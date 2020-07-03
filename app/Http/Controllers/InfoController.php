<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\CovidChart;
use Illuminate\Support\Facades\Http;
class InfoController extends Controller
{
    public function index(){
        // $response = Http::get('https://api.kawalcorona.com/indonesia');
        // $responseL = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        // $responGlobalP = Http::get('https://api.kawalcorona.com/positif');
        // $responGlobalM = Http::get('https://api.kawalcorona.com/meninggal');
        // $responGlobalS = Http::get('https://api.kawalcorona.com/sembuh');
        // $data2 = $responseL->json();
        // $data = $response->json();
        // // return view('tes', compact('data'));
        // return view('tes', [
        //     'data' => $data,
        //     'globalP' => $responGlobalP,
        //     'globalM' => $responGlobalM,
        //     'globalS' => $responGlobalS,
        //     'provinsi' => $data2
        //     ]);
        $response = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        // $response2 = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());
        // $response2 = Http::get('https://api.kawalcorona.com/indonesia')->json();
        // dd($response2);
        $responseData = $response->flatten(1);
        // $responseData2 = $response2->flatten(1);
        // $responseData2 = $response2;
        // dd($responseData2);
        $labels = $responseData->pluck('Provinsi');
        // $labels2 = $response2->pluck('nama');
        // $labels2 = $responseData2[0];
        $data = $responseData->pluck('Kasus_Posi');
        $dataDeath = $responseData->pluck('Kasus_Meni');
        $dataS = $responseData->pluck('Kasus_Semb');
        // $dataSeluruh = $responseData2->pluck('Kasus_Meni');
        $color = $labels->map(function($item){
            return '#' . substr(md5(mt_rand()), 0, 6);
        });
        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Data Kasus Positif di Indonesia', 'bar', $data)->backgroundColor($color);

        $chart2 = new CovidChart;
        $chart2->labels($labels);
        $chart2->dataset('Data Kasus Meninggal di Indonesia', 'bar', $dataDeath)->backgroundColor($color);

        $chart3 = new CovidChart;
        $chart3->labels($labels);
        $chart3->dataset('Data Kasus Sembuh di Indonesia', 'bar', $dataS)->backgroundColor($color);

        return view('tes', [
            'chart' => $chart,
            'chart2' => $chart2,
            'chart3' => $chart3,
        ]);

    }
}
