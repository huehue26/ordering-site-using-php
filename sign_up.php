<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Foodie</title>

</head>

<body>

  <?php
  include "nav.php";
  ?>
  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>Sign Up</h1>

      <!-- Sign up form-->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form action="regProcess.php" method="post" id="signup" role="form" enctype="multipart/form-data">
              <fieldset>
                <legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>

                <div class="form-group">
                  <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                  <input required type="text" name="phone" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing" />
                </div>

                <div class="form-group">
                  <label for="firstname"><span class="req">* </span> First name: </label>
                  <input class="form-control" type="text" name="fname" id="txt" onkeyup="Validate(this)" required />
                  <div id="errFirst"></div>
                </div>

                <div class="form-group">
                  <label for="lastname"><span class="req">* </span> Last name: </label>
                  <input class="form-control" type="text" name="lname" id="txt" onkeyup="Validate(this)" placeholder="hyphen or single quote OK" required />
                  <div id="errLast"></div>
                </div>

                <div class="form-group">
                  <label for="address"><span class="req">* </span> Address: </label>
                  <input class="form-control" required type="text" name="address" id="address" onchange="" />
                  <div class="status" id="status"></div>
                </div>

                <div class="form-group">
                  <label for="email"><span class="req">* </span> Email Address: </label>
                  <input class="form-control" required type="text" name="email" id="email" onchange="email_validate(this.value);" />
                  <div class="status" id="status"></div>
                </div>

                <div class="form-group">
                  <label for="username"><span class="req">* </span> Username: <small>This will be your login user name</small> </label>
                  <input class="form-control" type="text" name="username" id="txt" onkeyup="Validate(this)" placeholder="minimum 3 characters" required />
                  <div id="errLast"></div>
                </div>

                <div class="form-group">
                  <label for="password"><span class="req">* </span> Password: </label>
                  <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" id="pass1" /> </p>
                </div>

                <div class="form-group">
                  <label for="image"><span class="req">* </span> Picture: </label>
                  <input id="uploadBtn" type="file" class="upload" name="image" accept="image/*" />
                </div>

                <div class="form-group">
                  <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
                </div>

              </fieldset>
            </form>

            <script type="text/javascript">
              document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
            </script>
          </div>
        </div>

        <br>
        <br>

</body>

</html>