<?php

/**
 * Принцип открытости/закрытости (open-closed principle):
 * Программные сущности (классы, модули, функции и т. п.) должны быть открыты для расширения, но закрыты для модификации.
 */

// Пример сблюдения принципа OCP

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

class AreaCalculator {
    public function calculate($shapes) {
        $area = 0;
        foreach ($shapes as $shape) {
            $area += $shape->area();
        }
        return $area;
    }
}

$rectangle = new Rectangle(10, 20);
$circle = new Circle(10);

$areaCalculator = new AreaCalculator();

echo "Area: ". $areaCalculator->calculate([$rectangle, $circle]) ."\n";

// Пример нарушения принципа OCP

class AreaCalculator {
    public function calculate($shapes) {
        $area = 0;
        foreach ($shapes as $shape) {
            if ($shape instanceof Rectangle) {
                $area += $shape->width * $shape->height;
            } elseif ($shape instanceof Circle) {
                $area += $shape->radius * $shape->radius * pi();
            }
        }
        return $area;
    }
}