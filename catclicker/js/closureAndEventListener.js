(function(){
	

    //clear the screen 
	document.body.innerHTML = '';
	document.body.style.background = "white";
	
	var nums = [1,2,3];

	//loop over the numebrs in our array
	for (var i = 0; i < nums.length; i++) {
		
		var num = nums[i];

		//we're creating a DOM element for the number
		var elem = document.createElement('div');
		elem.textContent = num; //try num-1

		
    //* Method-1
		elem.addEventListener('click', numValue(num)); 
		function numValue(numCopy) {
			return function() {   //event lsitener always needs a function so returning avalue to it wont make it work we need a funtion 
				alert(numCopy);   //u can try return numCopy instead of return fucntion(){alert(numcopy)}
			}
		}
		
		


    //* Method-1
		//....and when we click , alert the value of 'num'
		// elem.addEventListener('click', (function(numCoppy){
		// 	return function(){
		// 		alert(numCoppy);
		// 	}
		// })(num));
	
		//fianlly lets add this element to the document
		document.body.appendChild(elem);


	}

    

})();