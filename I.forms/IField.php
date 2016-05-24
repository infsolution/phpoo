<?php
abstract class IField{
    protected $name;
    protected $size;
    protected $value;
    protected $editable;
    protected $table;
    
    function __construct($name) {
        self::setEditable(true);
        self::setName($name);
        self::setSize(200);
    }
}