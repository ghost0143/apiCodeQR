<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeSearchController extends Controller
{
    public function index(Request $request)
    {
        $query = Qrcode::query();

        if ($request->has('search')) {
            $query->where('data', 'like', '%' . $request->search . '%');
        }

        return $query->paginate(10);
    }
}
