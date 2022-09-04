
// define variables and set to empty values
/*$FnameErr = $SnameErr = $DOBErr = $StudIdErr = $CourseErr = $LevelErr = 
$PhoneErr = $EmailErr = $genderErr = $comment = "";

$Fname = $Sname = $DOB = $StudId = $Course = $Level = 
$Phone = $Email = "";
	
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// code...
	if (empty($_POST['Fname'])) {
		$FnameErr = "Name is required";
	} else {
    $Fname = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Fname)) {
      $FnameErr = "Only letters and white space allowed";
    }
  }
}

if (empty($_POST['Sname'])) {
		$SnameErr = "Name is required";
	} else {
    $Sname = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Sname)) {
      $SnameErr = "Only letters and white space allowed";
    }
  }
}
if (empty($_POST['Iname'])) {
		$StudIdErr = "ID is required";
	} else {
    $StudId = test_input($_POST["Iname"]);
    }
}
if (empty($_POST['Lname'])) {
		$LevelErr = "ID is required";
	} else {
    $Level = test_input($_POST["Lname"]);
    }
}

if (empty($_POST['Cname'])) {
    $CourseErr = "ID is required";
  } else {
    $Level = test_input($_POST["Cname"]);
    }
}

if (empty($_POST["email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format";
    }
}

if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>*/

<?php
  include "connection.php";

?>



<?php
  if (isset($_POST['signup'])) {
    mysql_query($link, "insert into studentstb values(NULL,'$_POST[firstname]', '$_POST[surname]','$_POST[studentid]','$_POST[phone]','$_POST[email]')");
  }

?>


