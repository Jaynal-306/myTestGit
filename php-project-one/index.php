<?php
require_once './vendor/autoload.php';

use App\classes\Student;
use App\classes\Calculator;


$result = '';

if(isset($_POST['btn'])){
    $student = new Student($_POST);
    $result = $student->index();
}

$calResult = '';
if(isset($_POST['mainBtn'])){
    $calculator = new Calculator($_POST);
    $calResult = $calculator->index();
}



//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITM Fourth Project</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align:center">Please fill up the form</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label class="col-from-lebel col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-from-lebel col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-from-lebel col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $result; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>My Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label class="col-from-lebel col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_nuber"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-from-lebel col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="second_number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-from-lebel col-md-3">Action</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="action" value="+"/>Add</label>
                                        <label><input type="radio" name="action" value="-"/>Sub</label>
                                        <label><input type="radio" name="action" value="/"/>Div</label>
                                        <label><input type="radio" name="action" value="*"/>Multi</label>
                                        <label><input type="radio" name="action" value="%"/>Rem</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-from-lebel col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" value="<?php echo $calResult; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9 ml-md-auto">
                                        <input type="submit" name="mainBtn" class="btn btn-outline-success" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        



<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>