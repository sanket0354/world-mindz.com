<!-- Creates the navigation bar and fixes it so that it moves with scrolling of the page-->
<nav class="navbar navbar-inverse w3-top">

	<div class="container-fluid">

		<div class="navbar-header">

			<!-- creates a toggle-button for navigation bar, when the size of
                 screen is shrinked for mobile devices -->
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#myNavbar">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="#">WebSiteName</a>

		</div>

		<!-- makes the navigation bar to be collapsable for mobile devices -->
		<div class="collapse navbar-collapse" id="myNavbar">

			<ul class="nav navbar-nav">

				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Contacts</a></li>
				<li><a href="#">About</a></li>

				<li><a href="javascript:void(0)" onclick="w3_open()">Tutorials <i
						class="fa fa-caret-down"></i>
				</a></li>

			</ul>

			<!-- Creates search button in the navigation bar -->
			<!-- Aligns the search button to right in navigation bar -->
			<ul class="nav navbar-nav navbar-right">
				<li>

					<form class="navbar-form" role="search"
						onsubmit="return searchDatabase()">

						<div class="input-group">

							<input type="text" class="form-control" placeholder="Search"
								name="srch-term" id="srch-term">

							<div class="input-group-btn">

								<!-- Search button icon for search in navigation bar -->
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>

							</div>

						</div>

					</form>

				</li>

			</ul>

		</div>

	</div>

</nav>

<!-- creates the menu for dropdowns in the header -->
<nav
	class="w3-dropnav w3-card-2 w3-light-grey w3-hover-white w3-hover-border-blue w3-border"
	style="display: none" id="headerDropNav" data-spy="affix"
	data-offset-top="00">

	<div class="w3-container">

		<span onclick="w3_close()" class="w3-closebtn w3-xlarge"
			title="Close Menu">&times;</span>

	</div>

	<div class="w3-row-padding w3-padding-bottom">

		<div class="w3-third ">
			<h3>Git</h3>
			<a href="http://mind-worldz.com/main/html/git_basics/article.php">Git
				basics</a>
		</div>

		<div class="w3-third">
			<h3>JavaScript</h3>
			<a href="#">Learn JavaScript</a> <a href="#">Learn jQuery</a> <a
				href="#">Learn AppML</a>
		</div>

		<div class="w3-third">
			<h3>Graphics</h3>
			<a href="#">Learn Canvas</a> <a href="#">Learn SVG</a>
		</div>

	</div>

</nav>



<!-- Script to control how dropdown works -->
<script>
		var x = document.getElementById("headerDropNav");
		function w3_open() {
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}
		function w3_close() {
			x.className = x.className.replace(" w3-show", "");
		}
</script>
