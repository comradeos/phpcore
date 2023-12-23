<?php

/**
 * Абстрактная фабрика — это порождающий паттерн проектирования, 
 * который позволяет создавать семейства связанных объектов, 
 * не привязываясь к конкретным классам создаваемых объектов.
 */

 interface Button {
    public function render();
}

class WindowsButton implements Button {
    public function render() {
        return "Windows Button\n";
    }
}

class MacButton implements Button {
    public function render() {
        return "Mac Button\n";
    }
}

interface GUIFactory {
    public function createButton();
}

class WindowsFactory implements GUIFactory {
    public function createButton() {
        return new WindowsButton();
    }
}

class MacFactory implements GUIFactory {
    public function createButton() {
        return new MacButton();
    }
}

function clientCode(GUIFactory $factory) {
    $button = $factory->createButton();
    echo $button->render();
}

clientCode(new WindowsFactory()); // Outputs: Windows Button
clientCode(new MacFactory()); // Outputs: Mac Button
