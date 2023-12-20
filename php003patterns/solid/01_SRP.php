<?php

/*
 * Принцип единственной ответственности (The Single Responsibility Principle, SRP) гласит, 
 * что каждый объект должен иметь одну ответственность и эта ответственность должна быть полностью инкапсулирована в класс. 
 * Все его поведения должны быть направлены исключительно на обеспечение этой ответственности. 
 */

// Пример соблюдения принципа SRP

class User {
    public $name;
    public $email;

    function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

class Validator {
    public static function Email (string $email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
    }
}

$user = new User('Foo Bar', 'foobar@gmain.com');

echo "User: {$user->name}, email: {$user->email}\n";
echo "Validator->Email: ". Validator::Email($user->email) ."\n";

// Пример нарушения принципа SRP

class User {
    public function create($userData) {
        // logic to create a user
    }

    public function notify($message) {
        // logic to send a notification
    }
}