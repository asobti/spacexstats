<?php
class AstronautFlight extends Eloquent {

    use ValidatableTrait;

    protected $table = 'astronauts_flights_pivot';
    protected $primaryKey = 'astronaut_flight_id';
    public $timestamps = false;

    protected $hidden = [];
    protected $appends = [];
    protected $fillable = [];
    protected $guarded = [];

    // Validation
    public $rules = array(
        'astronaut_id'          => ['integer', 'exists:astronauts,astronaut_id'],
        'spacecraft_flight_id'  => ['integer', 'exists:spacecraft_flights,spacecraft_flight_id'],
    );

    public $messages = array();
}