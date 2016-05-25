<?php
class IFile extends IField{
    function show(){
        $this->tag->name = $this->name;
        $this->tag->type = 'file';
        $this->tag->value = $this->value;
        if(!parent::getEditable()){
            $this->tag->readonly = "1";
            $this->tag->class = 'ifield_disable';
        }
        $this->tag->show();
    }
}
