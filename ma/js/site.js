
 (function(){
 
  // $('#scrollable').fixTableHeader();
    

    var columnDefs = [
        { headerName: "Booking NO." ,            field: "bookingNo"},
        { headerName: "Incharge Date" ,          field: "inchargeDate"},
        { headerName: "Booking Date" ,           field: "bookingDate"},
        { headerName: "Booking Status" ,         field: "bookingStatus"},
        { headerName: "No. of Locations" ,       field: "noLocations"},
        { headerName: "No Screens" ,             field: "noScreens"},
        { headerName: "Last Update" ,            field: "lastUpdate"},
        { headerName: "Content Approval Status", field: "contentAppStat"}
    ];


    var rowData = [
        {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxxxxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"},

         {bookingNo: "xxxx435435345xxxxx", inchargeDate: "xx/xx/xx", bookingDate: "xx/xx/xx", bookingStatus: "Pending for approval", 
         noLocations: "xxx", noScreens: "xxx", lastUpdate: "xx/xx/xx", contentAppStat: "Pending for content"}
];


    var gridOptions = {
        columnDefs : columnDefs,
        rowData : rowData
    };


    // wait for the document to be loaded, otherwise
   // ag-Grid will not find the div in the document.
     document.addEventListener('DOMContentLoaded', function(){

        var gridDiv = document.querySelector('#scrollable');      // get a reference to the grid div //div does not work wihtout styling
        new agGrid.Grid(gridDiv,gridOptions); //create a new grid

    })
         



 })();

