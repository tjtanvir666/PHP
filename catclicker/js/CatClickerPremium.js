(function(){
		
	var cats = [
	                 {
	                 	name:"cat1",
	                 	image:"images/cat.jpg",
	                 	count:0
	                 },
	                 
	                 {
	                 	name:"cat2",
	                 	image:"images/cat2.jpg",
	                 	count:0
	                 },
	                 
	                 {
	                 	name:"cat3",
	                 	image:"images/cat3.jpg",
	                 	count:0
	                 },
	                 
	                 {
	                 	name:"cat4",
	                 	image:"images/cat4.jpg",
	                 	count:0
	                 },
	                 
	                 {
	                 	name:"cat5",
	                 	image:"images/cat5.jpg",
	                 	count:0
	                 }
                ]
	 
	var currentCat = null;                      
    var catPic = document.getElementById('cat-image');
    catPic.addEventListener('click',function(){
     	currentCat.count++;
     	var catCount = document.getElementById('cat-count');
		catCount.textContent = currentCat.count;
     });

	//loop over the numebrs in our array
	for (var i = 0; i < cats.length; i++) {
		
		var cat = cats[i];
		
		//we're creating a DOM element for the number
		var elem = document.createElement('div');
		elem.textContent = cat.name; //try num-1

		
    //* Method-1
		// elem.addEventListener('click', numValue(cat));
		// function numValue(catCopy) {
		// 	return function() {   
				   
		// 		currentCat = catCopy; //after clicking the name, the currentCat at line 35 is initialized to the cat object
		// 		var catImage = document.getElementById('cat-image');
		// 		catImage.src = catCopy.image;
		// 		var catCount = document.getElementById('cat-count');
		// 		catCount.textContent = catCopy.count;

		// 	};
		// }

		elem.addEventListener('click',(function(catCopy){

			return function() {   
				   
				currentCat   = catCopy; //after clicking the name, the currentCat at line 35 is initialized to the cat object
				var catImage = document.getElementById('cat-image');
				catImage.src = catCopy.image;
				var catCount = document.getElementById('cat-count');
				catCount.textContent = catCopy.count;

			};


		})(cat));
		
		 


    
		document.body.appendChild(elem);


	}

    

})();