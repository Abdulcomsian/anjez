<?php
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Str;

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
            'message'       => $message,
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

if (!function_exists('encryptParams')) {
    function encryptParams($params): array|string
    {
        if (is_array($params))
        {
            $data = [];
            foreach ($params as $item)
            {
                $data[] = Crypt::encryptString($item);
            }
            return $data;
        }
        return Crypt::encryptString($params);
    }
}

if (!function_exists('decryptParams')) {
    function decryptParams($params): array|string
    {
        if (is_array($params))
        {
            $data = [];
            foreach ($params as $item)
            {
                $data[] = Crypt::decryptString($item);
            }
            return $data;
        }
        return Crypt::decryptString($params);
    }
}

if (!function_exists('filter_strip_tags'))
{

    function filter_strip_tags($field): string
    {
        return trim(strip_tags($field));
    }
}

if (!function_exists('editDateColumn')) {
    function editDateColumn($date)
    {
        $date = new Carbon($date);

        return "<span>" . $date->format('h:i A') . "</span> <br> <span class='text-primary fw-bold'>" . $date->format('d/m/Y') . "</span>";
    }
}

if( !function_exists('token') )
{
    function token ()
    {
        return Str::random(64);
    }
}
