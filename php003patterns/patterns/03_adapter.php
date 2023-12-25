<?php

/**
 * Адаптер — это структурный паттерн проектирования,
 * который позволяет объектам с несовместимыми интерфейсами работать вместе.
 */

//  

interface IRecord {
    public function record();
}

class Microfone {
    public function makeRecord() {
        echo "Recording with microphne...\n";
    }
}

class MicrophoneAdapter implements IRecord {
    private $microfone;

    public function __construct(Microfone $microfone) {
        $this->microfone = $microfone;
    }

    public function record() {
        $this->microfone->makeRecord();
    }
}

$mic = new Microfone();
$adapter = new MicrophoneAdapter($mic);
$adapter->record(); // Outputs: Recording with microphne...