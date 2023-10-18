<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
<!--    Including css files -->
    <link rel="stylesheet" href="../../styles/general.css">
    <link rel="stylesheet" href="../../styles/menuSection.css">
    <link rel="stylesheet" href="../../bootstrap-icons/bootstrap-icons.css">
</head>
<body>
<div class="content flex">
    <?php include_once("../../include/menuSection.php")?>
    <div class="title-page-content">
        <div class="title-bar-page grid">
            <div class="title-page flex">Etudiants</div>
            <div class="title-bar flex"><?php include_once ("../../include/titleBarSection.php")?></div>
        </div>
        <div class="page-content">
            <div class="students">
                <div class="student-list">
                    <div class="toggle-title flex">
                        <span class="list-title">Student</span>
                        <span class="toggle"> <i class="bi bi-three-dots"></i> </span>
                    </div>
                    <div class="student-search">
                        <form action="">
                            <input type="search" name="studentSearch" id="studentSearch" placeholder="Search for Student or Id">
                        </form>
                    </div>
                </div>
                <div class="details">Details</div>
            </div>
        </div>
    </div>

</div>
<script src="../../scripts/sectionTitle.js"></script>
</body>
</html>