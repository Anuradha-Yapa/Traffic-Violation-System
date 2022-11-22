<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
    button:hover {
        background-color: #465ACB !important;
    }

    #madhusha {
        background-color: green !important;
    }
    </style>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
    <section class="container-fluid bg">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">


                <button
                    style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; margin-top:260%; margin-left:20%; border: #C733FF;"
                    type="submit" class="btn btn-primary
                                    btn-block" onclick="funcA()">Register Traffic Officers</button>

                <button
                    style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; margin-left:2%; border: #C733FF;"
                    type="submit" class="btn btn-primary
                                    btn-block" onclick="funcB()">Remove Traffic Officers</button>

                <button
                    style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; margin-left:2%; border: #C733FF;"
                    type="submit" class="btn btn-primary
                                    btn-block" onclick="funcC()">Update Traffic Officers</button>

                <button
                    style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; margin-left:2%; border: #C733FF;"
                    type="submit" class="btn btn-primary
                                    btn-block" onclick="funcD()">View All Traffic Officers</button>

                <button
                    style="background-color: #C733FF; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 17px; margin-left:2%; border: #C733FF;"
                    type="submit" class="btn btn-primary
                                    btn-block" onclick="funcE()">View All Traffic Offences</button>

            </section>
        </section>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
    function funcA() {


        window.location.href = "1AddOfficers.php";

    }

    function funcE() {


        window.location.href = "5ALL.php";

    }

    function funcD() {

        window.location.href = "4AllOfficers.php";

    }

    function funcB() {

        window.location.href = "2delete.php";

    }

    function funcC() {

        window.location.href = "3update.php";

    }
    </script>
</body>

</html>