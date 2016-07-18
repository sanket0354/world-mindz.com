
<div class="test">

	<div class="row">
		<nav class="col-sm-2">
			<ul class="nav  nav-stacked  w3-light-grey ">
				<li><a href="#padding_section_1" class="w3-hover-blue">Section 1</a></li>
				<li><a href="#padding_section_2" class="w3-hover-blue">Section 2</a></li>
				<li><a href="#padding_section_3" class="w3-hover-blue">Section 3</a></li>
				<li><a href="#padding_section_4" class="w3-hover-blue">Section 4</a></li>

			</ul>
		</nav>

		<div class="col-sm-7">
			<div class="well w3-leftbar w3-border-grey w3-hover-border-blue">
				<div id="padding_section_1"></div>
				<div id="section1">
					<h2>Set-up Git</h2>
					<ol>
						<li>Download and install "git bash"</li>
						<li>Clone the git repository from the git bash terminal with the
							command: <br> <code> Git clone [repository url] </code><br> May
							ask you your username and password
						</li>
						<li>Now, change the folder from the git bash terminal to the
							folder that was created after running the command in step 2</li>
						<li>Run the following command from git bash terminal<br> <code>
								git config --global user.name "[first name] [last name]"<br>
							</code> <code>git config --global user.email [email id] </code></li>
						<li>To check user name and email id are set successfully run the
							following command in git bash <br> <code>git config –list</code><br>You
							should see the E-mail and Name that you entered in step 4
						</li>
						<li>Now, Run the following command in git bash<br> <code>git
								config --global core.autocrlf true</code><br> This commands
							handles the line endings of editors and keeps away from messing
							up with the changes everytime we will commit
						</li>

					</ol>
				</div>
				<div id="padding_section_2"></div>
				<div id="section2">
					<h2>Setting up git branches</h2>
					<ol>
						<li>To create a new branch, Run the following command from git
							bash after changing the directory to whereever your git project
							is <br> <code>git checkout -b [branch Name]</code> <br>
						</li>
						<li>To switch to already created branch, Run the following command
							from git bash after changing the directory to whereever your git
							project is<br> <code>git checkout [branch Name]</code> <br>
						</li>
					</ol>
				</div>
				<div id="padding_section_3"></div>
				<div id="section3">
					<h2>Commit and Push changes to Git repository</h2>
					<ol>
						<li>Firstly, You need to add all files which are changed, So run
							the following command <br> <code>git add .</code><br>
							<p>This command adds all the files to commit, but if you want to
								add specific file to commit then run the command below</p> <code>git
								add [path to file]</code><br>
						</li>
						<li>You need to run through a series of step to commit changes
							<ol type="a">
								<li>Run the following command <br> <code>git commit</code></li>
								<li>When you run the command, editor will open inside the git
									bash terminal itself. Press <b>"i"</b> to switch to insert
									mode, if you want to write any message/comment then write it as
									the first line of the file. Now press <b>"Esc"</b> and then <b>":wq"</b>,
									press <b>enter</b>. This will save the file and quit the
									editor. Now, your changes are commited
								</li>

								<li>To make the changes appear in git repository, run the
									following command <br> <code>git push</code><br>
								</li>

							</ol>

						</li>

					</ol>
				</div>
				<div id="padding_section_4"></div>
				<div id="section4">
					<h1>Section 4-1</h1>
					<p>Try to scroll this section and look at the navigation list while
						scrolling!</p>
					<p>Try to scroll this section and look at the navigation list while
						scrolling!</p>
					<p>Try to scroll this section and look at the navigation list while
						scrolling!</p>
				</div>
				<div id="section42">
					<h1>Section 4-2</h1>
					<p>Try to scroll this section and look at the navigation list while
						scrolling!</p>
					<p>Try to scroll this section and look at the navigation list while
						scrolling!</p>
					<p>Try to scroll this section and look at the navigation list while
						scrolling!</p>
					<p>Try to scroll this section and look at the navigation list while
						scrolling!</p>
				</div>
			</div>
		</div>
	</div>
</div>


