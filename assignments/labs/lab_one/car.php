<?php

// car.php/This file defines a Car class to represent a car.

class Car {

    // Properties of the car
    private string $make;
    private string $model;
    private int $year;

    // Constructor initializes the car properties
    public function __construct(string $make, string $model, int $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method that returns car information
    public function getCarInfo(): string {
        return "{$this->year} {$this->make} {$this->model}";
    }
}
