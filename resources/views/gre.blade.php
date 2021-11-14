<html>

<head>
    <title>PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>
        </h2>
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h3>The meaning is:</h3>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Word :</label>
                </div>
                <div class="col-5">
                    <?php echo $_GET["word"] ; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Meaning :</label>
                </div>
                <div class="col-5">
                    <?php
                    $definisi=$_GET["word"] ;
                    if(strtolower($definisi)=="ambiguous"){
                        echo "unclear or doubtful in meaning";
                    }else if(strtolower($definisi)=="beneficent"){
                        echo "kindly; doing good";
                    }else if(strtolower($definisi)=="compliant"){
                        echo "yielding; conforming to requirements";
                    }else if(strtolower($definisi)=="deride"){
                        echo "ridicule; make fun of";
                    }else if(strtolower($definisi)=="dupe"){
                        echo "someone easily fooled";
                    }else if(strtolower($definisi)=="endemic"){
                        echo "prevailing among a specific group of people or in a specific
                        area or country";
                    }else if(strtolower($definisi)=="flag"){
                        echo "droop; grow feeble";
                    }else if(strtolower($definisi)=="hyperbole"){
                        echo "exaggeration; overstatement";
                    }else
                        echo"Please input the right words"
                     ?>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
