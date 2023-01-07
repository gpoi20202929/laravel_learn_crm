<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;


class AnalysisController extends Controller
{
    public function index()
    {
        return Inertia::render('Analysis');
    }
}
