<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tuvan;
use App\Http\Services\Show\TuVanService;

class TuVanController extends Controller
{
    protected $tuvanService;

    public function __construct(TuVanService $tuvanService)
    {
        $this->tuvanService=$tuvanService;
    }

    public function create(Request $request)
    {
        $this->tuvanService->create($request);

        return redirect()->back();
    }

    public function updatett(tuvan $tuvan)
    {
        $this->tuvanService->updatett($tuvan);

        return redirect('admin/main');
    }
}
