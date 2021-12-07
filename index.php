<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dean Webster">
    <meta name="revised" content="DW 4/8/2021">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Trace and Dean Webster's Home</title>
    <link rel="stylesheet" href="css/main.css">
    
</head>

<body>
<!-- Page Header -->
<?php include("header.php")?>
<!-- Page Header -->
<!-- Navbar  -->
    <?php include("main_nav.php")?>
<!-- End Navbar  -->

<!-- Page Contents -->
    <div class="row mb-4">
        <div class="col-md-4 themed-grid-col events">
            <h4>Event Calendars</h4>

            <ul class="main-ul">
                <li><a href="calendars/all.php">All Calendars (in one view)</a></li>
                <li><a href="calendars/family.php">Family Events Calendar<a></li>
                <li><a href="calendars/birthdays.php">Family Birthday Calendar</a></li>
                <li><a href="calendars/church.php">Church of the Apostles Calendar</a></li>
                <li><a href="calendars/holiday.php">US Holiday Calendar</a></li>
            </ul>

            <h4>Family Genealogy Info</h4>
            <a href="genealogy/index.htm">Family Geneology</a>

            <h4>Photo Albums</h4>

            <ul class="main-ul">
                <h5><em>Cruises</em></h5>
                <li><a href="albums/2019cruise/index.html">Caribbean Cruise</a></li>
                <li><a href="albums/2018cruise/index.html">Bahamas Cruise</a></li>
                <br>
                <h5><em>Webster Family Reunions</em></h5>
                <li><a class="dropdown-item" href="albums/2009-webster_reunion/index.html">2009 Reunion</a></li>
                <li><a class="dropdown-item" href="albums/2008-webster_reunion/index.html">2008 Reunion</a></li>
                <li><a class="dropdown-item" href="albums/2005-webster_reunion/index.html">2005 Reunion</a></li>
                <li><a class="dropdown-item" href="albums/2004-webster_reunion/index.html">2004 Reunion</a></li>
                <li><a class="dropdown-item" href="albums/2002-webster_reunion/index.html">2002 Reunion</a></li>

            </ul>
        </div>


        <div class="col-md-8 themed-grid-col albums-list">
            <h3 class="feature-title">Photo Albums</h3>
            <h5><a href="albums/2019cruise/index.html" class="album-list">Caribbean Cruise (September 21-28, 2019)</a></h5>
            <p class="p1">Trip to Grand Turk(Turks and Caicos Islands), San Juan (Puerto Rico), and Amber Cove (Dominican Republic).

                <h5><a href="albums/2018cruise/index.html" class="album-list">Bahamas Cruise (May 12-15, 2018)</a></h5>
                <p class="p1">Trip to the Bahamas. Included Nassau, and Half Moon Cay. We did not do much at Half Moon Cay, because of the weather. We were unable to go ashore until about one hour before departure time. The daughters went ashore for a brief period,
                    but there was not much for them to do due to the inclement weather.
        </div>
    </div>

    <!-- End Page Contents -->
<!-- Footer  -->
 <?php include("footer.php")?>
<!-- Footer end -->
    <!-- Do not edit or move must be at end of body tag -->
    <!-- Optional JavaScript  for Bootstrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>