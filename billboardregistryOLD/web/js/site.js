$(document).ready(function() {
        console.log('ready');

        // ******************************************************** LOAD MODAL WINDOW *************************************************************
       
        function triggerModel() {
            $('.card').click(function() {
                var data = $(this).attr('data-board'); //refers to each of the cards that is clicked
                var dataJson = $.parseJSON(data);
                
                var lati = parseFloat(dataJson.lat);   //lat and lng takes number no object
                var longi = parseFloat(dataJson.lon); 
                var name  = dataJson.name;
                 console.log(lati, longi);    

                initMap(name,lati,longi);
                
                $('#title').html(dataJson.name);
                $('#ref-id').html(dataJson.ref_id);
                // $('.username').html(name);
                $('#card-modal').modal('show');


            });
        }

        triggerModel();  //**INITIATING THE MODAL


        // ************************************************************* SEARCH *****************************************************************


        var allBoards = $('.card');

        $('#keyWord').keyup(function() {
            var result = '';

            var key_word = $('#keyWord').val();
            key_word = key_word.toLowerCase();

            if (key_word) {
                allBoards.each(function(i, v) {
                    var name = $(v).find('.card-name').html();
                    name = name.toLowerCase();
                    console.log(name.search(key_word));

                    if (name.search(key_word) >= 0) {
                        //console.log(name.match(/key_word/g))
                        console.log(v);
                        // $(v).attr('class', 'newClass');

                        var cloned = $('<div>').append($(v).clone()).html();

                        result = result + cloned; //$(v).html();
                    }
                })

                if(result){

                	$("#myCard").html(result);	
                }else{
                	var para = document.createElement('p');
                	    para.setAttribute("id", "not-found");
                	    text = "Not Found"
                	    para.append(text);
                	$("#myCard").html(para);
                }
                
            
            } else {
                
                $("#myCard").html(allBoards);
            }

            triggerModel();
        });


        // ************************************************************* MAP function*****************************************************************

        function initMap(name,lati,longi) {
                
            var latlong = {lat:lati, lng:longi};
        //     var map1 = new google.maps.Map(document.getElementById('board-map'), {
        //         zoom: 18,
        //         center: latlong
        //     });  

        //     var marker = new google.maps.Marker({
        //  		position: latlong,
        //  		map: map1,
        //  		title:name
        // });

            var map2 = new google.maps.Map(document.getElementById('modal-map'), {
                zoom: 18,
                center: latlong,
            });   

             var marker = new google.maps.Marker({
		         position: latlong,
		         map: map2,
		         title:name
        });        
            
        	// var pan = function(map2){

        	// 	google.maps.event.addListener(map2, 'mouseover', function(){
        	// 		map2.setCenter(latlong);
        	// 		map2.setZoom(map2.zoom);
        	// 	})

        	// };

        	// pan(map2);
        	 $("#card-modal").on("shown.bs.modal", function () {  //fixes the loaidng issue of map in the modal

                  google.maps.event.trigger(map2, "resize"); 
                  map2.setCenter(latlong);
              });   
        }	

         

        //initMap();   //the not number error was for this , as this one was open and did not pass a parameter

    
    }) ///*end of document load*//
