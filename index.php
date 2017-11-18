<!doctype html>
<html lang="en">
  <head>
    <title>HTTPLib</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">HTTP Lib</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="post/view.php">Data</a>
		  </li>
		  </li>
		</ul>
	  </div>
	</nav>
	<a href="https://github.com/sreesdas/httplib"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
	<div class="jumbotron">
	  <h1 class="display-3">Welcome, WebDevs!</h1>
	  <p class="lead"> This is a free web-service portal to test the GET/POST requests in your web application </p>
	  <hr class="my-4">
	  <p> You'll find many GET request endpoints here & your POST data is saved in the server permanantly. </p>
	  <p class="lead">
		<a class="btn btn-primary btn-lg" href="#container" role="button">Let's Try This </a>
	  </p>
	</div>
	<div class="container" id="container">
		<div class="row">
			<div class="col-sm">
			  <div class="card">
				  <div class="card-header">
					GET
				  </div>
				  <ul class="list-group list-group-flush">
					<li class="list-group-item"><a href="get/ip.php">/ip</a> &nbsp Returns the IP Address</li>
					<li class="list-group-item"><a href="get/headers.php">/headers</a> &nbsp Returns the Headers</li>
					<li class="list-group-item"><a href="get/get.php">/get</a> &nbsp Return GET Data</li>
					<li class="list-group-item"><a href="get/set_cookie.php">/set_cookies</a> &nbsp Set Cookies</li>
					<li class="list-group-item"><a href="get/get_cookie.php">/get_cookies</a> &nbsp Get the current Cookies</li>
					<li class="list-group-item"><a href="get/json.php">/json</a>&nbsp Returns Random JSON Data</li>
					<li class="list-group-item"><a href="get/user-agent.php">/user-agent</a> &nbsp Returns the User Agent</li>
					<li class="list-group-item"><a href="get/xml.php">/xml</a> &nbsp Returns Data in XML</li>
					<li class="list-group-item"><a href="get/html.php">/html</a> &nbsp Renders a HTML Page</li>
					<li class="list-group-item"><a href="get/image.php">/image</a> &nbsp Returns an Image</li>
				  </ul>
				</div>
			</div>
			<div class="col-sm">
			  <div class="col-sm">
				  <div class="card">
					  <div class="card-header">
						POST
					  </div>
					  <ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="post/post.php">/post</a> &nbsp Saves the POST Data in a file</li>
						<li class="list-group-item"><a href="post/view.php">/view</a> &nbsp View the saved POST Data</li>
						<li class="list-group-item"><a href="post/logger.php">/logger</a> &nbsp Logs a stream of data </li>

					  </ul>
					</div>
			  </div>
			</div>
			<div class="col-sm">
                          <div class="col-sm">
                                  <div class="card">
                                          <div class="card-header">
                                                API
                                          </div>
                                          <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#">/api</a> &nbsp Coming Soon..</li>
                                          </ul>
                                        </div>
                          </div>
                        </div>

		</div>
		
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
