
//trying to call the data form the localhsot from the java srvlet localhost i had
//need to call this form the same servlet

(function() {

    // $('#scrollable').fixTableHeader();


   var columns = [
        { headerName: "EntryTime",   field: "EntryTime" },
        { headerName: "MACID",       field: "MACID" },
        { headerName: "RSSI",        field: "RSSI" },
        { headerName: "ENTRY",       field: "ENTRY" },
        { headerName: "DEVICEID",    field: "DEVICEID" },
        { headerName: "CLOUD",       field: "CLOUD" },
        { headerName: "ID",          field: "ID" },
        { headerName: "ExitOffset",  field: "ExitOffset" },
        { headerName: "EntryOffset", field: "EntryOffset" },
        { headerName: "EXIT",        field: "EXIT" },
        { headerName: "ExitTime",    field: "ExitTime" }
    ];

   


    
    var gridOptions = {
        columnDefs : columns
        
    };


    // wait for the document to be loaded, otherwise
    // ag-Grid will not find the div in the document.
    document.addEventListener("DOMContentLoaded", function() {

        var gridDiv = document.querySelector('#scrollable'); // get a reference to the grid div //div does not work wihtout styling
        new agGrid.Grid(gridDiv, gridOptions); //create a new grid

        jsonLoad(function(data){   //calling the data from the api using the jsonLoad function down below
            gridOptions.api.setRowData(data);
        });
    })

})();


                          // xhr xmlhttprequest

function jsonLoad(callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'http://localhost/ma/service.php'); //this has as cors problem so need to call it from the same servlet
    responseType = 'json';

    xhr.onload = function() {
        if (this.status == 200) {
            //console.log(this.response);
            
            // var data = JSON.parse('[{"EntryTime":"17:55:02","MACID":"48:e9:f1:8b:b0:59","RSSI":"-69","ENTRY":"2016-08-26","DEVICEID":"MWPI03201-01","CLOUD":"0","ID":"116","ExitOffset":"08:00:00","EntryOffset":"08:00:00","EXIT":"2016-08-26","ExitTime":"17:55:49"},{"EntryTime":"17:55:02","MACID":"48:e9:f1:8b:b0:59","RSSI":"-69","ENTRY":"2016-08-26","DEVICEID":"MWPI03201-01","CLOUD":"0","ID":"116","ExitOffset":"08:00:00","EntryOffset":"08:00:00","EXIT":"2016-08-26","ExitTime":"17:55:49"},{"EntryTime":"17:55:02","MACID":"48:e9:f1:8b:b0:59","RSSI":"-69","ENTRY":"2016-08-26","DEVICEID":"MWPI03201-01","CLOUD":"0","ID":"116","ExitOffset":"08:00:00","EntryOffset":"08:00:00","EXIT":"2016-08-26","ExitTime":"17:55:49"}]');
            var data = JSON.parse(this.response); // converts the jason string to jason object 
            callback(data);
        }
    };

    xhr.onerror = function() { // onload called even on 404 etc so check the status
        console.log('loading data error');
    };

    xhr.send();
}
