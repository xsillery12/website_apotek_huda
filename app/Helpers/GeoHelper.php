<?php

namespace App\Helpers;

class GeoHelper
{
    public static function getCoordinates($address)
    {
        $apiKey = env('GOOGLE_MAPS_API_KEY');
        $address = urlencode($address);
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=$apiKey";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if (!empty($data['results'][0])) {
            return [
                'lat' => $data['results'][0]['geometry']['location']['lat'],
                'lon' => $data['results'][0]['geometry']['location']['lng'],
            ];
        }

        return null;
    }

    public static function haversineDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // kilometer
        $latFrom = deg2rad($lat1);
        $lonFrom = deg2rad($lon1);
        $latTo = deg2rad($lat2);
        $lonTo = deg2rad($lon2);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));

        return $angle * $earthRadius;
    }
}
