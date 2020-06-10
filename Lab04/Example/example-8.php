<?php
$paper = array('copier' => "Copier and Multipurpose",
                'inkJet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

while (list($items,$description) = each($paper))
    echo "$items: $description<br>";