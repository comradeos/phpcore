<?php

class Option {
    function __construct($pages, $pass) {
        $this->pages = $pages;
        $this->pass = $pass;
    }

    function getName() {
        return $this->pages . ' ' . implode(' ', $this->pass);
    }
}

class Tool {
    function __construct($options) {
        $this->options = $options;
    }

    function getOption($data) {
        sort($data['pass']);
        foreach ($this->options as $option) {
            sort($option->pass);
            if ($option->pages == $data['pages'] && $option->pass == $data['pass']) {
                echo $option->getName() . PHP_EOL;
                return;
            }
        }
        echo 'No option found' . PHP_EOL;
    }
}

$opt1 = new Option('1-2 pages', []);
$opt2 = new Option('3-4 pages', []);
$opt3 = new Option('1-2 pages', ['BYPASS']);
$opt4 = new Option('3-4 pages', ['BYPASS']);
$opt5 = new Option('1-2 pages', ['BYPASS', 'H-PASS']);
$opt6 = new Option('3-4 pages', ['BYPASS', 'H-PASS']);
$opt7 = new Option('1-2 pages', ['BYPASS', 'H-PASS', 'Z-PASS']);
$opt8 = new Option('3-4 pages', ['BYPASS', 'H-PASS', 'Z-PASS']);

$options = [$opt1, $opt2, $opt3, $opt4, $opt5, $opt6, $opt7, $opt8];

$tool = new Tool($options);

$data = [
    'pages' => '1-2 pages', 
    'pass' =>  [
        'Z-PASS',
        'BYPASS', 
        'H-PASS', 
    ]
];

$tool->getOption($data);