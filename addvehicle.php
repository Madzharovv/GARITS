<?php
include "php/connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || Edit Vehicle</title>
    <script defer src="script.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="sidebar">
        <div class="sidebar__menu"></div>
        <ul class="side-nav">
          <li class="reception__sidebar-nav-item reception">
            <a href="allcustomers.php"
              ><img
                src="img/reception/reception1.svg"
                alt="Reception Images"
              /><span>Customers</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="allvehicles.php"
              ><img
                src="img/reception/reception2.svg"
                alt="Reception Images"
              /><span>Vehicles</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="alljobs.php"
              ><img
                src="img/reception/reception3.svg"
                alt="Reception Images"
              /><span>Jobs</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="invoicepage.html"
              ><img
                src="img/reception/reception4.svg"
                alt="Reception Images"
              /><span>Invoice</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
          <a href="availableparts.php"
              ><img
                src="img/reception/reception6.svg"
                alt="Reception Images"
              /><span>Parts</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception reception-last">
            <a href="#"
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
                src="assets/images/avatar.png"
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
                  <h3 class="staff__total-text">Add Vehicle Information</h3>
                </div>
              </div>
            </section>

            <section class="section-form">
              <form class="form" action="php/newvehicle.php" method="POST">
                <div class="form__box">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label"
                      >Vehicle Reg No</label
                    >
                    <input type='text' name='reg' name = "reg" class='form__input'>
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Model</label>
                    <input type="text" class="form__input" name="model" required />
                  </div>
                </div>

                <div class="form__box">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label"
                      >Vehicle Number</label
                    >
                    <input type="text" class="form__input" name="number" required />
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label"
                      >Vehicle Chassis Number</label
                    >
                    <input type="text" class="form__input" name="chassis" required  />
                  </div>
                </div>
                <div class="form__box">
                  <div class="form__input-box form__input-box--password">
                    <label for="fname" class="form__label">Vehicle Color</label>
                    <input type="text" class="form__input form__input" name="colour" required/>
                  </div>
                  <div class="form__input-box form__input-box--password">
                    <label for="fname" class="form__label"
                      >Vehicle Engine Number</label
                    >
                    <input type="text" class="form__input form__input" name="engine" required />
                  </div>
                </div>
                <div class ="form_box">
                <div class="form__input-box form__input-box--password">
                    <label for="fname" class="form__label"
                      >VehicleYear</label
                    >
                    <input type="text" class="form__input form__input" name="year" required />
                  </div>
                </div>

                <div class="form__box">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label" 
                      >Vehicle Last MOT date</label
                    >
                    <input type="text" class="form__input" name="lastMOT" required  />
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label" 
                      >Vehicle next MOT date</label
                    >
                    <input type="text" class="form__input" name="nextMOT" required  />
                  </div>
                </div>
                <div class="form__box">
                  <div class="form__input-box form__input-box--left">
                    
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label" 
                      >Customer Card ID</label
                    >
                    <input type="text" class="form__input" name="customerID" required/>
                  </div>
                </div>
                <div class="form__cta">
                  <button type="submit" class="btn form__btn">Update</button>
                </div>
              </form>
              <!--<from><button type="submit" class="btn form__btn">delete</button></form>-->
            </section>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
