<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
        <title>ETS PWEB B</title>
        <style>
            #wrapper {
                width: 400px;
                margin: auto;
                padding: 100px 10px;
                margin-top: 50px;
            }
            #kotak{
                border: 1px solid black;
                border-radius: 5px;
                padding: 10px;
                width: 400px;
                position: center;
            }
            h3{
                text-align: center;
            }
            .name{
                position: relative;
                left: 50px;
                top: 0px;
            }
            .price{
                position: relative;
                left: 103px;
                top: 0px;
            }
            .jenis{
                position: relative;
                left: 63px;
                top: 0px;
                width: 190px;
                height: 30px;
            }
            .code{
                position: relative;
                left: 53px;
                top: 0px;
            }
            .btn{
                border: none;
                border-radius: 2px;
                color: white;
                padding: 2px 64px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                font-weight: bold;
                margin: 24px 8px;
                transition-duration: 0.4s;
                cursor: pointer;
            }
            .button1{
                background-color: #3c43e1;
                color: white;
                border: 2px;
            }
            .button2{
                background-color: #2aff17;
                color: black;
                border: 2px;
            }

            label.error{
                font-size:10;
                display: block;
                color:#f00;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
        <div id="kotak">
            Leonardy Wirya Theo<br>
            Leo <br>
            5026201076 <br>
            <h3>Form Input Data Barang</h3>
                <form name="regForm" id="regForm" action="#">
                    <div>
                        <label >Nama Barang :</label>
                        <input type="text" class="name" id="name" name="name">
                    </div>
                    <div>
                        <label>Harga :</label>
                        <input type="text" class="price" id="price" name="price">
                    </div>
                    <div>
                        <label>Jenis Barang:</label>
                        <select name="jenis" class="jenis">
                        <option value=""selected></option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="nonmamin">Non Mamin</option>
                        </select>
                    </div>
                    <div>
                        <label>Kode barcode:</label>
                        <input type="text" class="code" id="code" name="code">
                    </div>
                    <div id="kirim">
                        <input type="submit" class="btn button1" value="Kirim">
                        <input type="reset" class="btn button2" value="Reset">
                    </div>
                </div>
                </div>
                </form>

        <script>
            jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            });

            jQuery.validator.addMethod("minimal5000", function(harga, element) {
                harga = harga.replace(/\s+/g, "");
                return this.optional(element) || harga.match(/^[5-9]\d{3,}$/);
            });
        $("#regForm").validate({
            rules:{
                name:{
                    required:true,
                    lettersonly:true,
                    minlength:10
                },
                price:{
                    required:true,
                    number:true,
                    minimal5000: true
                },
                jenis:{
                    required:true,
                },
                code:{
                    required:true,
                    number:true,
                    minlength:10
                }
            },
            messages:{
                name:{
                    required:"Harap memasukkan nama barang",
                    lettersonly:"Harap memasukkan karakter saja",
                    minlength:"Harap memasukkan minimal 10 karakter"
                },
                price:{
                    required:"Harap memasukkan harga barang",
                    number:"Harap memasukkan angka saja",
                    minimal5000:"Minimal 5000"
                },
                jenis:{
                    required:"Harap memilih jenis barang",
                },
                code:{
                    required:"Harap memasukkan kode barcode",
                    number:"Harap memasukkan angka saja",
                    minlength:"Harap memasukkan minimal 10 digit"
                }
            },
            submitHandler:function(){
                answer=confirm("Apakah anda sudah yakin?");
                if(answer==true){
                    alert("Data telah terinput")
                    form.submit();
                }else{
                    return false;
                }
            }
        })
    </script>
    </body>
</html>
