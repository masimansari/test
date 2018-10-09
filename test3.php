<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>

</head>

<body style="margin:0px;">
	
    <div id="div1" style="border: 2px #1222D8 solid;"></div>
	<keygen name="security">
    <meter value="5" min="0" max="10" style="-webkit-transform: rotate(270deg);">2 out of 10</meter><br>
</body>

<script>

window.onload = function() {
	getSize();
}

window.onchange = function() {
	getSize();
}

function getSize()
{
	
	var div = document.getElementById("div1");
	//div.style.width = (document.documentElement.clientWidth - document.body.scrollWidth) + "px";
	//div.style.height = (document.documentElement.clientHeight - 4) + "px";
	
	
	var d1 = document.createElement("div");
	d1.textContent = "document.body.clientHeight: " + document.body.clientHeight; div.appendChild(d1);
	var d2 = document.createElement("div");
	d2.textContent = "document.body.offsetHeight: " + document.body.offsetHeight; div.appendChild(d2);
	var d3 = document.createElement("div");
	d3.textContent = "document.body.scrollHeight: " + document.body.scrollHeight; div.appendChild(d3);
	var d4 = document.createElement("div");
	d4.textContent = "document.documentElement.clientHeight: " + document.documentElement.clientHeight; div.appendChild(d4);
	var d5 = document.createElement("div");
	d5.textContent = "document.documentElement.offsetHeight: " + document.documentElement.offsetHeight; div.appendChild(d5);
	var d6 = document.createElement("div");
	d6.textContent = "document.documentElement.scrollHeight: " + document.documentElement.scrollHeight; div.appendChild(d6);
	
	//div.textContent = "Width: " + document.body.clientWidth +
	//				  "\n\tHeight: " + document.body.offsetHeight;
	
}

</script>

</html>