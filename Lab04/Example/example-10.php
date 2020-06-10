<?php
$i = 0;
$j = 0;
$products = array(
    'paper' => array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "inkJet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    ),
    'pens' => array(
        'ball' => "Ball Point",
        'hilite' => "HighLighter",
        'market' => "Marker",
    ),
    'misc' => array(
        'tape' => "Sticky tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips",
    )
);

foreach ($products as $product => $items){
    foreach ($items as $item => $value){
        echo "$product: $item {$value}<br>";
    }
}

