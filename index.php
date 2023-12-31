<?php
include "db.php";
function team6_CalculateRevenue($v_salesperson_name, $v_month, $v_year) {
global $connection;
 $v_salesperson_name = mysqli_real_escape_string($connection, $v_salesperson_name);
 $v_month = (int)$v_month;
 $v_year = (int)$v_year;

 $query = "SELECT team6_CalculateRevenue('$v_salesperson_name', $v_month, $v_year) AS revenue";
 $result = mysqli_query($connection, $query);

 if (!$result) {
     die("Function query failed: " . mysqli_error($connection));
 }

 // Fetch the result row
 $row = mysqli_fetch_assoc($result);
 $revenue = $row['revenue'];

 return $revenue;
}

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Medula+One&family=Metamorphous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a6eac1b83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">


    <title>databse-RanLachmy&NoyRaichman</title>
</head>

<body id="body-of-layout-2">
    <div id="wrapper-img">
        <img src="imge/dateb.png" id="imgdatab" alt="datebase" title="DataBase">
        <img src="imge/team6.png" id="imgdateam" alt="team6" title="Team6">
    </div>
    <main>
        <div id="form-wrapper-2">
            <h1>Events</h1>
            <div class="grid-option">
                <div class="box-grid">
                    <h4>1</h4>
                    <h5>Display events from the past x weeks </h5>
                    <br>
                    <input type="submit" id="option1" class="btn btn-primary" value="Click">
                </div>
                <div class="box-grid">
                    <form action="index.php#myTable" method="POST">
                        <h4>2</h4>
                        <h5>Show upcoming events and their customers </h5>
                        <input type="submit" id="option2" class="btn btn-primary" value="Click" name="option2">
                    </form>
                </div>
                <div class="box-grid">
                    <h4>3</h4>
                    <h5>Show incomes from x months ago. </h5>
                    <br>
                    <input type="submit" id="option3" class="btn btn-primary" value="Click">
                </div>
                <div class="box-grid">
                    <form action="index.php#myTable" method="POST">
                        <h4>4</h4>
                        <h5>Display events that are short on Waiters or Chefs. </h5>
                        <br>
                        <input type="submit" id="option4" name="option4" class="btn btn-primary" value="Click">
                    </form>
                </div>
                <div class="box-grid">
                    <h4>5</h4>
                    <h5>Schedule employee to event. </h5>
                    <br> <br>
                    <input type="submit" id="option5" class="btn btn-primary" value="Click">
                </div>
                <div class="box-grid">
                    <h4>6</h4>
                    <h5>Give event price percentage discount. </h5>
                    <br>
                    <input type="submit" id="option6" class="btn btn-primary" value="Click">
                </div>
                <div class="box-grid">
                    <h4>7</h4>
                    <h5>Display incomes for specific salesman in x month. </h5>
                    <br>
                    <input type="submit" id="option7" class="btn btn-primary" value="Click">
                </div>
                <div class="box-grid">
                    <form action="index.php#myTable" method="POST">
                        <h4>8</h4>
                        <h5>Display customers who made more then one order </h5>
                        <br>
                        <input type="submit" id="option8" name="option8" class="btn btn-primary" value="Click">
                    </form>
                </div>
                <div class="box-grid">
                    <h4>9</h4>
                    <h5>WE LOVE YOU BOAZ PLEASE GRADE 100 </h5>
                    <br>
                    <input type="submit" id="option9" class="btn btn-primary" value="Click">
                </div>
            </div>
            <h6>&copy;
                All rights reserved to - Noy Raichman & Ran Lachmy
            </h6>
        </div>

        <!-- lightbox -->
        <!-- sql-1 -->
        <!-- Modal-Show-X-Week -->
        <div class="modal fade" id="ShowXmodalWeek" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> please enter the number of week</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-form">
                        <form action="index.php#myTable" method="POST">
                            <!-- <input type="hidden" name="update_id"> -->
                            <input type="number" class="form-control written" name="weeks" min="0" max="9999999999"
                                value="" placeholder="Number weeks">
                            <div class="modal-footer">
                                <button type="submit" name="option1" class="btn btn-primary">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- sql-3 -->
        <!-- Modal-Display-incomes-from-the-past-x-months. -->
        <div class="modal fade" id="ShowXincomemonth" tabindex="-1" aria-labelledby="updateModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Please Enter the number of months </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-form">
                        <form action="index.php#myTable" method="POST">
                            <input type="number" class="form-control written" name="months" min="0" max="9999999999"
                                value="" placeholder="Month number">
                            <div class="modal-footer">
                                <button type="submit" name="option3" class="btn btn-primary">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- sql-5 -->
        <!-- Modal-Show-incomes-from-x-months -->
        <div class="modal fade" id="ShowXmodalMonth" tabindex="-1" aria-labelledby="updateModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Schedule employee to event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-form">
                        <form action="index.php#myTable" method="POST">
                            <label class="labellightbox">Enter event id </label>
                            <input type="number" class="form-control written" name="eventId" min="0" max="9999999999"
                                value="" placeholder="Event id">
                            <label class="labellightbox">Enter employee id </label>
                            <input type="number" class="form-control written" name="staffId" min="0" max="9999999999"
                                value="" placeholder="employee id">
                            <div class="modal-footer">
                                <button type="submit" name="option5" class="btn btn-primary">submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- sql-6 -->
        <!-- Modal-Show-price-percentage-discount -->
        <div class="modal fade" id="Show-price-percentage-discount" tabindex="-1" aria-labelledby="updateModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> please enter the percentage discount.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-form">
                        <form action="index.php#myTable" method="POST">
                            <label class="labellightbox">Enter event id </label>
                            <input type="number" class="form-control written" name="eventId" min="0" max="9999999999" value="" placeholder="event id">
                            <label class="labellightbox">Enter percentage discount</label>
                            <input type="number" class="form-control written" name="discount" min="0" max="100" value="" placeholder="percentage discount">
                            <div class="modal-footer">
                                <button type="submit" name="option6" class="btn btn-primary">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- sql-7 -->
        <!-- Modal-Display-incomes-for-specific-salesman-in-x-month -->
        <div class="modal fade" id="Display-incomes-for-specific-salesman-in-x-month" tabindex="-1"
            aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Income calculation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-form">
                        <form action="index.php#myTable" method="POST">
                            <input type="hidden" name="update_id">
                            <label class="labellightbox">Select the salesman</label>
                            <select name="salesperson_name" class="form-select" required>
                                <option value="">-</option>
                                <option value="Nomi Fisher">Nomi Fisher</option>
                                <option value="Ravi Levy">Ravi Levy</option>
                                <option value="Daniel shlishi">Daniel shlishi</option>
                            </select>
                            <label class="labellightbox">Select the month of income</label>
                            <select name="month" class="form-select" required>
                                <option value="">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <label class="labellightbox">Select the year of income</label>
                            <select name="year" class="form-select" required>
                                <option value="">-</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                            <div class="modal-footer">
                                <button type="submit" name="option7" class="btn btn-primary">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- sql-9 -->
        <!-- Modal-Grade-100 -->
        <div class="modal fade" id="modal-grade" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header-grade">
                        <h1 class="modal-title-h1"> <i class="fa-solid fa-star"></i> &nbsp; Your grade is 100 &nbsp;<i
                                class="fa-solid fa-star"></i> </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- table -->
        <!-- php -->
        <?php

        if (isset($_POST['option1'])) {
            $weeks = $_POST['weeks'];
            $query = "SELECT e.event_id, t.event_name, e.date 
                      FROM team6_Events as e
                      INNER JOIN team6_event_types as t ON e.event_type_id = t.event_type_id
                      WHERE e.date BETWEEN CURDATE() - INTERVAL $weeks WEEK AND CURDATE()";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("DB query failed.");
            }
            echo '<div class="table-sql">';
            echo '<table id="myTable" class="cell-border" style="width:100%">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Event ID</th>';
            echo '<th>Event Name</th>';
            echo '<th>Date</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row["event_id"] . '</td>';
                echo '<td>' . $row["event_name"] . '</td>';
                echo '<td>' . $row["date"] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else if (isset($_POST['option2'])) {
            $query = "SELECT e.event_id, et.event_name, c.coust_first_name, c.coust_last_name, e.date
                                FROM team6_Events AS e
                                INNER JOIN team6_customer AS c ON e.customer_id = c.coust_id
                                INNER JOIN team6_event_types AS et ON et.event_type_id = e.event_type_id
                                WHERE e.date >= CURDATE()
                                ORDER BY e.date";
            $result2 = mysqli_query($connection, $query);

            if (!$result2) {
                die("DB query failed.");
            }
            echo '<div class="table-sql">';
            echo '<table id="myTable" class="cell-border" style="width:100%">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Event ID</th>';
            echo '<th>Event Name</th>';
            echo '<th>Customer First Name</th>';
            echo '<th>Customer Last Name</th>';
            echo '<th>Date</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result2)) {
                echo '<tr>';
                echo '<td>' . $row["event_id"] . '</td>';
                echo '<td>' . $row["event_name"] . '</td>';
                echo '<td>' . $row["coust_first_name"] . '</td>';
                echo '<td>' . $row["coust_last_name"] . '</td>';
                echo '<td>' . $row["date"] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else if (isset($_POST['option3'])) {
            $months = $_POST['months'];
            $query = "SELECT SUM(price) AS revenue
            FROM team6_Events
            WHERE date >= DATE_SUB(NOW(), INTERVAL $months MONTH)";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("DB query failed.");
            }
            echo '<div class="table-sql">';
            echo '<table id="myTable" class="cell-border" style="width:100%">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Money</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row["revenue"] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else if (isset($_POST['option4'])) {
            $query = "SELECT e.event_id,t.event_name, e.date,e.number_of_waiters,e.number_of_cookes
            FROM team6_Events as e
            INNER JOIN team6_event_types as t 
            ON e.event_type_id=t.event_type_id
            WHERE number_of_waiters > 1 OR number_of_cookes > 1
            Order by date";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("DB query failed.");
            }
            echo '<div class="table-sql">';
            echo '<table id="myTable" class="cell-border" style="width:100%">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Event ID</th>';
            echo '<th>Event Name</th>';
            echo '<th>Date</th>';
            echo '<th>Number of Waiters needed</th>';
            echo '<th>Number of Cooks needed</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row["event_id"] . '</td>';
                echo '<td>' . $row["event_name"] . '</td>';
                echo '<td>' . $row["date"] . '</td>';
                echo '<td>' . $row["number_of_waiters"] . '</td>';
                echo '<td>' . $row["number_of_cookes"] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else if (isset($_POST['option5'])) {

            $v_event_id = $_POST['eventId'];
            $v_staff_id = $_POST['staffId'];

            $query = "CALL Team6_Add_staff_to_event($v_event_id, $v_staff_id)";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("Stored procedure call failed.");
            }
            $row = mysqli_fetch_assoc($result);
            echo '<div class="table-sql">';
            echo '<table id="myTable" class="cell-border" style="width:100%">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Message</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>' . $row["message"] . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
        } else if (isset($_POST['option6'])) {

            $v_event_id = $_POST['eventId'];
            $discount = $_POST['discount'];

            $query = "CALL team6_DiscountToEvent($v_event_id, $discount)";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("Stored procedure call failed.");
            }
            $message = mysqli_query($connection, "SELECT @message AS message")->fetch_assoc()['message'];
            echo '<div class="table-sql">';
            echo '<table id="myTable" class="cell-border" style="width:100%">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Message</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>' . $message . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
        } else if (isset($_POST['option7'])) {

            $salesperson_name = $_POST['salesperson_name'];
            $month = (int)$_POST['month'];
            $year = (int)$_POST['year'];
        
            $revenue = team6_CalculateRevenue($salesperson_name, $month, $year);

            echo '<div class="table-sql">';
            echo '<table id="myTable" class="cell-border" style="width:100%">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Month</th>';
            echo '<th>Year</th>';
            echo '<th>Revenue</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>' .$salesperson_name . '</td>';
            echo '<td>' .$month . '</td>';
            echo '<td>' .$year . '</td>';
            echo '<td>' .$revenue . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
        } else if (isset($_POST['option8'])) {
            $query = "SELECT e.event_id, e.customer_id, c.coust_first_name, c.coust_last_name, c.coust_phone, COUNT(event_id) AS total_events
            FROM team6_Events AS e
            INNER JOIN team6_customer AS c ON e.customer_id = c.coust_id
            GROUP BY e.customer_id
            HAVING COUNT(event_id) > 1";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("DB query failed.");
            }
            echo '<div class="table-sql">';
            echo '<table id="myTable" class="cell-border" style="width:100%">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Event ID</th>';
            echo '<th>Customer ID</th>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Phone Number</th>';
            echo '<th>Total Events</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row["event_id"] . '</td>';
                echo '<td>' . $row["customer_id"] . '</td>';
                echo '<td>' . $row["coust_first_name"] . '</td>';
                echo '<td>' . $row["coust_last_name"] . '</td>';
                echo '<td>' . $row["coust_phone"] . '</td>';
                echo '<td>' . $row["total_events"] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        }
        ?>
    </main>

    <script src="js/script.js"></script>
</body>

</html>
<?php
mysqli_close($connection);
?>