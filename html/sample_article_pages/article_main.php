
<div class="test">

	<div class="row">
		<nav class="col-sm-2">
			<ul class="nav  nav-stacked  w3-light-grey ">
				<li><a href="#padding_section_1" class="w3-hover-blue">Section 1</a></li>
				<li><a href="#padding_section_2" class="w3-hover-blue">Section 2</a></li>
				<li><a href="#padding_section_3" class="w3-hover-blue">Section 3</a></li>
				<li><a href="#padding_section_4" class="w3-hover-blue">Section 4</a></li>
				<li><a href="#padding_section_5" class="w3-hover-blue">Section 5</a></li>

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
					<br>
					<div class="w3-card-4 w3-padding-small w3-pale-red">
						You may encounter a error while doint git push for the first time
						saying: <br> <b>fatal: The current branch Development has no
							upstream branch. To push the current branch and set the remote as
							upstream, use git push --set-upstream origin Development</b><br>
						if you encounter this run: <br>
						<code>git push --set-upstream origin Development</code>
						<br>This is just one-time command, next time you want to push the
						changes you just need to run <b>git push</b>, as stated in above
						steps
					</div>
					<br>
				</div>
				<div id="padding_section_4"></div>
				<div id="section4">
					<h2>To Update your git repository</h2>
					<ol>
						<li>We always want to pull from master as it is the main branch.
							So switch to master branch by running the following command<br> <code>git
								checkout master</code>
						</li>
						<li>Now to pull the changes run the following command<br> <code>git
								pull</code><br>Now, all the changes are in the master branch
						</li>
						<li>Now, we want to merge the changes to a local branch (
							whichever you created using the above steps )
							<ol type="a">
								<li>Change the branch using the follwoing command<br> <code>git
										checkout [branch name]</code></li>
								<li>Run the following command to merge all the changes from
									master to the local branch<br> <code>git rebase master</code>
								</li>
							</ol>

						</li>

					</ol>
				</div>
				<div id="padding_section_5"></div>
				<div id="section5">
					<h2>Some usefull Git commands</h2>
					<ol>
						<li><code>git log</code><br>if you run this command it will show
							you all the recent commits to the git repository</li>
						<li><code>git diff [path to file]</code><br>if you run this
							command it will show you what are the changes you made to file.</li>
						<li><code>git status</code><br>This command shows the status of
							your repository:
							<ol type="a">
								<li>Run the command after making changes to a file. You would
									see all files in red colour to which you made the changes</li>
								<li>Now, run the command after adding all the files to commit,
									you will see the files in green color indicating they are ready
									for commit</li>
								<li>Now, commit the changes and run the command, you will notice
									that no files are shown and some message indicating everthing
									is up-to-date</li>
							</ol></li>

					</ol>

				</div>
			</div>
		</div>
	</div>