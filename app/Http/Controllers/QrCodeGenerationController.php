<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeGenerationController extends Controller
{
    public function generate(Request $request)
    {
        $this->validate($request, [
            'data' => 'required|string'
        ]);

        $qrcodeImage = QrCode::format('png')->size(200)->generate($request->data);

        return response()->json(['qrcode' => base64_encode($qrcodeImage)]);
    }
}
