<?php

class Bicycle {

	// properties
	public $brand;
	public $model;
	public $year;
	public $category;
	public $color;
	public $description;
	public $gender;
	public $price;
	protected $weight_kg;
	protected $condition_id;


	// construct
	public function __construct($args=[]) {
		$this->brand = $args['brand'] ?? '';
		$this->model = $args['model'] ?? '';
		$this->year = $args['year'] ?? '';
		$this->category = $args['category'] ?? '';
		$this->color = $args['color'] ?? '';
		$this->description = $args['description'] ?? '';
		$this->gender = $args['gender'] ?? '';
		$this->price = $args['price'] ?? 0;
		$this->weight_kg = $args['weight_kg'] ?? 0.0;
		$this->condition_id = $args['condition_id'] ?? 2;
	}


	// methods

}

?>