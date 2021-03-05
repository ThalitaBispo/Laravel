<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    public function Dashboard() {
        return view(view, 'dashboard');
    }
}

?>
