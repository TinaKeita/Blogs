<?php
echo "
<style>
    body {
      background-color:D7D3BF;
      font-size: 20px;
      font-family: Consolas;
    }

</style>";

//Mērķis: drošība un kods īsāks

$select = "SELECT * FROM posts"; 
$params = [];

if  (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
  //ja kaut kas tiek meklēts tad secelct izpilda vaicājumu
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE content LIKE :nosaukums;"; //sagatavotais vaicājums
  $params = ["nosaukums" => $search_query]; //saistītais parametrs
}

// Pie new Database izpildās konstrukotrs
$posts = $db->query($select, $params)->fetchAll();//metode atgriež asoc masīvu ar datiem

$pageTitle = "Blogs";
require "views/posts/index.view.php"; //pēdējā rinda lai visi mainīgie eksitētu

?>