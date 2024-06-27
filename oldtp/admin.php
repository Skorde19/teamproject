<?php

if(isset($_POST["done_btn"])) {

	include("connect.php");
	
    // Retrieve the selected semester and subject from the POST data
    $seme = $_POST['semester'];
    $sub = $_POST['subject'];

    // You can now handle the data, for example, by displaying it
    echo "Selected Semester: " . htmlspecialchars($seme) . "<br>";
    echo "Selected Subject: " . htmlspecialchars($sub) . "<br>";

    // You can also process the data further (e.g., save it to a database or perform some calculations)
    // Add your code here...
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sipna COET</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h4> Welcome </h4>
					</div>
					<div class="card-body">
						<form method="post" action="path_to_your_php_script.php">
							<div class="form-group">
								<label for="semester">Semester</label>
									<select class=" form-control selectpicker" >
									    <option value="S1">Semester 1</option>
									    <option value="S2">Semester 2</option>
									    <option value="S3">Semester 3</option>
									    <option value="S4">Semester 4</option>
									    <option value="S5">Semester 5</option>
									    <option value="S6">Semester 6</option>
									    <option value="S7">Semester 7</option>
									    <option value="S8">Semester 8</option>
									</select>
							</div>
							
							<div class="form-group">
						      <label for="subject">Select Option 2:</label>
						      <select class="form-control" id="subject">
						    </div>   

							<div class="form-group">
						     <button type="submit" class="btn btn-info" name="done_btn">Done</button>
						    </div>   
						      </select>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




	<script>
  function adjustOptions() {
    var select1Value = document.getElementById("select1").value;
    var subject = document.getElementById("subject");

    // Clear existing options
    subject.innerHTML = "";

    // Adjust options based on select1Value
    switch(select1Value) {
      case "S1":
        subject.add(new Option("Mathematics "));
        subject.add(new Option("Physics"));
        subject.add(new Option("Chemistry"));
        subject.add(new Option("Computer Science"));
        subject.add(new Option("Engineering Drawing"));
        break;
      case "S2":
        subject.add(new Option("a"));
        subject.add(new Option("a"));
        subject.add(new Option("a"));
        subject.add(new Option("a"));
        subject.add(new Option("a"));
        break;
      case "S3":
        subject.add(new Option("Engineering Mathematics-III"));
        subject.add(new Option("Discrete Structure & Graph Theory"));
        subject.add(new Option("Object Oriented Programming"));
        subject.add(new Option("Assembly Language Programming"));
        subject.add(new Option("Analog & Digital Electronics"));
        break;
      case "S4":
        subject.add(new Option("Computer Organization & Architecture"));
        subject.add(new Option("Data Communication & Networking"));
        subject.add(new Option(" Operating System"));
        subject.add(new Option("Data Structures"));
        subject.add(new Option(" Social Science & Engg. Economics"));
        break;
      case "S5":
        subject.add(new Option(" Database Management Systems"));
        subject.add(new Option("Theory of Computation "));
        subject.add(new Option(" Software Engineering "));
        subject.add(new Option("Information Security Systems"));
        subject.add(new Option(" Cyber Law & Ethics"));
        break;
      case "S6":
        subject.add(new Option("Compiler Design"));
        subject.add(new Option("Design & Analysis of Algorithms"));
        subject.add(new Option("Artificial Intelligence"));
        subject.add(new Option("Cryptography & Network Security"));
        subject.add(new Option("Human Resource Development & Organization"));
        break;
      case "S7":
        subject.add(new Option("Mobile Computing"));
        subject.add(new Option(" Embedded Systems "));
        subject.add(new Option(" Cloud Computing"));
        subject.add(new Option("Machine learning "));
        subject.add(new Option(" Business Intelligence "));
        break;
      case "S8":
        subject.add(new Option(" Object Oriented Analysis & Design"));
        subject.add(new Option("Professional Ethics & Management"));
        subject.add(new Option("Entrepreneurship & Project Management. "));
        subject.add(new Option("Robotics "));
        subject.add(new Option("Virtual & Augmented Reality"));
        break;
    }
  }

  // Call the function initially to populate subject based on default select1 value
  adjustOptions();
</script>

</body>
</html>