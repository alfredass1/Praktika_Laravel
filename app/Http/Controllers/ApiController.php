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
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('/images', "", $path);

        Holiday::create([
            'title' => request('title'),
            'description' => request('description'),
            'img' => $filename,

        ]);

        return response($request);
    }




}
