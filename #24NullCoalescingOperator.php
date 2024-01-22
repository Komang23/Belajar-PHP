<?php
// Kode : Tanpa Null Coalescing Operator


$data = [
    "action" => "Create"
];
$action = $data["action"] ?? "Nothing";   // ?? adalah operator Null Coalescing Operator

echo $action . PHP_EOL;
