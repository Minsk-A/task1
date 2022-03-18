<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Admin\Main;
use App\Http\Controllers\Controller;
use Faker\Provider\Base;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends Controller
{

    public function __invoke()
    {
        return view ('admin.index');
    }
}
