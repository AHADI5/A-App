<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashBoard</title>
<!--    Including titleBarSection and menuSection Css files-->
    <link rel="stylesheet" href="../../styles/general.css">
    <link rel="stylesheet" href="../../styles/menuSection.css">
    <link rel="stylesheet" href="../../styles/menuSection.css">
    <link rel="stylesheet" href="../../bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/sdashboard.css">
</head>


<body>
<div class="content flex">
    <?php include_once("../../include/menuSection.php")?>
    <div class="title-page-content">
        <div class="title-bar-page grid">
            <div class="title-page flex">Dash Board</div>
            <div class="title-bar flex"><?php include_once ("../../include/titleBarSection.php")?></div>
        </div>
        <div class="page-content">
            <div class="overview-section">
                <div class="overviews grid">
                    <div class="students overview">
                        <div class="icon"><img src="../../imgs/students.png" alt=""> </div>
                        <div class="title-number">
                            <div class="title">Students</div>
                            <div class="number">1045</div>
                        </div>
                    </div>
                    <div class="teachers overview">
                        <div class="icon"><img src="../../imgs/teacher.png" alt=""> </div>
                        <div class="title-number">
                            <div class="title">Teachers</div>
                            <div class="number">7854</div>
                        </div>

                    </div>
                    <div class="courses overview">
                        <div class="icon"><img src="../../imgs/book-stack.png" alt=""> </div>
                        <div class="title-number">
                            <div class="title">Cours</div>
                            <div class="number">485</div>
                        </div>

                    </div>
                    <div class="departement overview">
                        <div class="icon"><img src="../../imgs/networking.png" alt=""> </div>
                       <div class="title-number">
                           <div class="title">Departements</div>
                           <div class="number">485</div>
                       </div>

                    </div>
                    <div class="promotions overview">
                        <div class="icon"><img src="../../imgs/score.png" alt=""> </div>
                       <div class="title-number">
                           <div class="title">Promotions</div>
                           <div class="number">485</div>
                       </div>
                    </div>
                </div>
            </div>

            <div class="recent-event">
                <div class="recent">

                </div>

                <div class="events">

                </div>
            </div>


        </div>

    </div>


</div>


<script src="../../scripts/sectionTitle.js"></script>
</body>
</html>