<?php


class Speedometer
{
    public const MILE_TO_KM = 1.609344;
    public const KM_TO_MILES = 0.62137119;

    public static function kmToMiles($km)
    {
        $miles = $km * self::KM_TO_MILES;
        return $km . " km en miles " . $miles;
    }

    public static function milesToKm($miles)
    {
        $km = $miles * self::MILE_TO_KM;
        return $miles . " miles en km" . $km;
    }
}
