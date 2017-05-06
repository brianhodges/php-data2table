<?php
    $c1 = array(
      "name" => "USA",
      "population" => "350 million"
    );
    $c2 = array(
      "name" => "China",
      "population" => "1.4 billion"
    );
    $c3 = array(
        "name" => "Russia",
        "population" => "145 million"
    );
    $countries = array($c1, $c2, $c3);
    echo "\n";
    echo "SANITIZED DUMP:\n";
    foreach($countries as $country) {
        echo "{:name => ",$country['name'],", :population => ",$country['population'],"}\n";
    }
    echo "\n";
    echo "TABLE:\n";
    echo "Countries | Population\n";
    echo str_repeat("-",strlen("Countries | Population"));
    echo "\n";
    foreach ($countries as &$country) {
        $ws = strlen("Countries ");
        $space = $ws - strlen($country['name']);
        echo $country['name'],str_repeat(" ", $space),"|",$country['population'],"\n";
    }
    echo "\n";
?>