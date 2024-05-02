<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classes;
use App\Models\Sections;
use App\Models\Subject;
use App\Models\Department;
use App\Models\SessionYear;
use App\Charts\studentsChart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

     public function logout(Request $request)
    {
    
      
    Auth::logout();
        $request->session()
            ->invalidate();

        $request->session()
            ->regenerateToken();

        return redirect('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index(studentsChart $studentsChart)
    {
        $endDate = Carbon::now();
        $startDate = Carbon::now()->subYear();   

        $studentsChart = $studentsChart->build($startDate, $endDate);

        $departmentCount = Department::count();
        $studentCount = User::whereHas('roles', function ($query) {
            $query->where('name', 'Student');
        })->count();
        $teacherCount = User::whereHas('roles', function ($query) {
            $query->where('name', 'Teacher');
        })->count();
        $classCount=Classes::count();

        $departments=Department::all();
        $sessions=SessionYear::all();

        return view('home', compact('studentsChart', 'departmentCount', 'studentCount', 'teacherCount','classCount','departments','sessions'));
    }
    

}
