<?php

declare(strict_types=1);
//Car class
class Car {
    //Properties of the Car

    public string $make;
    public string $model;
    public int $year;

    //Constructor 
    public function __construct( string $make, string $model, int $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    //Method to get car information
    public function getCarInfo(): string{
        return "Car: $this->year $this->make $this->model";
    }
}