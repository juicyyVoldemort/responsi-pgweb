<!DOCTYPE html>
<html>
<head>
    <title>Community</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 960px;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }
        .blog-header-logo {
            font-size: 2.5rem;
        }
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        .nav-underline .nav-item {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: 1.25rem;
            color: #6c757d;
        }
        .nav-underline .nav-item:hover {
            color: #007bff;
        }
        .nav-underline .active {
            color: #007bff;
        }
        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }
        .lh-1 {
            line-height: 1;
        }
        .py-3 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .mb-3 {
            margin-bottom: 1rem;
        }
        .justify-content-center {
            justify-content: center!important;
        }
        .align-items-center {
            align-items: center!important;
        }
        .text-body-emphasis {
            color: #375a7f!important;
        }
        .text-decoration-none {
            text-decoration: none!important;
        }
    </style>
</head>
<body>
<h1 class="pb-4 mb-4 fst-italic border-bottom">
          Community
        </h1>
        <?php
        // Replace with your database credentials
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mahasiswa";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to select all data from the data_mhs table
        $sql = "SELECT * FROM data_mhs";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            // Output table headers
            echo "<tr>";
            while ($row = $result->fetch_assoc()) {
                foreach ($row as $key => $value) {
                    echo "<th>" . $key . "</th>";
                }
                break; // Break after the first row for table headers
            }
            echo "</tr>";

            // Output data rows
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close(); // Close the database connection
        ?>
    </div>

    <div class="container mt-4">
        <a class="btn btn-primary" href="javascript:history.back()">Go Back</a>
    </div>
</body>
</html>
