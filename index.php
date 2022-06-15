<?php
//All your codes should be here!!//

// $myName = "Mutuku Kasyoka";

// echo $myName
// arrays
$students = array("Purity","Ännet","Roy","Jamal","Bulazi");
echo $students[2];


// Associated arrays
$myMarks = array("Assessments" => 25,
                "CAT" =>15,
                "Projects" =>35,
                "Attendance" =>8
                );

echo "My Project Marks" .$myMarks["Projects"];

// Multidimensional array
$webDevTechnologies = array(
    "frontend" => array("HTML","CSS","JS","BootStrap"),
    "backend" => array("PHP","Python","Java","JS"),
    "database" => array("MySQL","PostgresSQ","Firebase","MongoDB"),
    "frameworks" =>array("Django","Laravel","Flutter","Springboot")
);
echo $webDevTechnologies["frontend"][2];
echo $webDevTechnologies["backend"][1];
echo $webDevTechnologies["database"][0];
echo $webDevTechnologies["frameworks"][3];
?>