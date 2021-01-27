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

    <title>BloodBank & Donor Management System | Become A Donor</title>
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
        <h1 class="mt-4 mb-3">About Us</h1>

        <ol class="breadcrumb">

            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">About Us</li>
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

    </div>

    <div class="container">

        <img src="images/Company Handshake.jpg" width="100%" height="400" title="Logo of a company" alt="Logo of a company" align="middle" />

        <br>
        <br>

        Canadian Blood Services is a not-for-profit charitable organization that operates independently from government.
        Canadian Blood Services has great pride in constant humanitarian work.
        With the amount of volunteers numbering 17,000+, we strive to help each Canadian in need.
        We recruit and collect blood, plasma and platelet donations at over 13,000 donation events every year.
        We have 35 permanent donor centres and over 4000 mobile donor centres across Canada.
        The Canadian Blood Services was established as Canada's blood authority in all provinces and territories except for Quebec in 1998.


        <br>
        <br>

        Join us today to give blood today and support our network of over

        <?php
            $sql = "SELECT * FROM tblblooddonors";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);

            $aboutCounter = 0;
            $plusSign = "+";

            foreach($results as $result)
            {
                $aboutCounter++;
            }

            echo $aboutCounter;
            echo $plusSign;
        ?>

        blood donors.
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

                “It is under the greatest adversity that there
                exists the greatest potential for doing good,
                both for oneself and others." ― Dalai Lama XIV
            </p>
        </blockquote>

        <br>




    </div>

    <?php include('includes/footer.php');?>

</body>
