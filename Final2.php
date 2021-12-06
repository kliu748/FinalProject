<?php
$json = '<?php
$object = [
\'Name\'=> \'Kevin Liu\',
\'Link\'=> \'errorsea.com\',
\'data\'=> [
\'Key1\'=> \'Value1\',
\'Key2\'=> \'Value2\',
\'Key3\'=> \'Value3\'
]
];

header("content-type: application/json");
echo json_encode($object);
?>';
$assoc = true;
$depth = 6;
$options = 5;
$result = json_decode ($json, $assoc, $depth, $options);
?>
