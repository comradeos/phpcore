<?php
require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\SimpleType\Jc;
use PhpOffice\PhpWord\Element\Field;

$phpWord = new PhpWord();

$section = $phpWord->addSection();


$fontStyle = [
    'name' => 'Times New Roman',
    'size' => 12,
    'color' => '000000',
    'bold' => true,
    'italic' => true,
];

$paragraphStyle = [
    'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER
];

$header = $section->addHeader();    
$header->addPreserveText('{PAGE} of {NUMPAGES} aaaaaa', $fontStyle, $paragraphStyle);

$writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$writer->save(__DIR__ . '/simpleDocument.docx');

echo "Документ создан.";