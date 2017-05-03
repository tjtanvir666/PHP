(function() {

    var model = {
        catData: [],

        currentCat: null,

        getCatData: function() {
            return this.catData;
        },

        setCurrentCat: function(catObj) {
            this.currentCat = catObj;
        },

        getCurrentCat: function() {
            return this.currentCat;
        },

        setCurrentCatCounter: function(countVal) {
            this.getCurrentCat().count = countVal;
        },

        getCurrentCatCounter: function() {
            return this.getCurrentCat().count;
        },


        init: function() {

            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://localhost/catClicker/fetchData.php', false);
            responseType = 'json';
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var data = JSON.parse(this.response);
                    model.catData = data;
                    console.log(model.catData.length);
                    console.log(model.catData[0].name);
                }
            };
            xhr.onerror = function() {
                console.log('loading data error');
            };

            xhr.send();

        }
    };



    //-----------------the octopus
    var octopus = {
       
        getCatData: function() {
            return model.getCatData();
        },

        setCurrentCat: function(catObj) {
            model.setCurrentCat(catObj);
            catView.render();
        },

        getCurrentCat: function() {
            return model.getCurrentCat(); //returning the function from teh model that returns current cat data
        },

        setCurrentCatCounter: function() {
            var count = this.getCurrentCat().count;
            count++;
            model.setCurrentCatCounter(count);
        },

        getCurrentCatCounter: function() {
            return model.getCurrentCatCounter();
        },

        admin: function(formDiv) {
            if (formDiv.style.display !== 'none') {
                formDiv.style.display = 'none';
            } else {
                formDiv.style.display = 'block';
            }
            console.log("this is octopus admin view");
        },

        cancel: function(formDiv) {
            formDiv.style.display = 'none';
        },

        saveData: function(newName, newImg, newCount) {
            var catData = octopus.getCatData();
            for (var i = 0; i < catData.length; i++) {
                if (this.getCurrentCat().name === catData[i].name) {
                    model.catData[i].name = newName;
                }

                if (this.getCurrentCat().image === catData[i].image) {
                    model.catData[i].image = newImg;
                }

                if (this.getCurrentCat().count === catData[i].count) {
                    model.catData[i].count = newCount;
                }

            }

            catListView.render();
            catView.render();
         
            this.post();
        },

        post: function() {
        	console.log("post called");

            var str_obj = JSON.stringify(this.getCurrentCat());     // stringifying the obj because XHR only sends string
            //var data    = "json_string="+str_obj;                 //seding as key value pair to put straight into assoc array
            //console.log(data); 
            var url  = "http://localhost/catClicker/postData.php";
            var xhr = new XMLHttpRequest();
            
            xhr.open("POST", url , true);                         //only the php file name also works
            xhr.setRequestHeader("Content-type", "application/json");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var return_response = xhr.responseText;
                    console.log(return_response);
                }
            };

            xhr.onerror = function() { // onload called even on 404 etc so check the status
                console.log('loading data error');
            };

            xhr.send(str_obj);
        },

        init: function() {
            model.init();
            catListView.init();
            catView.init();
            adminView.init();
        }
    };



    //-----------------the views
    var catListView = {

        catList: document.getElementById('cat-list'),
        nameField: document.getElementById('name-input'),
        urlField: document.getElementById('image-url'),

        init: function() {
            var catData = octopus.getCatData();

            for (var i = 0; i < catData.length; i++) {

                //apending the list
                var node = document.createElement('li');
                var textNode = document.createTextNode(catData[i].name);
                node.appendChild(textNode);
                this.catList.appendChild(node);


                node.addEventListener('click', (function(catDataCopy) {
                    return function() {
                        octopus.setCurrentCat(catDataCopy);
                        catListView.nameField.value = catDataCopy.name;
                        catListView.urlField.value = catDataCopy.image;
                    };

                })(catData[i]));
            }
        },

        render: function() {
            catListView.catList.innerHTML = " ";
            var catData = octopus.getCatData();
            for (var i = 0; i < catData.length; i++) {

                //apending the list
                var node = document.createElement('li');
                var textNode = document.createTextNode(catData[i].name);
                node.appendChild(textNode);
                this.catList.appendChild(node);

                node.addEventListener('click', (function(catDataCopy) {
                    return function() {
                        octopus.setCurrentCat(catDataCopy);
                        catListView.nameField.value = catDataCopy.name;
                        catListView.urlField.value = catDataCopy.image;
                    };

                })(catData[i]));
            }
        }
    };



    var catView = {

        nameElem: document.getElementById('cat-name'),
        imageElem: document.getElementById('cat-image'),
        countElem: document.getElementById('counter'),
        countField: document.getElementById('click-counter'),


        init: function() {

            this.imageElem.addEventListener('click', function() {
                octopus.setCurrentCatCounter();
                catView.countElem.textContent = octopus.getCurrentCatCounter();
                catView.countField.value = octopus.getCurrentCatCounter();
            });

        },

        render: function() {
            this.nameElem.textContent = octopus.getCurrentCat().name;
            this.imageElem.src = octopus.getCurrentCat().image;
            this.countElem.textContent = octopus.getCurrentCatCounter();
            this.countField.value = octopus.getCurrentCatCounter();
        }

    };

    

    var adminView = {
        formDiv: document.getElementById('form-div'),
        adminBtn: document.getElementById('admin-btn'),
        cancelBtn: document.getElementById('cancel'),
        saveBtn: document.getElementById('save'),
        nameField: document.getElementById('name-input'),
        urlField: document.getElementById('image-url'),
        countField: document.getElementById('click-counter'),

        init: function() {
            this.adminBtn.addEventListener('click', function() {
                octopus.admin(adminView.formDiv);

            });

            this.cancelBtn.addEventListener('click', function() {
                octopus.cancel(adminView.formDiv);
            });

            this.saveBtn.addEventListener('click', function() {
                var newName = adminView.nameField.value;
                var newImg = adminView.urlField.value;
                var newCount = adminView.countField.value;
                octopus.saveData(newName, newImg, newCount);
            });
        }


    };

    octopus.init(); //initializing the octopus

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