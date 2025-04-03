<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    switch ($action) {
        case 'search':
            $order_id = $_POST['order_id'];
            $sql = "SELECT * FROM Orders WHERE order_id = '$order_id'";
            break;
        case 'max':
            $column = $_POST['column'];
            $sql = "SELECT MAX($column) AS max_value FROM Orders";
            break;
        case 'min':
            $column = $_POST['column'];
            $sql = "SELECT MIN($column) AS min_value FROM Orders";
            break;
        case 'avg':
            $column = $_POST['column'];
            $sql = "SELECT AVG($column) AS avg_value FROM Orders";
            break;
        case 'count':
            $sql = "SELECT COUNT(*) AS total_orders FROM Orders";
            break;
        default:
            echo "Invalid action.";
            break;
    }

    // Execute the SQL query
    $result = $conn->query($sql);

    // Display the fetched data
    if ($result) {
        echo "<h2>Filtered Data</h2>";
        if ($result->num_rows > 0) {
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td><strong>" . $key . "</strong></td>";
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No data found.";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>