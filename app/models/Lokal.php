<?php
class Lokal extends Eloquent
{
    /*
	|--------------------------------------------------------------------------
	| Guarded fields (cannot be edited by mass assignment)
	|--------------------------------------------------------------------------
	*/
    protected $guarded = array('id');
    /*
	|--------------------------------------------------------------------------
	| Prevent Eloquent from auto updating timestamps
	|--------------------------------------------------------------------------
    |
    | We do this so we can control the updated_at field to only change when the
    | beacon data is actually updated on the device and not just when entered by user
    |
	*/
    public $timestamps = false;

    protected $table = 'lokals';

    /*
	|--------------------------------------------------------------------------
	| Define relationships
	|--------------------------------------------------------------------------
	*/
//    public function type()
//    {
//        return $this->hasOne('BeaconType', 'id', 'beacon_types_id');
//    }

    /*
	|--------------------------------------------------------------------------
	| Add new beacon to DB
	|--------------------------------------------------------------------------
	*/
    public static function add(array $beacon_data, $organization_id = '')
    {

    }

    /*
    |--------------------------------------------------------------------------
    | Add new beacon to DB
    |--------------------------------------------------------------------------
    */
    public static function edit($beacon, array $beacon_data)
    {

    }

    /*
    |--------------------------------------------------------------------------
    | Add new beacon to DB
    |--------------------------------------------------------------------------
    */
    public static function remove($beacon_uid)
    {

    }
}
