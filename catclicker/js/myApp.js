(function() {

var model = {
	catData: [
	    {
	        name: "cat1",
	        image: "images/cat.jpg",
	        count: 0
	    },
	    {
	        name: "cat2",
	        image: "images/cat2.jpg",
	        count: 0
	    },
	    {
	        name: "cat3",
	        image: "images/cat3.jpg",
	        count: 0
	    },
	    {
	        name: "cat4",
	        image: "images/cat4.jpg",
	        count: 0
	    },
	    {
	        name: "cat5",
	        image: "images/cat5.jpg",
	        count: 0
	    }
    ],

    currentCat: null,

    getCatData: function() {
    	return this.catData;
    },

    setCurrentCat: function(catObj) {
    	this.currentCat = catObj;
    },

    getCurrentCat: function() { 
    	return this.currentCat;                    //'this' is like saying that this.currentCat is same as model.currentCat . We use it to call a object literal inside the same object
    },

    setCurrentCatCounter: function(countVal){
    	this.getCurrentCat().count = countVal;
    }, 

    getCurrentCatCounter: function(){
    	return this.getCurrentCat().count;
    }                                          //remember : this is a child to its immediate parent. so it will not work for its grandParent 

    
};

var octopus = {
	getCatData: function() {
		return model.getCatData();
	},

	setCurrentCat: function(catObj) {
		model.setCurrentCat(catObj);
	},

	getCurrentCat: function() {
		return model.getCurrentCat();           //returning the function from teh model that returns current cat data
	},

	setCurrentCatCounter: function(){
		var count = this.getCurrentCat().count;
		count ++ ;
		model.setCurrentCatCounter(count);  
	},

	getCurrentCatCounter:function(){
		return model.getCurrentCatCounter();
	},

	init: function() {
		//this.setCurrentCat(0); //this is to set the current cat to the first place
		catListView.init();
		catView.init();
	}
};

var catListView = {
	displayCatList: function() {
		
		var catData = octopus.getCatData();
		
		for(var i=0; i<catData.length; i++ ){

			//apending the list
			var node = document.createElement('li');
			var textNode = document.createTextNode(catData[i].name);
			node.appendChild(textNode);
			document.getElementById('cat-list').appendChild(node);
			var countElem = document.getElementById('counter');

			node.addEventListener('click', (function(catDataCopy){
				return function(){
					octopus.setCurrentCat(catDataCopy); //we are setting the ith object to the octopus and octopus is setting it to the model, because we cannot have the view talkin to the model. And our main currentCat variable is defiend in the model. 
					catView.render();
					countElem.textContent = catDataCopy.count;	
				};

			})(catData[i]));
	  }
	 //catView.catCounter();  //calling the cat counter
	},

	init: function() {
		this.displayCatList();
	}
};

var catView = {	
	
	catName:function(){
		var elem = document.getElementById('cat-name');
		elem.textContent = octopus.getCurrentCat().name; 
	},

	catImage: function(){
		var elem = document.getElementById("cat-image");
		elem.src = octopus.getCurrentCat().image;
		var countElem = document.getElementById('counter');	
		countElem.textContent = octopus.getCurrentCatCounter();	
	},

	init: function(){
        var elem = document.getElementById("cat-image");
        elem.addEventListener('click',function(){
			var countElem = document.getElementById('counter');
			//alert('this is counter');
			octopus.setCurrentCatCounter();
			countElem.textContent = octopus.getCurrentCatCounter();	
			console.log(octopus.getCurrentCatCounter())	;
		});
	},

	render:function(){
		this.catName();
		this.catImage();	
	}

};

octopus.init();   //initializing the octopus

})();

// -----Notes :-------
//the whole program should be step by step and then test it and go to next functionality
//octopus: init in octopus is for calling the inits of the model and the view
//model: model's init is to fetch data and all if in a network or so
//view: views's init is to set up things like event listener and all to the elemnts, that is the set up of view user interaction
        //view's render is to display the views and stuff
//no one should talk to no one except the octopus , not even one view can call another view.    
//make sure the init is always called at the beginning else the program is not running      