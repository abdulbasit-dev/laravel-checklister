<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    function __construct()
    {
        date_default_timezone_set('Asia/Baghdad');
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
