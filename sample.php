
<?php 
$xml = simplexml_load_file("a.xml");
foreach ($xml->items->item as $item) {
    echo $item['category'] . ", " . $item['name'] . ", " . $item['description'] . "\n";
}
?>
