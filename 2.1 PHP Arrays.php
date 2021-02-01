<pre>
<?php
$products = array(
    'paper' =>	array( 
        'copier' => "Copier & Multipurpose", 
        'inkjet' => "Inkjet Printer", 
        'laser' => "Laser Printer", 
        'photo' => "Photographic Paper"),
    'pens' => array(
        'ball'	=> "Ball Point", 
        'hilite' => "Highlighters", 
        'marker' => "Markers"),
    'misc' => array( 
        'tape'	=> "Sticky Tape", 
        'glue'	=> "Adhesives", 
        'clips' => "Paperclips") 
);
foreach ($products as $keyArray => $valueArray) {
	echo "$keyArray\n";
	foreach ($valueArray as $key => $value) {
		echo "$key:$value\n";
	}
	echo "\n";
}
?>
</pre>
