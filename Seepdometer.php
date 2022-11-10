class Speedometer
{
    public const MILE_TO_KM = 1.609344;
    public const KM_TO_MILES = 0.62137119;

    public static function convertKmToMiles($km)
    {
        $miles = round($km * self::KM_TO_MILES, 2, PHP_ROUND_HALF_DOWN);
        return $km . " km-miles: " . $miles;
    }

    public static function convertMilesToKm($miles)
    {
        $km = round($miles * self::MILE_TO_KM, 2, PHP_ROUND_HALF_DOWN);
        return $miles . " mile-km: " . $km;
    }
}
