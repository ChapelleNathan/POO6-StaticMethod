<?php

class Speedometer
{
    public const DISTANCE_CONVERTION = 1.609344;

    public static function milesToKm(float $miles)
    {
        return $miles / self::DISTANCE_CONVERTION ;
    }

    public static function kmToMiles(float $kilometers)
    {
        return $kilometers * self::DISTANCE_CONVERTION;
    }
}