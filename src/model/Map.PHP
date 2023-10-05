<?php

class Map {
    private $userMarker = [
        "iconUrl" =>  'src/assets/img/my-icon.webp',
        "iconSize" => [27, 40],
        "iconAnchor" => [16, 32]
    ];


    function getUserMarker() {
        return $this->userMarker;
    }


}