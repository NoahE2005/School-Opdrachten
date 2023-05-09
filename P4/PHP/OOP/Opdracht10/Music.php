<?php 
Class Music 
{
    public $name = "";
    public $genre = "";
    public $listen = "";
   /** 
    * @param string $name
    * @param string $genre
    * @param int $listen
*/ 
    public function __construct(string $name = "Template", string $genre = "None", int $listen = 0) 
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