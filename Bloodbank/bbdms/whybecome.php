<?php
    error_reporting(0);
    include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System | Why Become a Donor</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
        <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>

<body>

    <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Why Become a Donor</h1>

        <ol class="breadcrumb">

            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Why Become a Donor</li>
        </ol>

        <?php if($error){?>
            <div class="errorWrap">
                <strong>ERROR</strong>:
                <?php echo htmlentities($error); ?>
            </div><?php }
        else if($msg){?>
            <div class="succWrap">
                <strong>SUCCESS</strong>:
                    <?php echo htmlentities($msg); ?>
            </div><?php }?>





    There is a constant need for regular blood supply because blood can be stored for only a limited time before use.
    Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be available whenever and wherever it is needed.

    <br>
    <br>

    Blood is the most precious gift that anyone can give to another person — the gift of life.
    A decision to donate your blood can save a life, or even several if your blood is separated into its components
    — red cells, platelets and plasma — which can be used individually for patients with specific conditions. - The WHO

    <br>
    <br>

    Donations are essential for trauma patients and people undergoing a variety of situations, including surgeries,
    transplants, chronic illnesses, blood disorders and cancer. Because over 90% of people who are eligible to donate do not, there’s always a need for donors. - Live Well

             <br>
                <br>


    <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donor.php">Become a Donor Today</a>
        </div>
                          <br>

            <blockquote>
            <p style="
                border-radius: 3px;
                position: relative;  /*  <--- */
                font-style: italic;
                text-align: center;
                padding: 1rem 1.2rem;
                width: 90%;  /* create space for the quotes */
                color: #4a4a4a;
                margin: 1rem auto 2rem;
                color: #4a4a4a;
                background: #E8E8E8;">

                "Only those who have learned the power of sincere and selfless contribution
                experience life's deepest joy: true fulfillment." - Tony Robbins
            </p>
        </blockquote>

    </div>




    <br>
    <br>
    <br>


    <?php include('includes/footer.php');?>

</body>
