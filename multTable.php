<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    function build_table(){
    // start table
    $html = '<table>';
    // header row
    $mainArray = array();
    for($i=1;$i<101;$i++){
      $mainArray[$i] = array();
      for($j=1;$j<101;$j++){
        $mainArray[$i][$j] = $i * $j;
        //echo $mainArray[$i][$j] . "\n";
      }
    }
    $html .= '<tr>';
    $html .= '<td>' . '   ' . '</td>';
    foreach($mainArray[1] as $num=>$value){
      $html .= '<th>' .htmlspecialchars($value) . '</th>';
    }
    $html .= '</tr>';
    foreach($mainArray as $row=>$value){
      $html .= '<tr>';
      $html .= '<th>' .htmlspecialchars($row) . '</th>';
      foreach($value as $col=>$value2){

        $html .= '<td>' .htmlspecialchars($value2) . '</td>';
      }
      $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;
}

echo build_table();
?>
