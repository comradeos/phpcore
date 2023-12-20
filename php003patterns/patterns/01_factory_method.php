<?php

/**
 * Фабричный метод (factory method) - порождающий паттерн объектов. 
 * Определяет интерфейс для создания объекта,  
 * но оставляет подклассам решение о том, какой класс инстанцировать.
 */

// Пример использования паттерна factory method

interface IShape {
    public function area();
}

class Rectangle implements IShape {
    private $width;
    private $height;

    public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle implements IShape {
    private $radius;

    public function __construct(int $radius) {
        $this->radius = $radius;
    }

    public function area() {
        return $this->radius * $this->radius * pi();
    }
}

interface IShapeFactory {
    public function createShape();
}

class RectangleFactory implements IShapeFactory {
    public function createShape() {
        return new Rectangle(10, 20);
    }
}

class CircleFactory implements IShapeFactory {
    public function createShape() {
        return new Circle(10);
    }
}

$factory = new RectangleFactory();
$rectangle = $factory->createShape();
echo "Rectangle area: ". $rectangle->area() ."\n";


// https://www.youtube.com/watch?v=fudZFG-Cm0Y