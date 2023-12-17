<?php

/**
 * Абстрактная фабрика — это порождающий паттерн проектирования, 
 * который позволяет создавать семейства связанных объектов, 
 * не привязываясь к конкретным классам создаваемых объектов.
 */

 interface IDocument {
    public function getName();
 }

class TextDocument implements IDocument {
    public function getName() {
        return 'TextDocument';
    }
}

class GraphicDocument implements IDocument {
    public function getName() {
        return 'GraphicDocument';
    }
}

interface IDocumentFactory {
    public function createTextDocument();
    public function createGraphicDocument();
}

class TextDocumentFactory implements IDocumentFactory {
    public function createTextDocument() {
        return new TextDocument();
    }

    public function createGraphicDocument() {
        throw new Exception('To create graphic documents use GraphicDocumentFactory!');
    }
}

class GraphicDocumentFactory implements IDocumentFactory {
    public function createTextDocument() {
        throw new Exception('To create text documents use TextDocumentFactory!');
    }

    public function createGraphicDocument() {
        return new GraphicDocument();
    }
}

$factory = new TextDocumentFactory();
$document = $factory->createGraphicDocument();
echo $document->getName(); // TextDocument
 
