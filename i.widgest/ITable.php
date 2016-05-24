<?php
class ITable extends IElement{
    function __construct() {
        parent::__construct('table');
    }
    function addRow(){
        $row = new ITableRow();
        parent::add($row);
        return $row;
    }
}

