<?php
$paper = array('Copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

foreach ($paper as $items => $description){
    echo "$items: $description<br>";

}