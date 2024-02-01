<div class="container">

<?php
$title = "Exercise 4: Control flow and loops";
include 'header.php'; ?>

<h1>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting).</h1>

<form method="post" name="vote_form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    Name: <input type="text" name="nimi" required> <br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" value="Submit">
</form>







<?php
include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3743480f3c.js" crossorigin="anonymous"></script>

</div>