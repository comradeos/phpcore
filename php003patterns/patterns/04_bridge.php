<?php

/**
 * Мост — это структурный паттерн проектирования, 
 * который разделяет один или несколько классов на две отдельные иерархии — абстракцию и реализацию, 
 * позволяя изменять их независимо друг от друга.
 */

// 

// Абстракция
interface Device {
    public function turnOn();
    public function turnOff();
}

// Реализация
class Radio implements Device {
    public function turnOn() {
        return "Radio is on";
    }

    public function turnOff() {
        return "Radio is off";
    }
}

class Tv implements Device {
    public function turnOn() {
        return "TV is on";
    }

    public function turnOff() {
        return "TV is off";
    }
}

// Мост
class RemoteControl implements Device {
    protected $device;

    public function __construct(Device $device) {
        $this->device = $device;
    }

    public function turnOn() {
        return $this->device->turnOn();
    }

    public function turnOff() {
        return $this->device->turnOff();
    }
}

$radio = new Radio();
$remote = new RemoteControl($radio);

echo $remote->turnOn();  // Outputs: Radio is on
echo $remote->turnOff(); // Outputs: Radio is off