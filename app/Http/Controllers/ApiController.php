<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 31.07.17
 * Time: 19:43
 */

namespace App\Http\Controllers;

use App\Http\ApiResponse;
use App\Lang;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use ApiResponse;

    public function translate(Request $request)
    {
        $this->validate($request, [
            'from' => ['required', 'string'],
            'to' => ['required', 'string'],
            'text' => ['required', 'string'],
        ]);

        $text = str_replace(Lang::get($request['from']), Lang::get($request['to']), $request->text);

        return $this->respond(['text' => $text]);
    }
}