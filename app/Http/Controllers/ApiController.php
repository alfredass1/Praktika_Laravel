<?php

namespace App\Http\Controllers;

use App\Holiday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
class ApiController extends Controller
{
    public function allHolidays()
    {

        $holidays = Holiday::select(
            'holidays.*'
        )
            ->get();

        return $holidays;
    }

    public function storeHoliday(Request $request)
    {


        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('public/images');
            $filename = str_replace('public/', "", $path);


        }

        Holiday::create([
            'title' => request('title'),
            'description' => request('description'),
            'img' => $filename,

        ]);

        return $path;
        return response($request);
    }


    public function get_holidays_by_id($id)
    {

        return Holiday::find($id);
    }



}
