<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <link rel="stylesheet" type="text/css" href="../css/agendar_cita.css">

</head>

<body>
    <?php
    require_once 'navbar.php';
    ?>
    <div class="container d-flex justify-content-center">
        <div class="card mx-5 my-5">
            <div class="card-body px-2">
                <h2 class="card-heading px-3">Sign Up</h2>
                <h5 class="card-subheading px-3 pb-3">It's quick and easy.</h5>
                <form>
                    <div class="row rone">
                        <div class="form-group col-md-5 fone">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group col-md-5 ftwo">
                            <input type="text" class="form-control ml-3" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row rtwo">
                        <div class="form-group col-md-12 fthree">
                            <input type="email" class="form-control" placeholder="Mobile number or Email">
                            <small class="text-muted">
                                <p class="para1 pt-2 pl-1">You'll need to confirm that email or phone belongs to you.
                                </p>
                            </small>
                        </div>
                    </div>
                    <div class="row rthree">
                        <div class="form-group col-md-5 ffour">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group col-md-5 ffive">
                            <input type="password" class="form-control ml-3" placeholder="Confirm password">
                        </div>
                        <small class="text-muted px-3">
                            <p class="para2 pl-3">Use 8 or more characters with a mix of letters,numbers &<br>symbols
                            </p>
                        </small>
                    </div>
                    <div class="row rfour">
                        <div class="col-md-4 ml-3">
                            <button type="submit" class="btn btn-primary mt-3"><span>Next step</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>