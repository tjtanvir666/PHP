(function(){

 var counter = 0;
 document.getElementById('name1').innerHTML =  "first cat";
 document.getElementById('name2').innerHTML =  "second cat";
 
 var elem = document.getElementById('clicker');
 var elem2 = document.getElementById('clicker2');
 
 elem.addEventListener('click', function(){
 	console.log(counter);
 	document.getElementById('para').innerHTML =  counter++;
 }, false);

  elem2.addEventListener('click', function(){
 	console.log(counter);
 	document.getElementById('para2').innerHTML =  counter++;
 }, false);



})();