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
    },                                              //remember : this is a child to its immediate parent. so it will not work for its grandParent 

    setCurrentCatCounter: function(countVal){
    	this.getCurrentCat().count = countVal;
    }, 

    getCurrentCatCounter: function(){
    	return this.getCurrentCat().count;
    }                                         

    
};

var octopus = {
	getCatData: function() {
		return model.getCatData();
	},

	setCurrentCat: function(catObj) {
		model.setCurrentCat(catObj);
		catView.render();              //render is called right after the current cat set-up so tha tone view does not have to talk to another
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
		catListView.init();
		catView.init();
	}
};

var catListView = {
	
	catList   : document.getElementById('cat-list'),
	init      : function() {
					var catData = octopus.getCatData();
					
					for(var i=0; i<catData.length; i++ ){

						//apending the list
						var node = document.createElement('li');
						var textNode = document.createTextNode(catData[i].name);
						node.appendChild(textNode);
						this.catList.appendChild(node);
						
						node.addEventListener('click', (function(catDataCopy){
							return function(){
								octopus.setCurrentCat(catDataCopy); //we are setting the ith object to the octopus and octopus is setting it to the model, because we cannot have the view talkin to the model. And our main currentCat variable is defiend in the model. 
								
							};

						})(catData[i]));
				  }
	        }  

};

var catView = {	
	
	nameElem  : document.getElementById('cat-name'),
	imageElem : document.getElementById('cat-image'),
	countElem : document.getElementById('counter'),
    init      : function(){
			        
			        this.imageElem.addEventListener('click',function(){
						 octopus.setCurrentCatCounter();
						 catView.countElem.textContent = octopus.getCurrentCatCounter();	//tis does not work here
						
					});
	},

	render   :  function(){
	            this.nameElem.textContent = octopus.getCurrentCat().name; 
				this.imageElem.src = octopus.getCurrentCat().image;
				this.countElem.textContent = octopus.getCurrentCatCounter();	
	}

};

octopus.init();   //initializing the octopus

})();

// -----Notes :-------
//snake case for html camel case for javascript
//the whole program should be step by step and then test it and go to next functionality
//octopus: init in octopus is for calling the inits of the model and the view
//model: model's init is to fetch data and all if in a network or so
//view: views's init is to set up things like event listener and all to the elemnts, that is the set up of view user interaction
        //view's render is to display the views and stuff
//no one should talk to no one except the octopus , not even one view can call another view.    
//make sure the init is always called at the beginning else the program is not running   