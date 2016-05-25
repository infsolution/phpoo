<?php
class ITextArea extends IField{
    private $width;
    private $height;
            function __construct($name) {
        parent::__construct($name);
        $this->tag= new IElement('textarea');
        $this->tag->class='ifield';
        $this->height=110;
    }
    function setSize($width, $height){
        $this->width= $width;
        $this->height=$height;
    }
    function show(){
        $this->tag->name = $this->name;
        $this->tag->style = "width:{$this->size};height:{$this->height}";
        if(!parent::getEditable()){
            $this->tag->readonly = "1";
            $this->tag->class = 'ifield_disable';
        }
        $this->tag->add(htmlespecialchars($this->value));
        $this->tag->show();
    }
}

