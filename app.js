$(document).ready(function () { 

    console.log("App.js - Ahmed Shan");

    let studentTable = null;
    
    let app = {
        // Initiliaze app
        init: function () {
            this.fetch();
        },
        // Do a ajax call to the endpoint to get content
        fetch: function () {
            $.ajax({
                url: 'fetch.php',
                dataType: 'json',
                success: function (json) {
                    app.loadDataTable(json);
                }
            });
        },
        // Load the datatable with content
        loadDataTable: function ( json ) {
            studentTable = $('#studentsTable').DataTable(json);
        },
        // Reload the datarable
        reload: function () {
            /**
             * Datatables cannot be reinitialized once they are initialized
             * So technically, here the current datatable is destroyed
             * and another instance is created.
             * 
             * Probably this is not a correct way of doing this.
             * But for my case, since I am loading the content from server side
             * $('#datatable').ajax.reload(); is not working... So using this work around
             *
             */
            studentTable.destroy();
            this.fetch();
        }
    };

    // Initialize
    app.init();

    $('#reloadButton').on('click', function () {
        app.reload();
    });

});