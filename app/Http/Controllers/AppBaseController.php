<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;

class AppBaseController extends Controller
{
    use HasRoles;
}
