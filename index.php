
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>Web Dev Project</title>
	<link rel = "icon" href = 
"acp.png" 
        type = "image/x-icon">
</head>


<body>
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "endsem";

$id = '';
$uname = $_POST['uname']; 
    $email = $_POST['email']; 
    $mno = $_POST['mno']; 
    $mssg = $_POST['msg']; 
	$date_created = date("Y-m-d");

// if (isset($_POST['submit'])){ 
    
//     $uname = $_POST['uname']; 
//     $email = $_POST['email']; 
//     $mno = $_POST['mno']; 
//     $mssg = $_POST['msg']; 
// 	$date_created = time();
	
	

    
// }

$link = mysqli_connect("127.168.0.0:3307", "root", "", "endsem");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO `queries` (`id`, `username`, `email`, `mob_no`, `query`, `query_date`) VALUES ('$id', '$uname', '$email', '$mno', '$mssg', '$date_created' )";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



	
?>
	<!--Header(start)-->
	<table id="header" border="0" width="100%"
		cellpadding="0" cellspacing="0" bgcolor="#4CAF50">
		<tr>
			<td>
				<table border="0" cellpadding="15"
					cellspacing="0" width="90%" align="center">
					<tr>
						<td>
							

						</td>

						<td>
						<img src="acp.png" style="width:70px;height:70px;></img>
							<font face="Comic sans MS" size="4">
								<b></b>
							</font>
						</td>

						<td width="15%">
							
						</td>

						<td>
							<a href="#home" style="text-decoration:none">
								<font face="Verdana" size="5" color=black>
									Home
								</font>
							</a>
						</td>

						<td>
							|
						</td>

						<td>
							<a href="#about" style="text-decoration:none">
								<font face="Verdana" size="5" color=black>
									About
								</font>
							</a>
						</td>

						<td>
							|
						</td>

						<td>
							<a href="#projects" style="text-decoration:none">
								<font face="Verdana" size="5" color=black>
									Projects
								</font>
							</a>
						</td>

						<td>
							|
						</td>

						<td>
							<a href="#achievements" style="text-decoration:none">
								<font face="Verdana" size="5" color=black>
									Achievements
								</font>
							</a>
						</td>

						<td>
							|
						</td>

						<td>
							<a href="#contact" style="text-decoration:none">
								<font face="Verdana" size="5" color=black>
									Contact
								</font>
							</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!--Header(end)-->

	<!--Home(start)-->
	<table id="home" border="1" width="100%"
		cellpadding="20" cellspacing="0" bgcolor="black">
		<tr>
			<td>
				<table border="0" cellpadding="15"
					cellspacing="0" width="90%" align="center">
					<tr>
						<td align="center" valign="middle">
							<h3>
								<font face="Times New Roman"
									size="6" color="#ffffff">
									Hey Folks!
								</font>
							</h3>

							<h2>
								<font face="Verdana" size="6"
									color="#4CAF50">
									<!-- Freelance Programmer -->
								</font>
							</h2>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!--Home(end)-->


	<!--About(start)-->
	<table id="about" border="0" width="100%"
		cellpadding="0" cellspacing="0" bgcolor="black">
		<tr>
			<td>
				<table border="0" cellpadding="15"
					cellspacing="0" width="80%" align="center">
					<tr>
						<td height="180" align="center"
							valign="middle" colspan="2">
							<font face="Verdana" size="7"
								color="#4CAF50">
								About Me
							</font>
							<hr color="#4CAF50" width="90">
						</td>
					</tr>

					<tr>
					<td width="40%">
							<center><img src="mydp.jpg" style="width:225px;height:190px;></img>
						</center></td>
					
						<td width="60%">
							<br><br><font face="Verdana" size="4"
								color="white">
								Thanks for your interest, here
								is a quick story of me and this
								website.
								<hr color="black">
								Anupam Charan Pahari is currently a student of NIT Agartala
								and persuing his Masters in Computer Applications there. He does
								does his Bachelors in Computer Application from ICFAI University.
								Apart from academics he is currently doing his internship in a
								USA based firm GAO Tek Inc. for the role of Software Development
								Intern. In the past he also did two other internships first is
								in Jobbing.in which is a Ranchi based start-up and later in a
								Singapore based foundation known as The Sparks Foundation.
								<hr color="black">

								I do my work mainly in C-Language,
								C++ and PHP. C++ and Data Structure
								& Algorithm are my stronger section.
								Besides these I know Web Development,
								LINUX and database as well.
								<hr color="black">

								This website is basically one of my
								Web Development project which is
								built using HTML & PHP only.
								Here one can also find ideas for
								projects in different languages.

								Thanks again for reading this,
								because of people like you, it
								exists and prospers!
								<hr color="black">
								Cheers,
								<br>
								<b>Anupam Charan Pahari.</b>
							</font></br>
						</td>
					</tr>
				</table>
				<hr color="black">
				<hr color="black">
				<hr color="black">
			</td>
		</tr>
	</table>
	<!--About(end)-->


	<!--Projects(start)-->
	<table id="projects" border="0" width="100%"
		cellpadding="0" cellspacing="0" bgcolor="#c2c0c3">
		<tr>
			<td>
				<table border="0" cellpadding="15"
					cellspacing="0" width="80%" align="center">
					<tr>
						<td height="180" align="center"
							valign="middle" colspan="2">
							<font face="Verdana" size="7"
								color="black">
								Projects
							</font>
							<hr color="black" width="90">
						</td>
					</tr>

					<tr>
						<td height="10">
							<font face="Times New Roman"
								size="5" color="black">
								<ul>
									<li>
										Marks Calculator
										<a href="#" style="text-decoration:none">
											 ➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Calculator
										<a href="#" style="text-decoration:none"
											color="#c2c0c3">
											 ➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Calendar
										<a href="#" style="text-decoration:none">
											 ➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										ChatBot
										<a href="#" style="text-decoration:none">
											 ➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Contact Saver
										<a href="#" style="text-decoration:none">
											 ➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										IT Quiz
										<a href="#" style="text-decoration:none">
											 ➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Emplyoyee Record System
										<a href="#" style="text-decoration:none">
											 ➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Guess the Number-Game
										<a href="#" style="text-decoration:none">
											 ➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Random Password Generator
										<a href="#" style="text-decoration:none">
											➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Stone Paper Scissor
										<a href="#" style="text-decoration:none">
											➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Tic Tac Toe
										<a href="#" style="text-decoration:none">
											➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Tic Tac Toe(GUI)
										<a href="#" style="text-decoration:none">
											➲
										</a>
									</li>

									<li>
										<hr color="#c2c0c3">
										ToDo App
										<a href="#" style="text-decoration:none">
											➲ </a>
									</li>

									<li>
										<hr color="#c2c0c3">
										Tour & Travel Plaform
										<a href="#" style=
											"text-decoration:none"> ➲
										</a>
									</li>
								</ul>
								<hr color="#c2c0c3">
								<hr color="#c2c0c3">
								<hr color="#c2c0c3">
								<hr color="#c2c0c3">
							</font>
						</td>

						<td width="45%">
							<img src="prj1.jpg" style="width:350px;height:225px; alt="Project">
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!--Projects(end)-->

	<!--Achievement(start)-->
	<table id="achievements" border="0" width="100%"
		cellpadding="0" cellspacing="0" bgcolor="black">
		<tr>
			<td>
				<table border="0" cellpadding="15"
					cellspacing="0" width="80%" align="center">
					<tr>
						<td height="180" align="center" valign="middle">
							<font face="Verdana" size="7" color="#4CAF50">
								Achievements
								<hr color="#4CAF50" width="100">
							</font>
						</td>
					</tr>

					<tr>
						<td>
							<font face="Verdana" size="4" color="white">
								<ul>
									<li>
										<b>Intern at GAO Tek Inc.</b>
										<ul>
											<li>
												December,2021 - Present.
											</li>
											<li>
												Work with the GAO Tek's RFID
												Device Team for GUI and QA of Devices.
											</li>
										</ul>
									</li>

									<li>
										<hr color="black">
										<hr color="black">
										<hr color="black">
										<b>The Sparks Foundation Singapore.</b>
										<ul>
											<li>
												November,2021 - Present.
											</li>
											<li>
												I am doing my Internship here for
												the role of Data Science & Business Analyst Intern.
											</li>
										</ul>
									</li>

									<li>
										<hr color="black">
										<hr color="black">
										<hr color="black">
										<b>Jobbing.In</b>
										<ul>
											<li>
												October,2020.
											</li>
											<li>
												Basically Jobbing.In was a start-up created by
												my university's seniors and they asked me to work 
												with them, It was wonderful learning experience.
											</li>
											<hr color="black">
											<hr color="black">
											<hr color="black">
											<hr color="black">
											<hr color="black">
										</ul>
									</li>

								</ul>

							</font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!--Achievement(end)-->


	<!--Contact(start)-->
	<form action="endsem.php" method="POST">
	<table id="contact" border="0" width="100%"
		cellpadding="0" cellspacing="0" bgcolor="#c2c0c3">
		<tr>
			<td>
				<table border="0" cellpadding="15"
					cellspacing="0" width="80%" align="center">
					<tr>
						<td height="180" align="center"
							valign="middle" colspan="2">
							<font face="Verdana" size="7"
								color="black">
								Contact
							</font>
							<hr color="black" width="90">
						</td>
					</tr>

					<tr>
						<td align="center" valign="top">
							<table border="0" width="50%" cellpadding="15"
								cellspacing="0" align="center" bgcolor="black">
								<tr>
									<td width="30%">
										<hr color="black">
										<font face="Verdana" size="4"
											color="#ffffff">
											Name
										</font>
									</td>
									<td width="70%">
										<font face="Verdana" size="4"
											color="#ffffff">
											<input type="text" id="uname" name="uname" size="40" autocomplete="off" required>
										</font>
									</td>
								</tr>
								<tr>
									<td width="30%">
										<font face="Verdana" size="4"
											color="#ffffff">
											Email
										</font>
									</td>
									<td width="70%">
										<font face="Verdana" size="4"
											color="#ffffff">
											<input type="email" id="email" name="email" size="40" autocomplete="off" required>
										</font>
									</td>
								</tr>
								<tr>
									<td width="30%">
										<font face="Verdana" size="4"
											color="#ffffff">
											Number
										</font>
									</td>
									<td width="70%">
										<font face="Verdana" size="4"
											color="#ffffff">
											<input type="number" id="mno" name="mno" size="12" autocomplete="off" required>
										</font>
									</td>
								</tr>
								<tr>
									<td width="30%">
										<font face="Verdana" size="4"
											color="#ffffff">
											Message
										</font>
									</td>
									<td width="70%">
										<font face="Verdana" size="4"
											color="#ffffff">
											<textarea rows="5"
												cols="37" id="msg" name="msg" autocomplete="off" required>
											</textarea>
										</font>
									</td>
								</tr>
								<tr>
									<td width="30%">
										
									</td>
									<td width="70%">
										<button type="Submit" id="submit" name="submit">
											<font face="Verdana"
												size="4" color="black">
												<b>Submit</b>
											</font>
										</button>
										<hr color="black">
										<hr color="black">
									</td>
								</tr>
							</table>
						</td>

					</tr>
					<tr>
						<td colspan="2">
							
							
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table></form>
	<!--Contact(end)-->


	<!--Footer1(start)-->
	<table id="footer" border="0" width="100%"
		cellpadding="0" cellspacing="0" bgcolor="#4CAF50">
		<tr>
			<td>
				<table border="0" cellpadding="15"
					cellspacing="0" width="90%" align="center">
					<tr>
						<td width="13%" valign="top">
							<b>LinkedIn</b>
							<a href="https://www.linkedin.com/in/anupam-charan-pahari-b15184162/" style="text-decoration:none">
								➲
							</a>
						</td>

						<td>
							|
						</td>

						<td width="13%" valign="top">
							<b>GitHub</b>
							<a href="https://github.com/anupam240" style="text-decoration:none">
								➲
							</a>
						</td>

						<td>
							|
						</td>

						<td width="13%" valign="top">
							<b>HackerRank</b>
							<a href="https://www.hackerrank.com/acpahari" style="text-decoration:none">
								➲
							</a>
						</td>

						<td>
							|
						</td>

						<td width="13%" valign="top">
							<b>GeeksforGeeks</b>
							<a href="https://geeksforgeeks.org/user/acpahari" style="text-decoration:none">
								➲
							</a>
						</td>

						<td>
							|
						</td>

						<td width="13%" valign="top">
							<b>Twitter</b>
							<a href="https://twitter.com/AnupamCharan" style="text-decoration:none">
								➲
							</a>
						</td>

						<td>
							|
						</td>

						<td width="13%" valign="top">
							<b>Instagram</b>
							<a href="https://instagram.com/me.Anupam" style="text-decoration:none">
								➲
							</a>
						</td>

						<td>
							|
						</td>

						<td width="13%" valign="top">
							<b>Email</b>
							<a href="https://gmail.com/acpahari@gmail.com" style="text-decoration:none">
								➲
							</a>
						</td>

						<td>
							|
						</td>

						<td width="13%" valign="top">
							<b>Website</b>
							<a href="#" style="text-decoration:none">
								➲
							</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!--Footer1(end)-->


	<!--Footer2(start)-->
	<table id="footer" border="0" width="100%"
		cellpadding="0" cellspacing="0" bgcolor="black">
		<tr>
			<td>
				<table border="0" cellpadding="15"
					cellspacing="0" width="90%" align="center">
					<tr>
						<td width="80%" valign="top">
							<font face="Verdana"
								color="#4CAF50" size="5">
								©Copyright2022 by acpahari.com.
								All rights reserved.
							</font>
						</td>

						<td width="10%">
							<font face="arial" color="black" size="5">
								<a href="#header" style="text-decoration:none">
									<font face="Verdana" color="#4CAF50" size="6">
										<b>TOP</b>
									</font>
								</a>
							</font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!--Footer2(end)-->

</body>

</html>
