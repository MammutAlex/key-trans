<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 31.07.17
 * Time: 19:43
 */

namespace App\Http\Controllers;

use App\Http\ApiResponse;
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
        $str_search = [
            "й","ц","у","к","е","н","г","ш","щ","з","х","ъ",
            "ф","ы","в","а","п","р","о","л","д","ж","э",
            "я","ч","с","м","и","т","ь","б","ю"
        ];
        $str_replace = [
            "q","w","e","r","t","y","u","i","o","p","[","]",
            "a","s","d","f","g","h","j","k","l",";","'",
            "z","x","c","v","b","n","m",",","."
        ];
        $text = str_replace($str_search, $str_replace, $request->text);
        return $this->respond(['text' => $text]);
    }
}