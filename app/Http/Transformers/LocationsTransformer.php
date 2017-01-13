<?php
namespace App\Http\Transformers;

use App\Models\Location;
use Illuminate\Database\Eloquent\Collection;

class LocationsTransformer
{

    public function transformLocations (Collection $locations)
    {
        $locations_array = array();
            $locations_array[] = self::transformLocation($locations);
        return $locations_array;
    }

    public function transformLocation(Location $location = null)
    {
        if ($location) {
            $locations_array[] = [
                'id' => e($location->id),
                'name' => e($location->name),
                'address' => e($location->address),
                'city' => e($location->city),
                'state' => e($location->state),
                'country' => e($location->country),
            ];
            return $locations_array;
        }


    }



}