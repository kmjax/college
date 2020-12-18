<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="College Site - PHP/MySQL Homework Assignment - 2020-12-09"
    />
    <meta name="author" content="Kelsey McClanahan" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Critter College - Login</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/1c973cd7ab.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <header>
      <div class="container-lg">
        <div class="row">
          <p>&nbsp;</p>
        </div>
      </div>
    </header>
    <main>
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-12"> 
            <h1 id="login-title-text">
              <i class="fas fa-paw"></i> &nbsp; Critter College
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12"> 
            <h5 class="p-center">Login to the Student Portal or register a new account.</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12" id="login-area">
            <form action="process-login.php" method="POST">
              <table>
                <tr>
                  <td><p class="login-label">Username (email):</p></td>
                  
                  <td><input type='text' name='userName' size='32' class='login-input-text' value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Password:</p></td>
                  <td><input type='text' name='userPassword' size='32' class='login-input-text' value=''></td>
          
                </tr>
                <tr>
                  <td></td>
                  <td><button type="submit" name="loginButton" id="login-button">Login</button></td>
                </tr>
                <tr>
                  <td colspan="2"><hr id="login-hr"></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12" id="login-area">
            <form action="registration.php" method="POST">
              <table>
                <tr>
                  <td><p class="login-label">Register a new account:</p></td>
                  <td><button type="submit" name="registrationButton" id="registration-button">Registration</button></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="container-lg">
        <div class="row">
          <p id="footer-text">
            Copyright &copy;2020 Critter College. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
