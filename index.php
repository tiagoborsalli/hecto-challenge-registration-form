<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form v1.0</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<script>
    function validateForm() {
        let name = document.forms["reg"]["name"].value;
        let email = document.forms["reg"]["email"].value;
        let cpf = document.forms["reg"]["id"].value;
        let address = document.forms["reg"]["address"].value;
        let city = document.forms["reg"]["city"].value;

        if (name == "") {
            alert("Name must be filled out");
            return false;
        } else if (name.length < 2) {
            alert("Name must be at least 2 characters");
        };

        function validateEmail(email) {
            let re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    
        if (!validateEmail(email)) {
            alert('Input a legit email')
        }

        function validateCpf(cpf) {
            let cpfRegex = /^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}/;
            return cpfRegex.test(cpf);
        };

        if (!validateCpf(cpf)) {
            alert('Input a legit ID/CPF')
        }

        if (address == "" || city == "") {
            alert("Address and city must be filled out");
            return false;
        } else if (address.length < 3 || city.length < 3) {
            alert("Address and city must be at least 3 characters");
        };
        
    };

    
</script>
<body>
    <div id="container">
        <div id="head">
            <img src="images/form-svgrepo-com.svg" />
            <h1>Initial Registration Form v1.1</h1>
        </div>
            <div class="jumbo">
                <table>
                    <form name="reg" method="POST" action="" onsubmit="return validateForm()">
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" name="name" placeholder="name" value=""></input>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="text" id="email" name="email" placeholder="email"></input>
                        </td>
                        <td>

                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            ID (CPF)
                        </td>
                        <td>
                            <input type="text" name="id" placeholder="CPF"></input>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Address
                        </td>
                        <td>
                            <input type="text" name="address" placeholder="address"></input>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            City
                        </td>
                        <td>
                            <input type="text" name="city" placeholder="city"></input>
                        </td>
                        <td>

                        </td>
                    </tr>
                </table>
               <!-- <div id="label">
                    Name
                    Email
                    ID (CPF)
                    Address
                    City
                </div>
                <div id="input">
                    <form name="reg" method="POST" action="" onsubmit="return validateForm()">
                    <input type="text" name="name" placeholder="name" value=""></input>
                    <input type="text" id="email" name="email" placeholder="email"></input>
                    <input type="text" name="id" placeholder="CPF"></input>
                    <input type="text" name="address" placeholder="address"></input>
                    <input type="text" name="city" placeholder="city"></input>
                </div> -->
            </div>
            <div id="button">
                <input type="submit" value="Submit" id="submit">
            </div>
        </form>
    </div>
</body>
</html>