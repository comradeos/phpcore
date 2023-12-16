<?php

/**
 * Принцип подстановки Лисков (Liskov substitution principle)
 * Функции, которые используют базовый тип, должны иметь возможность использовать подтипы базового типа не зная об этом 
 * (также контрактное программирование) 
 */

// Пример соблюдения принципа LSP

abstract class Bird {
    abstract public function fly();
}

class Sparrow extends Bird {
    public function fly() {
        echo "Sparrow flies...\n";
    }
}

class Eagle extends Bird {
    public function fly() {
        echo "Eagle flies...\n";
    }
}

class Penguin extends Bird {
    public function fly() {
        throw new Exception("Penguins can't fly!"); // Пример нарушения принципа LSP
    }
}

function makeBirdFly(Bird $bird) {
    $bird->fly();
}

makeBirdFly(new Sparrow());
makeBirdFly(new Eagle());

try { 
    makeBirdFly(new Penguin()); 
} catch (Exception $e) {
    echo "Error: {$e->getMessage()}\n";
}