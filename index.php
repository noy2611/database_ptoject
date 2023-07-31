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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&family=Metamorphous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>databse-NoyRaichman&RanLachmy</title>
</head>

<body id="body-of-layout-2">
<img src="imge/dateb.png" id="imgdatab">
    <main>
        
        <div id="form-wrapper-2">
            <form action="php/get_form.php" method="get" class="needs-validation" novalidate>
                <h1>Events</h1>
                <ul>
                    <ol>1.Display events from the past x weeks.</ol>
                    <ol>2.Display future events and the costumer who made the event order.</ol>
                    <ol>3.Display events that are short on Waiters or Chefs.</ol>
                    <ol>4.Display customers who made more then one order.</ol>
                    <ol>5.Display incomes from the past x months.</ol>
                    <ol>6.Schedule employee to event.</ol>
                    <ol>7.Give event price percentage discount.</ol>
                    <ol>8.Display incomes for specific salesman in x month.</ol>
                </ul>
                <label>Select the option
                    <select name="names" class="form-select">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </label>
                <input type="submit" id="submit-button" class="btn btn-primary" value="Send">
            </form>
        </div>
    </main>
</body>

</html>