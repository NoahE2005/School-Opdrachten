<?php 
Class Music 
{
    public $name = "";
    public $genre = "";
    public $listen = "";

    public function __construct($name = "Template", $genre = "None", $listen = "0") 
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->listen = $listen;
    }

    function getName() {
        return $this->name;
    } 
}

?>