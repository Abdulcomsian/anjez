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
