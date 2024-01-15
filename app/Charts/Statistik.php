<?php

namespace App\Charts;

use App\Models\rujukan;
use App\Models\terimaRujukan;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\BarChart;
use Carbon\Carbon;

class Statistik
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $tahunSaatIni = Carbon::now()->year;
        $jumlahRujukan = rujukan::count();
        $jumlahterima = terimaRujukan::count();

        return $this->chart->barChart()
            ->setTitle('Jumlah Rujukan.')
            ->setSubtitle("pada tahun $tahunSaatIni.")
            ->setWidth(800)
            ->setHeight(400)
            ->addData('Jumlah Rujukan Pengguna', [$jumlahRujukan, 0])
            ->addData('Jumlah Rujukan yang Diterima', [$jumlahterima, 0]);
    }
}
