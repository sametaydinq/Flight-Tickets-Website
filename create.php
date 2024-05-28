
<?php
 
 include('db_connect.php');
 global $conn;

 $Flight_Code = "";
 $Fromm = "";
 $Too = "";
 $Flight_Date = "";
 $Flight_Date = "";
 $Flight_Time = "";
 $Price = "";

 $errorMessage = "";
 $succesMessage = "";





 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //post durumu kontrolü sonrası değerleri değişkenlere atıyoruz

  $Flight_Code = $_POST['Flight_Code'];
  $Fromm = $_POST['Fromm'];
  $Too = $_POST['Too'];
  $Flight_Date = $_POST['Flight_Date'];
  $Flight_Time = $_POST['Flight_Time'];
  $Price = $_POST['Price'];


  do {
        if(empty($Flight_Code) || empty($Fromm) || empty($Too) || empty($Flight_Date)  || empty($Flight_Time) || empty($Price)){
            $errorMessage = "All the fields are required";
            break;
        }
    
        //add new client to database
        $sql = "INSERT INTO ucus_listesi(Flight_Code,Fromm,Too,Flight_Date,Flight_Time,Price) 
        VALUES ('$Flight_Code','$Fromm','$Too','$Flight_Date','$Flight_Time','$Price')";

        $result= $conn->query($sql);

        if (!$result){
            $errorMessage = "Invalid query:". $conn->error;
            break;

        }
        $Flight_Code = "";
        $Fromm = "";
        $Too = "";
        $Flight_Date = "";
        $Flight_Date = "";
        $Flight_Time = "";
        $Price = "";
       
        $succesMessage = "Client added correctly";

        header("Location: /test/Dashboard.php");
        exit;

  }while(false);
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta htto-equiv="X-UA-Compatible" content="UE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Flight Ticket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</head>

  <body>
    <div class="container my-5">
        <h2>New Flight</h2>

        <?php 
            if(!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' arical-label='Close'></button>
                </div>
                ";
            }

        ?>
        <form method="post">
        <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Flight_Code</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Flight_Code" value="<?php echo $Flight_Code; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">From</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Fromm" value="<?php echo $Fromm; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Too</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Too" value="<?php echo $Too; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Flight_Date" value="<?php echo $Flight_Date; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Time</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Flight_Time" value="<?php echo $Flight_Time; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Price" value="<?php echo $Price; ?>">
                </div>
            </div>
            <?php
          if(!empty($errorMessage)){
            echo "
            <div class='row mb-3>
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' arical-label='Close'></button>
                </div>
            </div>
            ";
        }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                   <a class="btn btn-outline-primary" href="databaselist.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>