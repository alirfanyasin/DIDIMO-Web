<?php

namespace App\Charts;

use App\Models\Periksa;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Auth;

class CheckupMonthlyChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $dataCheckup = Periksa::where('user_id', Auth::user()->id)->get();

        $gula_darah_data = [];
        $detak_jantung_data = [];

        foreach ($dataCheckup as $data) {
            $bulan = $data->created_at->format('F');
            $gula_darah_data[$bulan][] = $data->gula_darah;
            $detak_jantung_data[$bulan][] = $data->detak_jantung;
        }

        $average_gula_darah = [];
        $average_detak_jantung = [];

        foreach ($gula_darah_data as $bulan => $nilai_gula_darah) {
            $average_gula_darah[] = round(array_sum($nilai_gula_darah) / count($nilai_gula_darah), 2);
            $average_detak_jantung[] = round(array_sum($detak_jantung_data[$bulan]) / count($detak_jantung_data[$bulan]), 2);
        }

        return $this->chart->areaChart()
            ->addData('Rata-rata Gula Darah', $average_gula_darah)
            ->addData('Rata-rata Detak Jantung', $average_detak_jantung)
            ->setHeight(400)
            ->setColors(['#C80005', '#000000'])
            ->setXAxis(array_keys($gula_darah_data));
    }
}
