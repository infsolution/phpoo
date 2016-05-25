<?php
class IPassword extends IField{
    function show(){
        $this->tag->name = $this->name;
        $this->tag->type = 'password';
        $this->tag->style = "width:{$this->size}";
        if(!parent::getEditable()){
            $this->tag->readonly = "1";
            $this->tag->class = 'ifield_disable';
        }
        $this->tag->show();
    }
}