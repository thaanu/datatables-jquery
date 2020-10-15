<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables (jQuery)</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.js"></script>
    <script src="app.js"></script>
    
</head>
<body>
    <div class="container">


        <h1>Data Tables (jQuery)</h1>
        <h3>A test project for working with data tables</h3>

        <p>For this example, I will use a JSON file to fetch and store data.</p>

        <p>All source code for this project will be available on <a href="https://github.com/thaanu/datatables-jquery">github.com/thaanu/datatables-jquery</a></p>
        
        <div class="mt-5 mb-3">
            <h3 class="mb-4">Football Teams</h3>
            <table id="studentsTable"></table>
        </div>

        <button id="reloadButton" class="btn btn-primary">Refresh</button>


    </div>
</body>
</html>