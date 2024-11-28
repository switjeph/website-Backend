<?php
$y = 22;
function myFunction () {
    echo $GLOBALS ['y'];
}

myFunction();

echo '<br>';
echo '<br>';

$y = 22;

function myFunctions () {
    
    $y = 22;
    echo $y ;
}

myFunctions ();

echo '<br>';
echo '<br>';

// $_SERVER 
echo $_SERVER['PHP_SELF']; 
echo "<br>";


// Single quotes and Double quote difference 

echo "<br>";
echo "<br>";

$z = "Mary";
echo "Hello $z";
echo "<br>";
echo 'Hello $z';
?>

<form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >

<input type = "text" placeholder= "First Name" name="fname">
<br><br>
<input type = "text" placeholder= "Last Name" name="fname">
<br><br>
<button type="submit">Submit</button>

</form>

<?php 
$first_name = $last_name = ""; 
// Initialize veriables to empty string

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    // CHECKING IF FORM IS SUBMITTED VIS POST MEthod.
    $first_name = htmlspecialchars ($_POST['fname']);
    // $_POST['fname'] HOLD FORM DATA OF A FORM THAT USED POST METHOD 
    // htmlspecialchars HELPS TO PREVENT MALICIOUS CODE

    $last_name = $_POST['lname'];
    echo "<h2> Good Afternoon $frist_name $last_name </h2>";
    // <script>Malicious code displayed as plain text </script>
}
