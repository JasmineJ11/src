<?php
include '../header.php';
?>

    <h2>Input Your Information Below:</h2>
    <form name="form1" method="post" action="process.php">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
                </div>
                <div class="col">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
                </div>
                <div class="col">
                    <label for="groupid">Group ID:</label>
                    <select class="form-control" id="groupid" name="groupid">
                        <option value="BBCAP19">BBCAP19</option>
                        <option value="BBCAP20">BBCAP20</option>
                        <option value="BBCAP21">BBCAP21</option>
                        <option value="BBCAP22">BBCAP22</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

<form name = "search" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label for="fn">First Name:</label> <input type="text" name="fn" id="fn">
    <label for="ln"> Last Name:</label><input type="text" name="ln" id="ln">
    <label for="ct"> City: </label><input type="text" name="city" id="ct">
    <input type="submit" name="submit" value="search">
</form>

<?php
global $conn;
  $firstName = $_POST['fn'];
  $lastName = $_POST['ln'];
  $city = $_POST['city'];

include 'db.php';

$sql = "select * from studentsinfo where first_name = '$firstName' AND last_name = '$lastName' AND city" = '$city';

$result = $conn ->query($sql);

while

?>



<?php
include '../footer.php';
?>