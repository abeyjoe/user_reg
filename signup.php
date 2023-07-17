<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External CSS link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- online bootstrap file -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">    
    <!-- Online Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- offline bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- bootstrap icon & font -->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    
    <title>E-Logbook</title>
</head>
<body class="text-dark">
<!-- Biginning of Header & Navigation Bar -->
<div class="header">
		<div class="logo">
			<a href="#" style="cursor: auto;"><img src="logo.png" /></a>
		</div>
		<div class="nav">
			<div class="link">
				<ul>
					<a href="login.php"><li>Home</li></a>				
					<a href="login.php"><li>Logbook</li></a>
					<a href="login.php"><li>Activity</li></a>
					<a href="login.php"><li>Profile</li></a>                    				
				</ul>                
			</div>
            <div>
                <ul>					
					<a href="login.php"><li class="home">Sign in</li></a>                    				
				</ul>                 
            </div>			
		</div>
	</div>
    <!-- End of Header & Navigation Bar -->
    <center><h1 class="visesc"> VSESC E-LOGBOOK </h1></center>
    <!-- Beginning of Login & Registration Form -->
    <div class="container">
    <div class="login-box p-5">
        <div class="row">

            <!-- Beginning of Registration Section -->
            <!-- <div class="col-md-6 login-right m-auto"> -->
                <center><h2>Register Here </h2></center>
                <!-- Registration Form -->
                <form action="registration.php" method="post" class="row g-3" enctype="multipart/form-data">
                    <!-- SURNAME -->
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Surname</label>
                        <input type="text" name="surname" class="form-control" id="validationDefault01" required>
                    </div>
                    <!-- LASTNAME -->
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Last Name</label>
                        <input type="text" name="lastName" class="form-control" id="validationDefault01" required>
                    </div>
                    <!-- USERNAME -->
                    <div class="col-md-4">
                        <label for="validationDefaultUsername" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>                            
                            <input type="text" name="user" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>                    
                    <!-- PASSWORD -->
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" id="validationDefault01" required>
                    </div>
                    <!-- MATRIC NUMBER -->
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Matric Number</label>
                        <input type="text" name="matricNumber" class="form-control" id="validationDefault01" required>
                    </div>
                    <!-- GENDER -->
                    <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Gender</label>
                        <select name="gender" class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Select...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                    </div>
                    <!--PROGRAM-->
                    <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Program</label>
                        <select name="program" class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Select...</option>
                        <option value="FT">FT</option>
                        <option value="DPP">DPP</option>
                        <option value="PT">PT</option>
                        </select>
                    </div>
                    <!--DEPARTMENT-->
                    <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Department</label>
                        <select name="department" class="form-select" id="validationDefault04" required>
                            <option selected disabled value="">Select...</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="SLT">SLT</option>
                            <option value="URP">URP</option>
                            <option value="LIS">LIS</option>
                            <option value="Geology">Geology</option>
                            <option value="Maths & Statistics">Maths & Statistics</option>
                            <option value="Micro Biology">Micro Biology</option>
                            <option value="Biochemistry">Biochemistry</option>
                            <option value="Physics">Physics</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Mechatronics">Mechatronics</option>
                            <option value="Quantity Survey">Quantity Survey</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Public Admin">Public Admin</option>
                            <option value="Business Admin">Business Admin</option>                            
                            <option value="Art and Design">Art and Design</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value="Banking and Finance">Banking and Finance</option>
                            <option value="OTM">OTM</option>
                            <option value="Local Govenment">Local Govenment</option>
                        </select>
                    </div>
                    <!--LEVEL-->
                    <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Level</label>
                        <select name="level" class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Select...</option>
                        <option value="ND1">ND1</option>
                        <option value="ND2">ND2</option>
                        <option value="HND1">HND1</option>
                        <option value="HND2">HND2</option>
                    </select>
                </div>
                <!--PHONE NUMBER-->
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">Phone Number</label>
                    <input type="text" name="phoneNumber" class="form-control" id="validationDefault05" required>
                </div>
                <!--EMAIL ADDRESS-->
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="validationDefault05" required>
                </div>
                <!--Upload Picture -->
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">Profile Picture</label>
                    <input type="file" name="picture" class="form-control" id="validationDefault05" required>
                </div>
                <!--TRADE -->
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Trade</label>
                    <select name="trade" class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Select...</option>
                        <option value="Web Design and Software Development">Web Design and Software Development</option>
                        <option value="Garment Making">Garment Making</option>
                        <option value="Beading Works">Beading Works</option>
                        <option value="Cusmetology">Cusmetology</option>
                        <option value="Leather Works">Leather Works</option>
                        <option value="Electrical Instalation">Electrical Instalation</option>
                        <option value="GSM Repairs and Servicing">GSM Repairs and Servicing</option>
                        <option value="Household Product">Household Product</option>
                        <option value="Brick/Block Moulding and Concreting">Brick/Block Moulding and Concreting</option>
                        <option value="Modern Car Repairs and Servicing">Modern Car Repairs and Servicing</option>
                        <option value="Tie and Die">Tie and Die</option>
                        <option value="Catering and Confectionaries">Catering and Confectionaries</option>
                        <option value="Pure Water Factory">Pure Water Factory</option>
                        <option value="Renewable Energy and Solar/inverter System">Renewable Energy and Solar/inverter System</option>
                        <option value="Textile Technology">Textile Technology</option>
                        <option value="Berbering">Berbering</option>
                        <option value="Fishery">Fishery</option>
                        <option value="Transportation and Logistics">Transportation and Logistics</option>
                    </select>
                </div>
                <!--STUDENTSHIP-->
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Studentship</label>
                    <select name="studentship" class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Select...</option>
                        <option value="Regular">Regular</option>
                        <option value="Rerunner">Rerunner</option>
                    </select>
                </div>
                <!--SEMESTER-->
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Semester</label>
                    <select name="semester" class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Select...</option>
                        <option value="First Semester">First Semester</option>
                        <option value="Second Semester">Second Semester</option>
                    </select>
                </div>
                <!--SESSION-->
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Session</label>
                    <select name="session" class="form-select" id="validationDefault04" required>
                        <option value="2020/2021">2020/2021</option>
                        <option value="2019/2020">2019/2020</option>
                        <option value="2018/2019">2018/2019</option>
                        <option value="2017/2018">2017/2018</option>
                        <option value="2016/2017">2016/2017</option>
                    </select>
                </div>
                <!-- Check button -->
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                    </div>
                </div>
                <!-- REGISTER BUTTON -->
                <button type="submit" class="btn btn-primary"> Register </button>
        
                </form>
            </div>
            <!-- End of Registration Section -->
        </div>
    </div>
    <!-- End of Login & Registration Form -->
</div>
<!-- End of Header & Navigation Bar -->

<footer>
    <marquee behavior="horizontal" direction="horizontal">The Polytechnic Ibadan sango ibadan...  Vocational Skill Enterpreneurship Scheme (VSESC)</marquee><br><br><br>
    <center><p> Developed By Adedapo Abiodun Copyright @2022 </p></center>
</footer>
</body>
</html>