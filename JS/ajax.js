


// read from text file
(function(){

var link = document.getElementsByTagName("a")[0];
link.onclick = function(){

	var ajaxrequest = new XMLHttpRequest();
// 0 - uninitialized 1 - loading 2 - loaded 3 - interactive 4 - complete

ajaxrequest.onreadystatechange  = function(){

	if ((ajaxrequest.readyState == 4) && (ajaxrequest.status == 200 || ajaxrequest.status == 304)) {
		var body = document.getElementsByTagName("body")[0];
		var p = document.createElement("p");
		var pText = document.createTextNode(ajaxrequest.responseText);
		p.appendChild(pText);
		body.appendChild(p);

// 		body.removeChild(link);

	}
};
// open request

ajaxrequest.open("GET", "files/ajax.txt", true);

// send request and get input
ajaxrequest.send(null);


return false;
};

})();


// read from html file

(function(){

var link = document.getElementsByTagName("a")[1];
link.onclick = function(){

	var ajaxrequest = new XMLHttpRequest();

ajaxrequest.onreadystatechange  = function(){

	if ((ajaxrequest.readyState == 4) && (ajaxrequest.status == 200 || ajaxrequest.status == 304)) {
		var body = document.getElementsByTagName("body")[0];
		var d = document.createElement("div");
		body.appendChild(d);

		var div = document.getElementsByTagName("div")[0];
		div.innerHTML = ajaxrequest.responseText;



// 		body.removeChild(link);

	}
};
// open request

ajaxrequest.open("GET", "files/ajax.html", true);

// send request and get input
ajaxrequest.send(null);


return false;
};

})();

// AJAX XML
(function(){

var link = document.getElementsByTagName("a")[2];
link.onclick = function(){

	var ajaxrequest = new XMLHttpRequest();

ajaxrequest.onreadystatechange  = function(){

	if ((ajaxrequest.readyState == 4) && (ajaxrequest.status == 200 || ajaxrequest.status == 304)) {
		var body = document.getElementsByTagName("body")[0];
		var heading  = ajaxrequest.responseXML.getElementsByTagName("zagalovka")[0].firstChild.nodeValue;
		var h2 = document.createElement("h2");
		var h2Text = document.createTextNode(heading);
		h2.appendChild(h2Text);
		
		var list = document.createElement("ul");
		var items = ajaxrequest.responseXML.getElementsByTagName("tochki")[0];
		items = items.getElementsByTagName("tochka");

// creating list from XML element "tochka"
		// alert(items.length);
		for (var i=0; i<items.length; i++){
			var item = items[i].firstChild.nodeValue;
			var li = document.createElement("li");
			var liText =document.createTextNode(item);
			li.appendChild(liText);
			list.appendChild(li);
		}

		body.appendChild(h2);
		body.appendChild(list);
// 		body.removeChild(link);

	}
};
// open request

ajaxrequest.open("GET", "files/ajax.xml", true);

// send request and get input
ajaxrequest.send(null);


return false;
};

})();
