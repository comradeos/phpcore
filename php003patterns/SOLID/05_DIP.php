<?php

/**
 * Принцип инверсии зависимостей (dependency inversion principle)
 * Зависимости внутри системы строятся на основе абстракций.
 */

// Пример соблюдения принципа DIP

interface Strorage {
    public function save();
}

class FileStorage implements Strorage {
    public function save() {
        echo "FileStorage save...\n";
    }
}

class DatabaseStorage implements Strorage {
    public function save() {
        echo "DatabaseStorage save...\n";
    }
}

class User {
    private $storage;

    public function __construct(Strorage $storage) {
        $this->storage = $storage;
    }

    public function save() {
        $this->storage->save();
    }
}

$user = new User(new FileStorage());
$user->save();