<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index(Request $request)
    {
        $mode = $request->attributes->get('mode');
        return view('lab.index', ['mode' => $mode]);
    }

    public function about(Request $request)
    {
        $mode = $request->attributes->get('mode');
        return view('lab.about', ['mode' => $mode]);
    }

    public function status(Request $request)
    {
        $mode = $request->attributes->get('mode');

        $lines = file(storage_path('logs/laravel.log'));
        $logs = array_slice($lines, -5);

        return view('lab.status', ['mode' => $mode, 'logs' => $logs]);
    }

    public function echo(Request $request)
    {
        $mode = $request->attributes->get('mode');
        return response()->json([
            'message' => 'Echo',
            'mode' => $mode,
            'query_params' => $request->query(),
        ]);
    }

}
