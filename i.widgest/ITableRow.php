<?php
class ITableRow extends IElement{
    function __construct() {
        parent::__construct('tr');
    }
    function addCell($value){
        $cell =  new ITableCell($value);
        parent::add($cell);
        return $cell;
    }
}
