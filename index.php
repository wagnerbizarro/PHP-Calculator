<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php include "calc.php"; ?>

    <title>Calculator</title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <main>
            <br>
            <form method="POST">
                <div class="row mt-1 ms-1 px-2 p-3">
                    <div class="col-sm-1">
                        <label for="numberA">First Number</label>
                        <input type="number" name="numberA" size="3">
                    </div>

                </div>

                <div class="row mt-2 ms-1 px-2 p-3">
                    <div class="col-sm-1">
                        <input type="radio" id="plus" name="oper" value="plus">
                        <label for="plus">&nbsp;+</label>
                        <br>

                        <input type="radio" id="minus" name="oper" value="minus">
                        <label for="minus">&nbsp;-</label>
                        <br>

                        <input type="radio" id="times" name="oper" value="times">
                        <label for="times">&nbsp;x</label>
                        <br>

                        <input type="radio" id="divided" name="oper" value="divided">
                        <label for="divided">&nbsp;/</label>
                    </div>
                </div>

                <div class="row mt-1 ms-1 px-2 p-3">
                    <div class="col-sm-1">
                        <label for="numberB">Second Number</label>
                        <input type="number" name="numberB" size="3">
                    </div>
                </div>

                <div class="row mt-1 ms-1 px-2 p-3">
                    <div class="col-sm-1">
                        <input class="btn btn-success" type="submit" value="Calc">
                    </div>
                    <div class="col-sm-1">
                        = <output name="result" type="number"><?php echo $result; ?></output>
                    </div>
                </div>

                <div class="row mt-1 ms-1 px-2 p-3">
                    <div class="col-sm-1">
                        <button class="btn btn-primary" onclick="window.location.reload();">AC</button>
                    </div>
                </div>
            </form>

        </main>
    </div>

</body>

<footer>

</footer>

</html>