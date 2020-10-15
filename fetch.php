<?php 

    // Fetch data from data.json
    $json = json_decode(file_get_contents(__DIR__ . '/data.json'));

    // Create a json object for DataTables
    $returnData = [];

    // Collect column names
    for( $i = 0; $i <= count($json); $i++ ) {
        $returnData["data"][$i] = [$json[$i]->name, $json[$i]->age, $json[$i]->class];
    }

    // Set column names
    $returnData["columns"] = [
        ["title" => "Name"],
        ["title" => "Age"], 
        ["title" => "Classroom"]
    ];

    // Send the data to DataTables
    echo json_encode($returnData);