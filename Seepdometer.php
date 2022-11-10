<?php

class Speedometer
{

    public const KMILES_CONVERSION = 0.6213711922;

    public static function KmtoMiles(int $km): float
    {
        return $km * self::KMILES_CONVERSION;
    }

    public static function MilestoKM(int $km): float
    {
        return $km / self::KMILES_CONVERSION;
    }
}
