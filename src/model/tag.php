<?php

class Tag {
    private $dataTag = 'src/assets/datas/Tag.json';
    private $tags;

    function __construct()
    {
        $dataTag = json_decode(file_get_contents($this->dataTag));
        $this->tags =  $dataTag->tags;
    }
    function getAll()
    {
        return $this->tags;
    }
}
