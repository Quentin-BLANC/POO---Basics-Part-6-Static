<?php


class Speedometer
{
    const KM_TO_MILES = 0.621;
    public static function convertKmToMiles(float $speed) : float
    {
        return $speed * self::KM_TO_MILES;
    }

    const MILES_TO_KM = 1.609;
    public static function convertMilesToKm(float $speed) : float
    {
        return $speed * self::MILES_TO_KM;
    }
}

