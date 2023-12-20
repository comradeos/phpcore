<?php

/**
 * Принцип разделения интерфейса (interface segregation principle)
 * Много интерфейсов, специально предназначенных для клиентов, лучше, чем один интерфейс общего назначения.
 */

// Пример соблюдения принципа ISP

interface Worker {
    public function work();
}

interface Sleeper {
    public function sleep();
}

class HumanWorker implements Worker, Sleeper {
    public function work() {
        echo "HumanWorker works...\n";
    }

    public function sleep() {
        echo "HumanWorker sleeps...\n";
    }
}

class AndroidWorker implements Worker {
    public function work() {
        echo "AndroidWorker works...\n";
    }
}