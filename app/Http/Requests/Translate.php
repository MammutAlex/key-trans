<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 31.07.17
 * Time: 19:55
 */


namespace App\Http\Requests;

use Illuminate\Support\Facades\Request;

class Translate extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'from' => ['required', 'string'],
            'to' => ['required', 'string'],
            'text' => ['required', 'string'],
        ];
    }
}