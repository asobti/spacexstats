<?php
class SpacecraftFlight extends Eloquent {

    use ValidatableTrait;

    protected $table = 'spacecraft_flights_pivot';
    protected $primaryKey = 'spacecraft_flight_id';
    public $timestamps = false;

    protected $hidden = [];
    protected $appends = [];
    protected $fillable = [];
    protected $guarded = [];

    // Validation
    public $rules = array(
        'mission_id'    => ['integer', 'exists:missions,mission_id'],
        'spacecraft_id' => ['integer', 'exists:spacecraft,spacecraft_id'],
        'flight_name'   => ['required', 'varchar:tiny'],
        'upmass'        => ['numeric'],
        'downmass'      => ['numeric']
    );

    public $messages = array();

    // Relations
    public function mission() {
        return $this->belongsTo('Mission');
    }

    public function spacecraft() {
        return $this->belongsTo('Spacecraft');
    }

    public function astronauts() {
        return $this->belongsToMany('Astronaut', 'astronauts_flights_pivot');
    }
}