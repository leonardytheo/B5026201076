<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Praktikum 2</title>
        <style>
            td{
                vertical-align: top;
            }
            textarea{
                resize:none;
            }
            table{
                border: 1px solid black;
                background-color: white;
                align-items: center;
            }
            td{
                height: 30px;
            }
            h1{
                text-align: left;
            }
            label.error{
                font-size: 10;
                font-weight: 500;
                display: block;
                color: #f00;
            }
            body{
                background: #33ccff;
            }
            .bg{
                padding: 100px 10px;
            }
            .tulisankekanan{
                text-align: right;
            }
            .textboxclass {
                width: 240px;
            }
            .p1{
                font-size: 10;
                font-weight: 500;
                display: block;
                color: #f00;
            }
            .p2{
                font-size: 10;
                font-weight: 500;
                display: block;
                color: #f00;
            }
        </style>
    </head>
    <body>
        <section class="bg">
        <form name="regForm" id="regForm"action="#">
            <table align="center">
                <th></th>
                <th></th>
                <th><h1>Registration Form</h1></th>
                <tr>
                    <td class="tulisankekanan">User id</td>
                    <td>:</td>
                    <td><input type="text" id="userid" name="userid"></td>
                </tr>
                <tr>
                    <td class="tulisankekanan"> Password</td>
                    <td>:</td>
                    <td><input type="password" id="pwd" name="pwd"></td>
                </tr>
                <tr>
                    <td class="tulisankekanan">Name</td>
                    <td>:</td>
                    <td><input class="textboxclass" type="text" id="name" name="name"></td>
                </tr>
                <tr>
                    <td class="tulisankekanan">Address</td>
                    <td>:</td>
                    <td><input class="textboxclass" type="text" id="address" name="address"></td>
                </tr>
                <tr>
                    <td class="tulisankekanan">Country</td>
                    <td>:</td>
                    <td><select name="country">
                        <option value=""selected>(Please select a country)</option>
                        <option value="indo">Indonesia</option>
                        <option value="malay">Malaysia</option>
                        <option value="filipina">Filipina</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td class="tulisankekanan">ZIP Code</td>
                    <td>:</td>
                    <td><input type="text" id="zip" title="Must be numeric only" name="zip"></td>
                </tr>
                <tr>
                    <td class="tulisankekanan">Email</td>
                    <td>:</td>
                    <td><input class="textboxclass" type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td class="tulisankekanan">Sex</td>
                    <td>:</td>
                    <td><div class="gender"><input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <div class="p1"></div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="tulisankekanan">Language</td>
                    <td>:</td>
                    <td><div class="language"><input type="checkbox" id="language" name="language" value="english">English
                        <input type="checkbox"  id="language" name="language" value="nonenglish">Non English
                        <div class="p2"></div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="tulisankekanan">About</td>
                    <td>:</td>
                    <td><textarea rows="5" cols ="40" id="comment"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" id="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </section>
    <script>
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
        });
        $("#regForm").validate({
            rules:{
                userid:{
                    required:true,
                    minlength : 5,
                    maxlength  :12
                },
                pwd:{
                    required:true,
                    minlength : 7,
                    maxlength :12
                },
                name:{
                    required:true,
                    lettersonly:true
                },
                country:{
                    required:true
                },
                zip:{
                    required:true,
                    number:true
                },
                email:{
                    required:true,
                    email:true
                },
                gender:{
                    required:true
                },
                language:{
                    required:true,
                }
            },
            messages: {
                userid:{
                    required: "Please enter your User id",
                    minlength: "User id at least 5 to 12 length"
                },
                pwd:{
                    required: "Please enter your password",
                    minlength: "Password at least 7 to 12 length"
                },
                name:{
                    required:" Please enter your name",
                    lettersonly:"Must be alphabets only"
                },
                zip:{
                    required:"Please enter your ZIP Code"
                },
                email:{
                    required:"Please enter your email",
                    email:"Must be a valid email"
                },
                gender:{
                    required:"Please select",
                },
                language:{
                    required:"Please select",
                }
            },
            errorPlacement:function( error, element ){
                if(element.is( ":radio" )){
                    error.appendTo('.gender');
                }else if(element.is( ":checkbox" )){
                    error.appendTo('.language');
                }
                else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function( ){
                answer = confirm("Are you sure want to submit?");
                    if (answer == true){
                        alert("Form submitted")
                        form.submit( );
                    }else{
                        return false;
                    }
            }
        });
    </script>
    </body>
</html>
