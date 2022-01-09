<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ajax</title>
	<link rel="stylesheet" href="bootstrap.css">
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
	<h2 class="text-center bg-warning" style="height:50px">What is Ajax?</h2>
	<div class="container">
	<h3>Introduction</h3>
	AJAX = Asynchronous JavaScript And XML.<br>
	AJAX is not a programming language.<br>
	AJAX just uses a combination of:<br>
	A browser built-in XMLHttpRequest object (to request data from a web server)<br>JavaScript and HTML DOM (to display or use the data)<br><br>
	AJAX allows web pages to be updated asynchronously by exchanging data with a web server behind the scenes.<br>This means that it is possible to update parts of a web page, without reloading the whole page.<br><br>

	<h4>Methods</h4>
	<ul>
		<li>The load()</li>
		The load() method loads data from a server and puts the returned data into the selected element.<br>
		Syntax: $(selector).load(URL,data,callback);<br>
		Example:<br>
		<code>
		$(document).ready(function(){<br>
					$('#btnclick').click(function(){<br>
						$('#loaddata').load('load.html');<br>
					})<br>
				});<br>
		</code>
		<kbd>Result:</kbd>
		<h3 id="loaddata">This is going to be change without the page load.</h3>
		<button class="btn btn-success" id="btnclick">Click on it</button>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#btnclick').click(function(){
					$('#loaddata').load('load.html');
				});
			});
		</script><br>
		<li>get()</li>
		The get() method request data from the server with an HTTP GET request.<br>
		Syntax: $.get(URL, callback);<br>
		The optional callback parameter is the name of a function to be executed if the request cucceds.<br>
		Example:<br>
		<code>
			$(document).ready(function(){<br>
				$('.btnclick').click(function(){<br>
					$.get('load.html',function(data,status){<br>
						$('#changerid').html(data);<br>
					});<br>
				});<br>
			});<br>
		</code>
		<kbd>Result:</kbd>
		<h3 id="changerid">When you click on the button then new data will come by get method</h3>
		<button class="btn btn-success btnclick">Click here</button>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.btnclick').click(function(){
					$.get('load.html',function(data,status){
						$('#changerid').html(data);
					});
				});
			});
		</script>
		<li>post()</li>
		The post() method request data from the server using an HTTP POST request.<br>
		Syntax: $.post(URL,data,callback);<br>
		The require URL parameter specifies the URL you wish to request.<br>
		The optional data perameter specifies some data to send along with the request.<br>
		The optional callback parameter is the name of a function to be executed if the request succeeds.<br>
		Example:<br>
		<code>
			$(document).ready(function(){<br>
				$('.btnclick1').click(function(){<br>
					$.post('post.php',{<br>
						name: 'Rabi Kr Yadav',<br>
						address : 'Janakpur'<br>
					}, function(data,status){<br>
						$('#changerid1').html(data);<br>
					});<br>
				});<br>
			});<br>
		</code>
		<kbd>Result:</kbd>
		<h3 id="changerid1">When you click on the button then new data will come by post method</h3>
		<button class="btn btn-success btnclick1">Click here</button>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.btnclick1').click(function(){

					$.post('post.php',{

						name: 'Rabi Kr Yadav',
						address : 'Janakpur'

					}, function(data,status){

						$('#changerid1').html(data);
					});
					
				});
			});
		</script>
	</ul>
	<h4>XMLHttpRequest</h4>
	The XMLHttpRequest object is used to exchange data with a server.<br>
	To Send a request to a server, we use the open() & send() methods of the XMLHttpResquest object.<br><br>
	open(method, url, ascyn) ------Specifies the type of request<br>
	Where,<br>method: The type of request: GET or POST<br>
	url: the server (file) location<br>
	async: true(asynchronous)=1 or false(synchonous)=0<br><br>
	send()---Send the request to the server(used for GET)<br><br>AJAX - Server Response<br>The readyState property holds the status of XMLHttpRequest.<br>
	The onreadystatechange property defines a function to be executed when the readyState change.<br>
	The status property and the statusText property holds the status of the XMLHttpRequest object.<br>
	Example:<br>
	<code>
		
	</code>
	<kbd>Result:</kbd>
	<h3 id="loaddata1">This Text will be change without the page load When You.</h3>
	<button class="btn btn-success" onclick="mufun()">Click on it</button>
	<script type="text/javascript">
		function mufun(){
			var req = new XMLHttpRequest(); // this is a object creating
			req.open('GET','load.html',true);
			req.send();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200){
						document.getElementById('loaddata1').innerHTML = req.responseText;
				}
			}
		}
	</script><br><hr><br>
	<h1 class="text-center bg-primary" style="height:60px;">One of the Best Example Dropdown List</h1>
	<hr><br><br>
		<div id="changerid2">
		<h3 class="font-weight-bold">just Click on the button</h3>
		<button class="btn btn-success btnclick2">Click here</button>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.btnclick2').click(function(){

					$.post('dropdown.php',{},
						function(data,status){
						$('#changerid2').html(data);
					});
				});
			});
		</script>
		<br><br>
	</div><hr><br><h1 class="text-center bg-success font-weight-bold">Thanks</h1>
</body>
</html>