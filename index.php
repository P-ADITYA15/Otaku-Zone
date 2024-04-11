<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <script>
      function hidePassword() {
        let password = document.getElementsByClassName("password");
        password = password[0];
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
     <title>Otaku Zone</title>

<link rel="icon" type="image/png" href="/images/luffy1.png">
    <style>
        body{
    padding : 0;
    margin : 0;
    background-color: rgba(232,251,255,255);
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
    font-weight :bold;
}


.flexbox{
    padding-top : 10vh;
    height: 60vh;
    width: 200vw;
    margin-left: -50%;
       
    display: flex; 
    justify-content :space-evenly;
    align-items :center;
    flex-direction : column;
    
}
.logo{
    height: 100px;
    width: 115px;
    background-color: white;
    border-radius: 50%;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}

.login-box{
    border: solid rgba(49,43,98,255) 2px;
    border-radius: 20px;
    display : flex;
    flex-direction: column;
    height: 50%;   
    width : 20%;
    padding : 10px;
    justify-content: space-evenly;
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
}

.show-password{
    font-size: small;
    font-weight: normal;
}
.login-button-container{
    display: flex;
    justify-content : center;
}
.login-button{
    width: 10em;
    background-color: rgba(49,43,98,255) ;
    color : white;
    border-radius : 20px;
}

.login-button:hover{
    transform : scale(1.1) translateY(-2px);
    cursor: pointer;
}

.login-button:active{
    opacity: .9;
}
</style>
  </head>
  <body>
    <div class="flexbox">
      <img class="logo" src="./images/admin.webp" alt="image not found" />
      <div class="login-box">
        <label>Username</label>
        <input type="text" placeholder="Enter username" required />
        <label>Password</label>
        <input
          class="password"
          type="password"
          id="c"
          placeholder="Enter password"
          required
        />
        <div class="show-password">
          <input type="checkbox" onclick="hidePassword()" />
          <label>show password</label>
        </div>
        <div class="login-button-container">
          <button onclick="check()" class="login-button">login</button>
        </div>
      </div>
    </div>
    <script>
      function check() {
        let pass = document.getElementById("c").value;
        console.log(pass);
        if (pass == "admin@123") {
          window.location = "main.php";
          console.log("ok");
        } else {
          alert("Wrong password !!");
        }
      }
    </script>
  </body>
</html>
