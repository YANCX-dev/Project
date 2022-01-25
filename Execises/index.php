<?php
function PrintInfo($info)
{
    echo "<pre>";
        print_r($info);
    echo "</pre>";
}

$brands = [
    "HONDA",
    "SUZUKI",
    "KAWASAKI",
    "YAMAHA",
    "BMW",
    "KTM",
    "HARLEY-DAVIDSON",
    "DUCATI",
    "HUSQVARNA"
];
$bikes = [];
$r = rand(1, 10);
for ($i = 0; $i != $r; $i++) {
    $bikes[] = [
        "brandName" => $brands[rand(0, count($brands) - 1)],
        "maxSpeed" => rand(150, 300) . "км/ч",
        "bikePrice" => rand(100000, 1000000) . "р."
    ];
}
$colors = [
    ["color" => "white", "colorPrice" => "+" . rand(1, 100) . "%"],
    ["color" => "blue", "colorPrice" => "+" . rand(1, 100) . "%"],
    ["color" => "orange", "colorPrice" => "+" . rand(1, 100) . "%"],
    ["color" => "red", "colorPrice" => "+" . rand(1, 100) . "%"],
    ["color" => "green", "colorPrice" => "+" . rand(1, 100) . "%",],
    ["color" => "black", "colorPrice" => "+" . rand(1, 100) . "%"],
    ["color" => "purple", "colorPrice" => "+" . rand(1, 100) . "%"],
    ["color" => "yellow", "colorPrice" => "+" . rand(1, 100) . "%"],
    ["color" => "gold", "colorPrice" => "+" . rand(1, 100) . "%"],
    ["color" => "silver", "colorPrice" => "+" . rand(1, 100) . "%"]
];
$allBikesPrice = 0;
$theSumOfBikes = $bikes[0]["bikePrice"];
$keys = ['colors'];
foreach ($bikes as $key => $bike) {
    $bikes[$key]["BikeColors"][] = $colors[rand(0, count($colors) - 1)];
    $bikes[$key]["BikeColors"][] = $colors[rand(0, count($colors) - 1)];
    $bikes[$key]["BikeColors"][] = $colors[rand(0, count($colors) - 1)];
}

foreach ($bikes as $key => $bike) {
    PrintInfo("Мотоцикл: " . $bike["brandName"]);
    PrintInfo( "Цена: " . $bike["bikePrice"]);
    PrintInfo("Макс.Скорость: " . $bike["maxSpeed"]);
    PrintInfo("Цвета: ");
    foreach ($bike["BikeColors"] as $keyD => $description) {
        PrintInfo( $description["color"] . $description["colorPrice"]);
    }
    echo "----------------------------------------------";

}
foreach ($bikes as $key=>$bike){
    $maxBikePrice[] = (int)$bike["bikePrice"];
}
//PrintInfo($maxBikePrice);
echo "<br>"."Суммарная стоимость всех мотоциклов:" .array_sum($maxBikePrice) . "р."."<br>";
echo "Максимальная цена мотоцикла:" . max($maxBikePrice);
?>