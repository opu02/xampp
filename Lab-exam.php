<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            margin-top:50px;
            background-color:lightgray;
        }
        #header{
            margin-top:50px;
        }
        #btn{
            background-color:blue;
            color:white;
            font-size:15px;
            width: 200px;
            border-radius: 5px;
            padding: 5px;
        }
        label{
            font-weight:bold;
        }
        form{
            margin-top: 50px;
            border: 1px solid black;
            width: 300px;
            margin: 0 auto;
            border-radius: 5px;
            padding: 5px;
            background-color: aqua;
        }
        #btn1{
            background-color:red;
            color:white;
            font-size:15px;
            width: 100px;
            border-radius: 5px;
            padding: 5px;
        }
        #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: blue;
    }

    </style>
    
    <title>Document</title>
</head>
<body>
    
    
    <form onsubmit="return handleRegistration()">
        <center>
        <h2 id="header">Participant Registration</h2>
    </center>
        <center>
        <label>Full Name:</label>
        <br>
        <input type="text" id="name">
        <br>
       <label>Email:</label>
        <br>
        <input type="email" id="email">
        <br>
        <label>Phone Number:</label>
        <br>
        <input type="number" id="number1">
        <br>
        <label>Password:</label>
        <br>
        <input type="password" id="number2">
        <br>
        <label>Confirm Password:</label>
        <br>
        <input type="password" id="number3">
        <br>
        <br>
        <button id="btn">Register</button>
        
        </center>

        <center>
            <h2>Activity Selection</h2>
        </center>
        <center>
            <label>Activity Name:</label>
            <br>
            <input type="text">
            <br>
            <br>
            <button id="btn">Add Activity</button>
            <br>
            <br>
            <input type="text" placeholder="Hello">
            <br>
            <br>
            <button id="btn1">Remove</button>
        </center>
    </form>

   <div id="output"></div>

    <script>
        function handleRegistration(){
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var number = document.getElementById("number1").value;
            var password1 = document.getElementById("number2").value;
            var password2 = document.getElementById("number3").value;
            
            var outputDiv = document.getElementById("output");

            outputDiv.innerHTML = "";


            if(name===""||email===""||number===""){
                alert("please fill up the fields");
                return false;
            }
    
             if(password1 != password2){
                alert("password didn't match");
                return false;
            }
           outputDiv.innerHTML = `
        Registration Successfully completed
        <br>
        Name: ${name}
        <br>
        Email: ${email}
        <br>
        Phone Number: ${number} `; 
        return false;

        }
    </script>
</body>
</html>