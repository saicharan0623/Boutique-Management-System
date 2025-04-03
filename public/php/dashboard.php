<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Queries</title>
    <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
          
         background-color:#F1C6E7;
    
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        section {
            margin-bottom: 40px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
        }
        h2 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.5em;
        }
        code {
            background-color: #f4f4f4;
            padding: 10px;
            display: block;
            overflow-x: auto;
            white-space: pre-wrap;
            border-radius: 5px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        label {
            margin-bottom: 10px;
        }
        select, input[type="text"] {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .high-class-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
        }

        .high-class-table th, .high-class-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .high-class-table th {
            background-color: #d988b9;
            color: #fff; 
        }

        .high-class-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .high-class-table tr:hover {
            background-color: #ddd; 
        }
    </style>
</head>
<body>
    <h1>SQL Queries</h1>

    <section>
        <h2>Query 1: Fetching data from the database</h2>
        <code>
            <?php
            include 'db_config.php';

            $sql = "SELECT * FROM Customers";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='high-class-table'>";
                echo "<tr><th>Customer ID</th><th>Name</th><th>Location</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["customer_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["location"]. "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No results found";
            }
            ?>
        </code>
    </section>

    <section>
    <h2>Query 2: Aggregation function (Count)</h2>
    <?php
    $sql = "SELECT COUNT(*) AS order_count FROM Orders";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Total Orders</th></tr>"; // Table header row
        $row = $result->fetch_assoc();
        echo "<tr><td>" . $row["order_count"] . "</td></tr>"; // Table row with order count
        echo "</table>";
    } else {
        echo "No orders found";
    }
    ?>
</section>


<section>
    <h2>Query 3: Joining tables (Customers and Orders)</h2>
    <?php
    $sql = "SELECT c.name, o.total_bill 
            FROM Customers c
            INNER JOIN Orders o ON c.customer_id = o.customer_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Customer</th><th>Total Bill</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>$" . $row["total_bill"] . "</td></tr>"; // Table row with customer name and total bill
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 4: Subquery</h2>
    <?php
    $sql = "SELECT customer_id, payment_date, total_bill
            FROM PaymentStatus 
            WHERE total_bill = (SELECT MAX(total_bill) FROM paymentstatus)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Customer ID</th><th>Payment Date</th><th>Amount Paid</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["customer_id"] . "</td><td>" . $row["payment_date"] . "</td><td>$" . $row["total_bill"] . "</td></tr>"; // Table row with customer ID, payment date, and amount paid
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>


