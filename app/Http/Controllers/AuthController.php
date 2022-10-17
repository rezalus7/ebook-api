<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return [
            'Nama'=>'Rezalu Sihabuddin Al Afiv',
            'NIS'=>3103120194,
            'Kelas'=>'XII RPL',
            'Phone'=>'085876184910',
    
        ];
    }
}
