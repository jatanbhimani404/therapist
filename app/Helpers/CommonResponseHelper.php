<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

trait CommonResponseHelper
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($message, $result = null, $status = 200)
    {
        $response = [
            'success' => (bool)true,
            'status'  => $status,
            'message' => $message,
        ];

        if ($result) {
            $response['data'] = $result;
        }

        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($message, $code = 200, $result = null, $status = 201)
    {
        $response = [
            'success' => (bool)false,
            'status'  => $status,
            'message' => $message,
        ];

        if ($result) {
            $response['data'] = $result;
        }

        return response()->json($response, $code);
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendException($message, $code = 200, $status = 201)
    {
        # check if local exception mode is disabled or not
        if (!config('custom.local_exception_mode')) {
            Log::error($message);
            $message = 'Something went wrong';
        }

        $response = [
            'success' => (bool)false,
            'status'  => $status,
            'message' => $message,
        ];

        return response()->json($response, $code);
    }

    /**
     * Special conditions
     *
     * @return \Illuminate\Http\Response
     */
    public function sendSpecialCase($message, $result = null, $status = 202, $isSuccess = true)
    {
        $response = [
            'success' => $isSuccess,
            'status'  => $status,
            'message' => $message,
        ];

        if ($result) {
            $response['data'] = $result;
        }

        return response()->json($response, 200);
    }


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendPaginateResponse($message, $result = null, $status = 200)
    {
        $response = [
            'success' => (bool)true,
            'status'  => $status,
            'message' => $message,
        ];

        if ($result) {
            $response['data'] = $result->items();

            $response['meta'] = [
                'current_page' => $result->currentPage(),
                'last_page' => $result->lastPage(),
                'per_page' => $result->perPage(),
                'total' => $result->total(),
            ];
        }
        return response()->json($response, 200);
    }


    protected function sendAuthResponse($message, $success, $status = 401)
    {
        $response = [
            'success' => (bool)$success,
            'status'  => $status,
            'message' => $message,
        ];

        return response()->json($response, $status);
    }



    public function setMessageAsPerExceptionMode($message)
    {
        # check if local exception mode is disabled or not
        if (!config('custom.local_exception_mode')) {
            $message = trans('Something went wrong');
        }
        return $message;
    }


    public function sendHomeWithException($message)
    {
        $message = $this->setMessageAsPerExceptionMode($message);

        return redirect()->route('customer.home')->withErrors($message);
    }

    public function sendBackWithException($message) {
        $message = $this->setMessageAsPerExceptionMode($message);

        return redirect()->back()->withErrors($message);
    }

    public function sendBackWithError($message) {
        return redirect()->back()->withErrors($message);
    }
}
