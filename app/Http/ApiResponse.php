<?php

namespace App\Http;

/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 22.03.17
 * Time: 13:37
 */
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as IlluminateResponse;

/**
 * Trait ApiResponse all response
 *
 * @package App
 */
trait ApiResponse
{
    
    /**
     * Default status code
     *
     * @var int
     */
    private $statusCode = IlluminateResponse::HTTP_OK;
    
    
    /**
     * Return active http status code
     *
     * @return int
     */
    protected function getStatusCode()
    {
        return $this->statusCode;
    }
    
    
    /**
     * Wright http status code
     *
     * @param int $statusCode
     *
     * @return $this
     */
    protected function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;
        
        return $this;
    }
    
    /**
     * Respond to http
     *
     * @param array  $data
     * @param array  $headers
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respond(array $data = [], array $headers = []): JsonResponse
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

}