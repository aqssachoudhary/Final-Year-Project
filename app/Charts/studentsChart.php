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
    $months = 12;
    $studentData = User::whereHas('roles', function ($query) {
            $query->where('name', 'Student');
        })
        ->whereBetween('created_at', [$startDate, $endDate])
        ->orderBy('created_at')
        ->get()
        ->groupBy(function($date) {
            return $date->created_at->format('Y-m'); 
        });

    $allMonths = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    $months = []; 
    $studentCounts = []; 

   
    foreach ($allMonths as $month) {
        $monthYear = date('Y-m', strtotime($month));
        $months[] = $month;
        $studentCounts[] = $studentData->has($monthYear) ? $studentData[$monthYear]->count() : 0;
    }

    return $this->chart->barChart()
        ->setTitle('Student Registration Over Time')
        ->setSubtitle('Number of students registered per month')
        ->addData('Students', $studentCounts)
        ->setXAxis($months); 
}


}
