  <?php
    // create a database connection
    // replace username with your username in the abcd123 format
    // replace password with your mysql password (your 9-digit student id)
    // replace db with your username
    $db = new mysqli('smcse-stuproj00.city.ac.uk','adbt117','200012740','adbt117');
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }else{
        echo"Database connected successfully";
    }
?>