<?php
class ITableCell extends IElement{
    function __construct($value) {
        parent::__construct('td');
        parent::add($value);
    }
}