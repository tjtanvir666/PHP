(function() {

    var clickCounts = 0;
    //var catGroup = document.getElementById('nav');
    var catList = document.getElementById('bigCat').getElementsByTagName('li');
    var catName = document.getElementById('name');
    var picture = document.getElementById('image');
    var counter = document.getElementById('counter');

    var petName = ["Picku", "Chiku", "Micku", "Biku", "Dicku"];
    var chobi = ["images/cat.jpg", "images/cat2.jpg", "images/cat3.jpg", "images/cat4.jpg", "images/cat5.jpg"];
    //var count  = [0,0,0,0,0];
    //console.log("added variables");

    for (var i = 0; i < catList.length; i++) {
        // console.log("looping the catlist..")

        var naam = petName[i];
        var chitro = chobi[i];
        var gonona = 0; //I made it logically 1 but try with 0
        
        

        //#-- method 1
        catList[i].addEventListener('click', showDetails(naam, chitro, gonona));

        function showDetails(naamCoppy, chitroCoppy, gononaCoppy) {
            var action = function() {
                catName.innerHTML = naamCoppy;
                picture.src = chitroCoppy;
                //var count=0; //this only this restarts the count from 0.
                //counter.value = gononaCoppy++;  //counts on clicking the li. This does not have the incrementing proglem
                picture.addEventListener('click', function() { //counts on clicking the function
                    counter.value = gononaCoppy++;
                 })

            };

            return action;
        }
       


        //#-- method 1
        //      catList[i].addEventListener('click', (function(naamCoppy,chitroCoppy,gononaCoppy){

        // 	var action = function(){
        //          catName.innerHTML = naamCoppy;
        //          picture.src = chitroCoppy;
        // // picture.src = " picture/cat.jpg";
        // // counter.inneHTML = clickCounts++;
        //          //counter.value = gononaCoppy++;  //counts on clicking the li
        //           picture.addEventListener('click',function(){ //counts on clicking the function
        //           counter.value = gononaCoppy++;
        //           })

        //  		};

        //      return action;

        // })(naam,chitro,gonona));

    }


})();























// (function(){

// 	var clickCounts = 0;
// 	//var catGroup = document.getElementById('nav');
// 	var catList = document.getElementById('bigCat').getElementsByTagName('li');
// 	var catName = document.getElementById('name');
// 	var picture = document.getElementById('image');
//     var counter = document.getElementById('counter');

// 	console.log("added variables");

// 	for(var i=0 ; i<catList.length ; i++){
// 		// console.log("looping the catlist..")
// 		catList[i].addEventListener('click', showDetails());
// 		console.log("catlist.." + catList[i].innerHTML);

// 	}

// 	function showDetails(){
// 		//catList.inneHTML = this.innerHTML;
// 		console.log("catlist.." + catList[i].innerHTML);

// 		if(this.inneHTML == "Cat-1"){
// 			catName.innerHTML = "Picku";
// 			picture.src = " picture/cat.jpg";
// 			counter.inneHTML = clickCounts++;
// 		}

// 		else if(this.inneHTML == "Cat-2"){
// 			catName.innerHTML = "Chicku";
// 			picture.src = " picture/cat2.jpg";
// 			counter.inneHTML = clickCounts++;
// 		}

// 		else if(this.inneHTML == "Cat-3"){
// 			catName.innerHTML = "Micku";
// 			picture.src = " picture/cat3.jpg";
// 			counter.inneHTML = clickCounts++;
// 		}

// 		else if(this.inneHTML == "Cat-4"){
// 			catName.innerHTML = "Bicku";
// 			picture.src = " picture/cat4.jpg";
// 			counter.inneHTML = clickCounts++;
// 		}

// 		else if(this.inneHTML == "Cat-5"){
// 			catName.innerHTML = "Dicku";
// 			picture.src = " picture/cat5.jpg";
// 			counter.inneHTML = clickCounts++;
// 		}

// 	}


// })();
