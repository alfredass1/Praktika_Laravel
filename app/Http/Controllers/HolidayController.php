<?php

namespace App\Http\Controllers;
use App\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function showHolidays()
    {
        $holidays = Holiday::all();
        return view ('admin.pages.holidays', compact('holidays'));
    }

    public function deleteHoliday(Holiday $holiday)
    {

        $holiday->delete();
        return redirect('holidays');

    }

    public function warningHoliday(Holiday $holiday)
    {

        return view('admin.pages.warning-holiday',compact('holiday'));
    }

}