<section>
    <h2>Query 5: Filtering data with WHERE clause</h2>
    <?php
    $sql = "SELECT * FROM Orders WHERE total_bill > 2000";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Order ID</th><th>Total Bill</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["order_id"] . "</td><td>$" . $row["total_bill"] . "</td></tr>"; // Table row with order ID and total bill
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 6: Sorting data with ORDER BY</h2>
    <?php
    $sql = "SELECT * FROM Customers ORDER BY name ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Customer Name</th><th>Location</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["location"] . "</td></tr>"; // Table row with customer name and location
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 7: Grouping data with GROUP BY</h2>
    <?php
    $sql = "SELECT customer_id, SUM(total_bill) AS total_spent 
            FROM Orders 
            GROUP BY customer_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Customer ID</th><th>Total Spent</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["customer_id"] . "</td><td>$" . $row["total_spent"] . "</td></tr>"; // Table row with customer ID and total spent
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 8: Subquery</h2>
    <?php
    $sql = "SELECT * FROM Customers 
            WHERE customer_id IN (
                SELECT customer_id FROM Orders 
                GROUP BY customer_id 
                HAVING AVG(total_bill) > (
                    SELECT AVG(total_bill) FROM Orders
                )
            )";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Customer Name</th><th>Location</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["location"] . "</td></tr>"; // Table row with customer name and location
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 9: Join</h2>
    <?php
    $sql = "SELECT Customers.name AS customer_name, Orders.order_id, Orders.total_bill
            FROM Customers
            INNER JOIN Orders ON Customers.customer_id = Orders.customer_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Customer Name</th><th>Order ID</th><th>Total Bill</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["customer_name"] . "</td><td>" . $row["order_id"] . "</td><td>$" . $row["total_bill"] . "</td></tr>"; // Table row with customer name, order ID, and total bill
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 10: Aggregation Function</h2>
    <?php
    $sql = "SELECT SUM(blouses_count) AS total_blouses_ordered FROM Orders";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Total Blouses Ordered</th></tr>"; 
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["total_blouses_ordered"] . "</td></tr>"; 
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 11: Join Operation</h2>
    <?php
    $sql = "SELECT Customers.name, Measurements.shoulder_width, Measurements.wrist, Measurements.arm_length
            FROM Customers
            INNER JOIN Measurements ON Customers.customer_id = Measurements.customer_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>";
        echo "<tr><th>Customer Name</th><th>Wrist</th><th>Shoulder_width</th><th>arm_length</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["wrist"] . "</td><td>" . $row["shoulder_width"] . "</td><td>" . $row["arm_length"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 12: Aggregate Function</h2>
    <?php
    $sql = "SELECT AVG(ratings) AS average_rating FROM Reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Average Rating</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["average_rating"] . "</td></tr>"; // Table row with average rating
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>
<section>
    <h2>Query 13: Subquery</h2>
    <?php
   $sql = "SELECT customer_id, due_amount FROM paymentstatus
   WHERE due_amount > 1000
   AND customer_id IN (
       SELECT customer_id FROM Customers
   )";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Customer Id</th><th>Due amount</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["customer_id"] . "</td><td>" . $row["due_amount"] . "</td></tr>"; // Table row with product name and price
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 14: Joining Tables</h2>
    <?php
    $sql = "SELECT c.name, o.order_id, o.total_bill, o.order_date 
            FROM Customers c 
            INNER JOIN Orders o ON c.customer_id = o.customer_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Customer</th><th>Order ID</th><th>Total Bill</th><th>Order Date</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["order_id"] . "</td><td>$" . $row["total_bill"] . "</td><td>" . $row["order_date"] . "</td></tr>"; // Table row with customer name, order ID, total bill, and order date
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

<section>
    <h2>Query 15: Aggregation Function</h2>
    <?php
    $sql = "SELECT avg(price) AS avg_price FROM Prices";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='high-class-table'>"; // Apply the high-class table CSS class
        echo "<tr><th>Total Orders</th></tr>"; // Table header row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["avg_price"] . "</td></tr>"; // Table row with total orders
        }
        echo "</table>";
    } else {
        echo "No results found";
    }
    ?>
</section>

    <section>
        <h2>Query 16: Fetch Data with Condition</h2>
        <form action="fetch_data.php" method="post">
            <label for="action">Select Action:</label>
            <select name="action" id="action">
                <option value="search">Search by Order ID</option>
                <option value="max">Maximum Value</option>
                <option value="min">Minimum Value</option>
                <option value="avg">Average Value</option>
                <option value="count">Total Orders</option>
            </select>
            <div id="order_id_input" style="display: none;">
                <label for="order_id">Order ID:</label>
                <input type="text" name="order_id" id="order_id">
            </div>
            <div id="column_input" style="display: none;">
                <label for="column">Select Column:</label>
                <select name="column" id="column">
                    <option value="total_bill">Total Bill</option>
                </select>
            </div>
            <input type="submit" value="Submit">
        </form>
    </section>

    <script>
        document.getElementById("action").addEventListener("change", function() {
            var selectedAction = this.value;
            if (selectedAction === "search") {
                document.getElementById("order_id_input").style.display = "block";
                document.getElementById("column_input").style.display = "none";
            } else {
                document.getElementById("order_id_input").style.display = "none";
                document.getElementById("column_input").style.display = "block";
            }
        });
    </script>


</body>
</html>
