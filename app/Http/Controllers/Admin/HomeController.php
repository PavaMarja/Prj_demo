<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'        => 'Ubojitost',
            'chart_type'         => 'pie',
            'report_type'        => 'group_by_string',
            'model'              => 'App\Models\Tipvojske',
            'group_by_field'     => 'naziv_tipvojske',
            'aggregate_function' => 'sum',
            'aggregate_field'    => 'koefuboj',
            'filter_field'       => 'created_at',
            'column_class'       => 'col-md-4',
            'entries_number'     => '5',
            'translation_key'    => 'tipvojske',
        ];

        $chart1 = new LaravelChart($settings1);

        return view('home', compact('chart1'));
    }
}
