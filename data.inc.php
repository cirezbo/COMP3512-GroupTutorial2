<?php



$links = [
   [ "url"=>"index.php", "label"=>"Home"],
   [ "url"=>"about.php", "label"=>"About"],
   [ "url"=>"works.php", "label"=>"Art Works"],
   [ "url"=>"artist.php", "label"=>"Artists"]

];

$genres = ["Abstract", "Baroque", "Gothic", "Renaissance"];

$subjects = ["Animals", "Landscape", "People"];

function createOptions($array) {
    $output = "";
    foreach ($array as $item) {
        $output .= "<option>$item</option>\n";
    }
    return $output;
}
?>