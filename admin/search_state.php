<?php
if (isset($_POST['country'])) {
    $country = $_POST['country'];

    $con = new mysqli("localhost", "root", "", "ecommerce");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $stmt = $con->prepare("SELECT * FROM states WHERE country_id = ?");
    $stmt->bind_param("i", $country);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<option value="sel_state">--Select State--</option>';
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['stat_id']}'>{$row['sname']}</option>";
        }
    } else {
        echo "<option>No Results</option>";
    }

    $stmt->close();
    $con->close();
}
?>
