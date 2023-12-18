<!DOCTYPE html>
<html>
<head>
    <title>Graph Order Report</title>
    <style>
        /* for styling */
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
    
</head>
<body>
    <h1>Graph Order Report - Daily</h1>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Total sales</th>

            </tr>
        </thead>
        <tbody>
            <?php
            // REPORT SALES
            foreach ($salesreport as $salesreport) {
                echo "<tr>";
                echo "<td>" . $orderCounter . "</td>";
                echo "<td>" . $salesreport['Total_sales'] . "</td>";

                echo "</tr>";
                $orderCounter++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
