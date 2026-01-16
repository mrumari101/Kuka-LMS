<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for any response we sent to clients.
|
*/

trait ApiResponse
{
    private $appMode;

    public function __construct()
    {
        $this->appMode = env('APP_ENV');
    }

    public function setResponseHeaders($response)
    {
        if ($this->appMode == 'local') {
            // Set CORS headers
            //            $response->headers->set('Accept', 'application/json');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
        }

        return $response;
    }

    /**
     * Return a success JSON response.
     *
     * @param  array|string  $data
     * @return JsonResponse
     */
    protected function apiResponse($data, ?string $message = null, int $code = 200)
    {
        if ($code == 200) {
            return response()->json([
                'status' => 'success',
                'message' => $message,
                'data' => $data,
            ], $code);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => $message,
                'data' => $data,
            ], $code);
        }
    }

    /**
     * Return an error JSON response.
     *
     * @param  array|string|null  $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error(?string $message, int $code, $data = null)
    {
        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'data' => $data,
        ], $code);
    }
}
