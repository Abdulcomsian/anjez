<?php


if(!function_exists('countryCode'))
{
    function countryCode($phone_no)
    {
        $exploded_phone_no = explode(" ", $phone_no);
        if(count($exploded_phone_no)>1)
            $country_code = $exploded_phone_no[0].''.$exploded_phone_no[1];
        else
            $country_code = $exploded_phone_no[0];
        return $country_code;
    }
}

if(!function_exists('apiSuccessResponse'))
{
    function apiSuccessResponse($data, $message)
    {
        return response()->json([
            'data'          => $data,
            'message'       => 'Data Inserted',
            'status'        => true,
            'status_code'   => 200
        ]);
    }
}


if(!function_exists('apiSuccessResponse'))
{
    function apiSuccessResponse($data, $message)
    {
        return response()->json([
            'data'          => $data ?? null,
            'message'       => $message ?? 'Data Inserted',
            'status'        => true,
            'status_code'   => 200
        ]);
    }
}

if(!function_exists('apiErrorResponse'))
{
    function apiErrorResponse($error=null, $message=null)
    {
        return response()->json([
            'error'         => $error,
            'message'       => $message ?? 'Data Not Found',
            'status'        => false,
            'status_code'   => 400
        ]);
    }
}

if(!function_exists('dateConversion'))
{
    function dateConversion ($date)
    {
        return $date->format('M d Y g:i A');
    }
}
