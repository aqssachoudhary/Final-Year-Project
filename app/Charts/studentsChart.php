<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;
class studentsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

   public function build($startDate, $endDate): \ArielMejiaDev\LarapexCharts\BarChart
    {

         $studentData = User::whereHas('roles', function ($query) {
            $query->where('name', 'Student');
        })
        ->whereBetween('created_at', [$startDate, $endDate])
        ->orderBy('created_at')
        ->get()
        ->groupBy(function($date) {
            return $date->created_at->format('Y-m');
        });

        $months = $studentData->keys()->all();
        $studentCounts = $studentData->map->count()->values()->all();
        return $this->chart->barChart()
           ->setTitle('Student Registration Over Time')
            ->setSubtitle('Number of students registered per month')
            ->addData('Students', $studentCounts)
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June','july','august','september','october','november','december']);
    }
}
