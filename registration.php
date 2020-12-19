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
    <title>Critter College - Resgistration</title>
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
            <h3 class="p-center">New Student Registration</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12"> 
            <h5 class="p-center">To register for Critter College, please fill out this <br>form, set a password, and click the Register button.</h5>
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
                  <td><p class="login-label">First name:</p></td>
                  <td><input type='text' name='firstName' size='16' class='login-input-text' id="first-name" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Last name:</p></td>
                  <td><input type='text' name='lastName' size='16' class='login-input-text' id="last-name" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Phone number:</p></td>
                  <td><input type='text' name='phoneNumber' size='24' class='login-input-text' id="phone-number" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Address (line 1):</p></td>
                  <td><input type='text' name='addressLine1' size='32' class='login-input-text' id="address-line-1" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">(line 2):</p></td>
                  <td><input type='text' name='addressLine2' size='32' class='login-input-text' id="address-line-2" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">City:</p></td>
                  <td><input type='text' name='city' size='24' class='login-input-text' id="city" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">State:</p></td>
                  <td><input type='text' name='stateCode' size='2' class='login-input-text' id="state-code" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Zip code:</p></td>
                  <td><input type='text' name='zipCode' size='10' class='login-input-text' id="zip-code" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Gender:</p></td>
                  <td>
                    <input type="radio" id="gender-male" name="gender" value="M">
                    <label for="gender-male" class="radio-label">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="gender-female" name="gender" value="F">
                    <label for="gender-female" class="radio-label">Female</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="gender-other" name="gender" value="X">
                    <label for="gender-other" class="radio-label">Other</label>
                  </td>
                </tr>
                <tr>
                  <td><p class="login-label">Photo URL (optional):</p></td>
                  <td><input type='text' name='photoURL' size='50' class='login-input-text' id="photo-url" value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Notes (optional):</p></td>
                  <td><textarea name='notes' rows='3' cols='50' class='login-input-text' id="notes" value=''></textarea></td>
                </tr>
                <tr>
                  <td><p class="login-label">Password:</p></td>
                  <td><input type='text' name='userPassword' size='32' class='login-input-text' value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Verify:</p></td>
                  <td><input type='text' name='verifyPassword' size='32' class='login-input-text' value=''></td>
                </tr>
                <tr>
                  <td><p class="login-label">Acknowledge:</p></td>
                  <td><input type='checkbox' name='iAgreeBox' value='agree'>
                  <label for="iAgreeBox" class="checkbox-label">I agree to the <a href="#" class="terms-link">terms and conditions</a> of this site.</label></td>
                </tr>
                <tr>
                  <td></td>
                  <td><button type="submit" name="registerButton" class="login-regis-button" id="register-button">Register</button></td>
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
