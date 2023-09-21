<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alldata;

class allDataController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surename' => 'required',
            'status1' => 'required',
            'status2' => 'required',
            'status3' => 'required',
            'status4' => 'required',
            'signs-traff' => 'required',
            'lines-traff' => 'required',
            'give-way' => 'required',
            'statuswork' => 'required',
        ]);

        // สร้างและบันทึกข้อมูลในฐานข้อมูล
        $data = new alldata();
        $data->name = $request->input('name');
        $data->surename = $request->input('surename');
        $data->eye_color = $request->input('status1');
        $data->eye_lenght = $request->input('status2');
        $data->eye_astig = $request->input('status3');
        $data->body_response = $request->input('status4');
        $data->signs_traff = $request->input('signs-traff');
        $data->lines_traff = $request->input('lines-traff');
        $data->give_way = $request->input('give-way');
        $data->statuswork = $request->input('statuswork');
        $data->save();


        return view('resultdata');
    }
}
