<html>
<head>
    <title>Stock Market Indonesia</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                     });
            });
        });
    </script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 60%;
        }

        td,tr {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            background-color: #e7e7e7;
            padding: 8px;
        }
    </style>
</head>
<body>

    <h2>Beberapa Stock market Indonesia</h2>
    <input id="myInput" type="text" placeholder="Search..">
    <br><br>

    <table>
        <thead>
        <tr>
        <th>Kode</th>
        <th>Nama</th>
        </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>BBCA<p id="tulisan"><small> Stock market : 833.339T</small></p></td>
                <td>BANK CENTRAL ASIA</td>
            </tr>
            <tr>
                <td>BBRI<p id="tulisan1"><small> Stock market : 585.232T</small></p></td>
                <td>BANK RAKYAT INDONESIA</td>
            </tr>
            <tr>
                <td>TLKM<p id="tulisan2"><small> Stock market : 362.568T</small></p></td>
                <td>TELKOM INDONESIA</td>
            </tr>
            <tr>
                <td>BMRI<p id="tulisan3"><small> Stock market : 284.451T</small></p></td>
                <td>BANK MANDIRI</td>
            </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $("#tulisan").hide();
                $("#tulisan1").hide();
                $("#tulisan2").hide();
                $("#tulisan3").hide();
            });
            $("#show").click(function(){
                $("#tulisan").show();
                $("#tulisan1").show();
                $("#tulisan2").show();
                $("#tulisan3").show();
            });
        });
    </script>
    <button id="hide">Hide</button>
    <button id="show">Show</button>
</body>
</html>
