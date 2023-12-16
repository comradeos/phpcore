<?php

/**
 * Фабричный метод (factory method) - порождающий паттерн объектов. 
 * Определяет интерфейс для создания объекта,  
 * но оставляет подклассам решение о том, какой класс инстанцировать.
 */

// Пример использования паттерна factory method

interface Button {
    public function onClick();
    public function render();
}

class HtmlButton implements Button {
    public function onClick() {
        echo "HtmlButton onClick...\n";
    }

    public function render() {
        echo "HtmlButton render...\n";
    }
}

class WindowshButton implements Button {
    public function onClick() {
        echo "WindowshButton onClick...\n";
    }

    public function render() {
        echo "WindowshButton render...\n";
    }
}

class MacOsButton implements Button {
    public function onClick() {
        echo "MacOsButton onClick...\n";
    }

    public function render() {
        echo "MacOsButton render...\n";
    }
}

interface Dialog {
    public function render();
    public function createButton();
}

class HtmlDialog implements Dialog {
    public function render() {
        $button = $this->createButton();
        $button->render();
    }

    public function createButton() {
        return new HtmlButton();
    }
}

class WindowsDialog implements Dialog {
    public function render() {
        echo "WindowsDialog render...\n";
    }

    public function createButton() {
        return new WindowshButton();
    }
}

class MacOsDialog implements Dialog {
    public function render() {
        echo "MacOsDialog render...\n";
    }

    public function createButton() {
        return new MacOsButton();
    }
}

class Application {
    public $dialog;

    public function __construct(Dialog $dialog) {
        $this->dialog = $dialog;
    }
}

$application = new Application(new MacOsDialog());
$application->dialog->createButton()->onClick();


