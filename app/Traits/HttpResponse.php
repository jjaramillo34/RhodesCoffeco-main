<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Request;

trait HttpResponse
{
    /**
     * --------------------------------------------------------------
     *  Maintain features
     * --------------------------------------------------------------
     * 
     * @var bool[] $feature
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 01, 2024
     */
    protected static $features = [
        "api_info" => false,
        "auth_user" => true,
        "status" => true,
        "status_code" => true,
    ];


    /**
     * --------------------------------------------------------------
     *  Default response message
     * --------------------------------------------------------------
     * 
     * @var string[] $messages
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 02, 2024
     */
    protected static $messages = [
        "index" => "Get successfully.",
        "fetched" => "Fetched successfully.",
        "founded" => "Founded successfully.",
        "stored" => "Stored successfully.",
        "created" => "Created successfully.",
        "updated" => "Updated successfully.",
        "deleted" => "Deleted successfully.",
        "count" => "Records found.",
        "default" => "Request completed successfully."
    ];


    /**
     * --------------------------------------------------------------
     *  Send response with default message
     * --------------------------------------------------------------
     * 
     * @param string $message
     * @param array|object $data
     * @param int $code
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 01, 2024
     */
    protected static function sendResponse(string $messageKey = 'default', array|object $data = [], int $code = 200): JsonResponse
    {
        return self::makeResponse(self::$messages[$messageKey], $data, $code);
    }
    


    /**
     * --------------------------------------------------------------
     *  Send Success response
     * --------------------------------------------------------------
     * 
     * @param string $message
     * @param array|object $data
     * @param int $code
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 01, 2024
     */
    protected static function sendSuccess(string $message, array|object $data = [], int $code = 200): JsonResponse
    {
        return self::makeResponse($message, $data, $code);
    }


    /**
     * --------------------------------------------------------------
     *  Send Error response
     * --------------------------------------------------------------
     * 
     * @param string $message
     * @param array|object $data
     * @param int $code
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 01, 2024
     */
    protected static function sendError(string $message, array|object $data = [], int $code = 400): JsonResponse
    {
        return self::makeResponse($message, $data, $code);
    }


    /**
     * --------------------------------------------------------------
     *  Send Validation Error response
     * --------------------------------------------------------------
     * 
     * @param string $message
     * @param array|object $data
     * @param int $code
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 01, 2024
     */
    protected static function sendValidationErrors(string $message = 'Invalid request.', array|object $errors = [], int $code = 422): JsonResponse
    {
        return self::makeValidationErrorResponse($message, $errors, $code);
    }


    /**
     * --------------------------------------------------------------
     *  Send Exception
     * --------------------------------------------------------------
     * 
     * @param string $message
     * @param array|object $data
     * @param int $code
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 02, 2024
     */
    protected static function sendException(string $message, array|object $data = [], int $code = 500): JsonResponse
    {
        return self::makeResponse($message, $data, $code);
    }


    /**
     * --------------------------------------------------------------
     *  Make an array to send response
     * --------------------------------------------------------------
     *  
     * @return \Illuminate\Http\JsonResponse
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 04, 2024
     */
    protected static function makeResponse(string $message, array|object $data, int $code): JsonResponse
    {
        $feature = (object)self::$features;

        $response['success'] = ($code >= 400) ? false : true;

        if($feature->status)
            $response['status'] = "API called successfully";

        if($feature->status_code)
            $response['status_code'] = $code;

        $response['message'] = $message;

        if($feature->api_info)
            $response['api'] = self::apiInfo();

        if($feature->auth_user && auth()->user())
            $response['auth_user'] = auth()->user();

        $response['data'] = $data;

        return response()->json($response, $code);
    }

    protected static function makeValidationErrorResponse(string $message, array|object $errors, int $code): JsonResponse
    {
        $response['message'] = $message;
        $response['errors'] = $errors;

        return response()->json($response, $code);
    }




    /**
     * --------------------------------------------------------------
     *  Added API information
     * --------------------------------------------------------------
     *  
     * @return array
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified January 02, 2024
     */
    protected static function apiInfo(): array
    {
        return [
            'endpoint'   =>  Request::url(),
            'method'   =>  Request::method(),
        ];
    }
}