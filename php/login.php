<?php



include_once 'connectdb.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

/* all usernames and passwords are selected from the database and compared to the info in the login form to see if there is a match*/

$query = "SELECT * FROM GARITS_Staff WHERE StaffUsername = '$username' AND StaffPassword = '$password'";
$result = mysqli_query($db, $query);
$row=$result->fetch_assoc();

/*if the username or password does not match to the database you will be redirected to contact.html and an error message will pop up*/

if ($result->num_rows == 0) {
    echo "<script language = 'javascript'>
            alert('Invalid Username or Password.');
            window.location.href='../Login.html';
            </script>";
}

/*if login is succesfull an message logged in is displayed and you are taken to booking.html*/

elseif($row['StaffRole'] = 'Mechanic'){
    echo   "<script language = 'javascript'>
        
            window.location.href='../mechanic.php';
            </script>";
}
elseif($row['StaffRole'] = 'Receptionist'){
    echo   "<script language = 'javascript'>
        
            window.location.href='../reception.html';
            </script>";
}
elseif($row['StaffRole'] = 'Franchisee'){
    echo   "<script language = 'javascript'>
        
            window.location.href='booking.html';
            </script>";
}
elseif($row['StaffRole'] = 'Administrator'){
    echo   "<script language = 'javascript'>
        
            window.location.href='../admin-dashboard.php';
            </script>";
}