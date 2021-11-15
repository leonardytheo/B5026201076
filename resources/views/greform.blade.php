<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <title>Vocabulary GRE</title>
    <style>
        .wrapper {
            width: 1000px;
            margin: auto;
            margin-top: 50px;
        }

        .kotak {
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            width: 1000px;
            position: center;
            background-color: #cce6ff;
        }

        h2 {
            text-align: center;
        }

        .btn {
            border: 2px solid black;
            border-radius: 2px;
            color: black;
            background-color: white;
            padding: 2px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 3px 3px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        label.error {
            font-size: 10;
            display: block;
            color: #f00;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="kotak">
            <div class=container>
                <h2>GRE Vocabulary</h2>
                <div class="row pt-3">
                    <div class="col-2">
                        <label>Ambiguous</label>
                    </div>
                    <div class="col-2">
                        <label>Beneficent</label>
                    </div>
                    <div class="col-2">
                        <label>Compliant </label>
                    </div>
                    <div class="col-2">
                        <label>Deride</label>
                    </div>
                    <div class="col-2">
                        <label>Dupe</label>
                    </div>
                    <div class="col-2">
                        <label>Endemic</label>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-2">
                        <label>Flag</label>
                    </div>
                    <div class="col-2">
                        <label>Hyperbole</label>
                    </div>
                </div>
                <div class="row pt-3">
                    <label>Please input the word :</label>
                </div>
                <div class=row pt-3>
                    <form name="regForm" id="regForm" action="grephp" method="GET">

                        <div>
                            <label>Word :</label>
                            <input type="text" id="word " name="word">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-default">

                        </div>
                    </form>
                    <script>
                        jQuery.validator.addMethod("lettersonly", function (value, element) {
                            return this.optional(element) || /^[a-z]+$/i.test(value);
                        });
                        $("#regForm").validate({
                            rules: {
                                word: {
                                    required: true,
                                    lettersonly: true,
                                }
                            },
                            messages: {
                                word: {
                                    required: "Tidak boleh kosong",
                                    lettersonly: "Harap memasukkan karakter saja",
                                }
                            }
                        })
                    </script>
                </div>
            </div>
        </div>
</body>

</html>
