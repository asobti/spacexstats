<?php

class Spacecraft extends Eloquent {

	protected $table = 'spacecraft';
	protected $primaryKey = 'spacecraft_id';
	public $timestamps = false;

	// Relations
    public function spacecraftFlights() {
        return $this->hasOneOrMany('SpacecraftFlights');
    }

	public function missions() {
		return $this->hasManyThrough('Mission', 'SpacecraftFlights');
	}

	// Attribute Accessors
}
