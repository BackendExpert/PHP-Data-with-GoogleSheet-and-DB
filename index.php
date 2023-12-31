<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php include("functions/function.php"); ?>

    <div class="container main-page">
        <div class="card">
            <div class="card-header">
                <h3>Data Send to GSheet and DB</h3>
            </div>

            <?php 
                if(isset($_POST['submit_data'])){
                    $result = add_user($_POST['nameuser'],$_POST['emailuser'],$_POST['mobile'],$_POST['address']);
                    echo $result;
                }            
            ?>

            <div class="card-body user-card">
                <form method="POST" action="<?php echo($_SERVER['PHP_SELF']); ?>" id="frmSubmit">
                    <div class="row">
                        <div class="col-lg-6 intext">Name : </div>
                        <div class="col-lg-6"><input type="text" name="nameuser" id="" class="form-control" placeholder="Name" required></div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-6 intext">Email Address: </div>
                        <div class="col-lg-6"><input type="email" name="emailuser" id="" class="form-control" placeholder="Email Address" required></div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-6 intext">Mobile Number: </div>
                        <div class="col-lg-6"><input type="text" name="mobile" id="" class="form-control" placeholder="Mobile Number" required></div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-6 intext">Address: </div>
                        <div class="col-lg-6"><textarea name="address" class="form-control form-address" placeholder="Address" required></textarea></div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-5">
                            <input type="reset" value="Clear" class="btn btn-secondary btn-form">
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <input type="submit" value="Submit Data" class="btn btn-success btn-form" name="submit_data">
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                Developed By @JehanKandy
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <script>
        jQuery('#frmSubmit').on('submit', function(e) {
        e.preventDefault();
        jQuery('#msg').html('Please wait...');
        jQuery('#btnSubmit').attr('disabled', true);
        jQuery.ajax({
            url: 'https://script.google.com/macros/s/AKfycbz7Ngeaorh7FXluqbl57f7tuzjyQZmC3earP7P03-QefwTDS0fNrRbXcReVONoMMjJ9hw/exec',

            type: 'post',
            data: jQuery('#frmSubmit').serialize(),

            success: function(result) {

                resend();

            }
        });
    });
    </script>

</body>

</html>