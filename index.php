<!DOCTYPE html>
<html>
<head>
<title> STUDENT RESULTS RATING</title>
<!-- Unicode Vietnamese -->
<meta charset="UTF-8">
<meta name="author" content=" trendemy.com" />
<!-- css definition file -->
<link href="style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
<h2> CLASSIFICATION OF STUDENT RESULTS</h2>
<!-- Form to send processing results -->
<!-- action is the landing page, the # value is sent to the

current page itself.
The method is post. -->
<form action="#" method="post">
<!-- Mathematics -->
<div class="row">
<div class="lbltitle">
<label> Math scores </label>
</div>
<div class="lblinput">
<!-- name="math" is the variable name sent to the

server,

isset($_POST['math']) check if the variable is defined

or not -->

<input type="number" name="math"
value="<?php echo isset($_POST['math']) ?

$_POST['math'] : "" ; ?>" />
</div>
</div>
<!-- Physics -->
<div class="row">
<div class="lbltitle">
<label> Physics scores</label>
</div>
<div class="lblinput">
<input type="number" name="physics"
value="<?php echo isset($_POST['physics']) ?

$_POST['physics'] : "" ; ?>" />

</div>
</div>
<!-- Chemistry -->
<div class="row">
<div class="lbltitle">
<label> Chemistry scores</label>
</div>
<div class="lblinput">
<input type="number" name="chemistry"
value="<?php echo isset($_POST['chemistry']) ?

$_POST['chemistry'] : "" ; ?>" />

</div>
</div>
<div class="row">
<div class="lbltitle">
<label> Select an area</label>
</div>
<div class="lblinput">
<input type="number" name="chemistry"
value="<?php echo isset($_POST['chemistry']) ?

$_POST['chemistry'] : "" ; ?>" />

</div>
</div>
<!-- Form send button, command button to send results -->
<div class="row">
<div class="submit">
<input type="submit" name="btnsubmit" value="

Ratings" />
<!-- Display results -->
<div class="result">
<h2>Rating results</h2>
<div class="row">
<div class="lbltitle">
<label>Total points</label>
</div>
<div class="lbloutput">
<?php echo isset($_POST['btnsubmit']) ? $_POST['math']

+ $_POST['physics'] + $_POST['chemistry'] : "" ; ?>

</div>
</div>
</div>
<div class="row">
<div class="lbltitle">
<label>Rating</label>
</div>
<div class="lbloutput">
<?php

if(isset($_POST['btnsubmit'])){
$totalpoints = $_POST['math'] + $_POST['physics']

+ $_POST['chemistry'];

if($totalpoints >= 24) echo "Very Good";
elseif($totalpoints >= 21) echo "Good";
elseif($totalpoints >= 15) echo "Average";
else echo "Weak";
}
?>

</div>
</div>

</div>
</div>
</form>
</div>
</body>
</html>