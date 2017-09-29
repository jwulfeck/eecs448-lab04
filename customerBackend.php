<?php
include('style.css');
$user = $_POST["userName"];
$pass = $_POST["pw"];
$blue = $_POST["blueOrders"];
$red = $_POST["redOrders"];
$green = $_POST["greenOrders"];
$ship = $_POST["shipping"];

echo("Welcome ". $user . ". Your password is " . $pass . ".<br><br>");
$html = '<table>';
$html .= '<tr>';
$html .= '<th>'. "   " . '</th>';
$html .= '<th>'. "Quantity" . '</th>';
$html .= '<th>'. "Cost Per Item" . '</th>';
$html .= '<th>'. "Subtotal" . '</th>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<th>'. "Blue Shirts". '</th>';
$html .= '<td>'. $blue . '</td>';
$html .= '<td>'. "$10" . '</td>';
$html .= '<td>'. "$" . $blue*10 . '</td>';

$html .= '</tr>';

$html .= '<tr>';
$html .= '<th>'. "Red Shirts" . '</th>';
$html .= '<td>'. $red . '</td>';
$html .= '<td>'. "$20" . '</td>';
$html .= '<td>'. "$" . $red*20 . '</td>';

$html .= '</tr>';

$html .= '<tr>';
$html .= '<th>'. "Green Shirts" . '</th>';
$html .= '<td>'. $green . '</td>';
$html .= '<td>'. "$50" . '</td>';
$html .= '<td>'. "$" . $green*50 . '</td>';
$html .= '</tr>';

$html .= '<tr>';
  $html .= '<th>'. "Shipping" . '</th>';
  $html .= '<td colspan="2">'. $ship . '</td>';
  $shipcost = 0;
  if ($ship == "Three Day"){
    $shipcost = 5;
  }
  else if ($ship == "Overnight"){
    $shipcost = 50;
  }
  $html .= '<td>'. "$" . $shipcost . '</td>';
$html .= '</tr>';

$cost = $shipcost + $green*50 + $red*20 + $blue*10;
$html .= '<tr>';
  $html .= '<th colspan="3">'. "Total Cost" . '</th>';
  $html .= '<th>' . "$" . $cost . '</th>';
$html .= '</tr>';


$html .= '</table>';
echo($html);





?>
