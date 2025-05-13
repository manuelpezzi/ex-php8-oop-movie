<?php 
//Definizone del Trait MovieInfo
trait MovieInfo{
    public $views = 0;

    public function incrementViews(){
        $this->views++;
        return"il film{$this->title}è stato visualizzato{$this->views}volte";
    }
}

?>