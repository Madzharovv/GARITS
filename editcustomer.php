<?php
    include 'php/connectdb.php';
    //get customer info
    $ID = $_GET['ID'];
    $query_Customer = "SELECT * From GARITS_Customer WHERE CustomerCardID = $ID";
    $result = $db->query($query_Customer);
    $row = $result->fetch_assoc();
    $name = $row["CustomerName"];
    $email = $row["CustomerEmail"];
    $phoneNumber =$row["CustomerMobileNumber"]; 
    $houseNumber =$row["CustomerHouseNumber"];
    $postCode = $row["CustomerPostCode"];
    $faxNumber = $row["CustomerFaxNumber"];
    $issueNumber = $row["CustomerCardIssueDate"];
    $customerType = $row["CustomerType"];


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || Edit Customer</title>
    <script defer src="script.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="sidebar">
        <div class="sidebar__menu"></div>
        <ul class="side-nav">
          <li class="reception__sidebar-nav-item reception">
            <a href="/allcustomers.php"
              ><img
                src="img/reception/reception1.svg"
                alt="Reception Images"
              /><span>Customers</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="/allvehicles.php"
              ><img
                src="img/reception/reception2.svg"
                alt="Reception Images"
              /><span>Vehicles</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="/alljobs.php"
              ><img
                src="img/reception/reception3.svg"
                alt="Reception Images"
              /><span>Jobs</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="/invoicepage.html"
              ><img
                src="img/reception/reception4.svg"
                alt="Reception Images"
              /><span>Invoice</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="/availableparts.php"
              ><img
                src="img/reception/reception6.svg"
                alt="Reception Images"
              /><span>Parts</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception reception-last">
            <a href="/login.html"
              ><img
                src="img/reception/reception7.svg"
                alt="Reception Images"
              /><span>Logout</span></a
            >
          </li>
        </ul>
      </nav>
      <div class="right-side">
        <header class="header">
          <div class="user-avatar">
            <div class="user-avatar__box">
              <img
                src="/assets/images/avatar.png"
                alt="user"
                class="user-avatar__photo"
              />
            </div>
            <div class="user-avatar__text">
              <h3>Welcome</h3>
              <p>Receptionist 102</p>
            </div>
          </div>
        </header>
        <main class="admin-view">
          <div class="dashboard-container">
            <section class="section section-staff">
              <div class="staff">
                <div class="staff__total">
                  <h3 class="staff__total-text">Edit Customer Information</h3>
                </div>
              </div>
            </section>

            <section class="section-form">
              <form class="form" action="php/updatecustomer.php" method="POST">
                <div class="form__box">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label">First Name</label>
                      <?php
                      echo "<input type=\"text\" class=\"form__input\" name=\"name\" value=\"".$name."\" />";
                      ?>
                    
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Surname</label>
                    <input type="text" class="form__input" value="Umar" />
                  </div>
                </div>

                <div class="form__box">
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Email</label>
                      <?php
                    
                        echo"<input type=\"email\" class=\"form__input\" name=\"email\" placeholder=\"\" value=\"".$email."\" />";
                    
                      ?>
                  </div>
                </div>
                <div class="form__box">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label">Phone Number</label>
                    <select class="form__select">
                      <option>+234</option>
                      <option>+234</option>
                      <option>+234</option>
                      <option>+234</option>
                    </select>
                      <?php
                        echo"<input type=\"number\" class=\"form__input\" name=\"phoneNumber\" value=\"".$phoneNumber."\" />"
                      ?>
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Customer ID</label>
                      <?php
                        echo"<input type=\"text\" class=\"form__input semi-disable\" name=\"ID\" value=\"".$ID."\" disabled />";
                      ?>
                    
                  </div>
                </div>
                <div class="form__box">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label">House Number</label>
                      <?php
                        echo"<input type=\"text\" class=\"form__input\"name=\"houseNumber\" value=\"".$houseNumber."\" />";
                      ?>
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Postal Code</label>
                    
                    <?php
                        echo"<input type=\"text\" class=\"form__input\" name=\"postCode\" value=\"".$postCode."\" />";
                      ?>
                  </div>
                </div>
                <div class="form__box">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label">Fax Number</label>
                    <?php
                        echo"<input type=\"text\" class=\"form__input\"name=\"faxNumber\" value=\"".$faxNumber."\" />";
                      ?>
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Card Issue Number</label>
                    <?php
                        echo"<input type=\"text\" class=\"form__input\" name=\"issueNumber\" value=\"".$issueNumber."\" disabled/>";
                      ?>
                  </div>
                </div>
                <div class="form__cta">
                  <button type="submit" class="btn form__btn">Update</button>
                </div>
              </form>
            </section>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
