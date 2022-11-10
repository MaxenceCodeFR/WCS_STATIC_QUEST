class Speedometer
{
    public const MILE_TO_KM = 1.609344;
    public const KM_TO_MILES = 0.62137119;

    public static function convertKmToMiles($km)
    {
        $miles = round($km * self::KM_TO_MILES);
        return $km . " km-miles: " . $miles;
    }

    public static function convertMilesToKm($miles)
    {
        $km = round($miles * self::MILE_TO_KM);
        return $miles . " mile-km: " . $km;
    }
}
