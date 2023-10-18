<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../../bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/general.css">
    <link rel="stylesheet" href="../../styles/titleBar/titleBar.css">
    <link rel="stylesheet" href="../../styles/sdashboard.css">

</head>

<body>
    <?php
    require_once("../../include/titleBar.php");
    ?>

    <div class="container">
        <div class="dash-board-content grid">
            <div class="contents">
                <div class="contents-summury grid">
                    <div class="general-info flex">
                        <div class="current-year flex">
                            <div class="semesters flex">
                                <div class="icon-pro flex"><i class="bi-graph-up"></i></div>
                                <div class="course-progress">
                                    <div class="semester">
                                        <span class="courses">8/20 Cours</span>
                                        <div class="progression-container">
                                            <div class="progression"> .</div>
                                        </div>
                                    </div>
                                    <div class="semester">
                                        <span class="courses">20/30 Cours</span>
                                        <div class="progression-container">
                                            <div class="progression"> .</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="averages flex">
                                <div class="semester-av">
                                    <div class="average">
                                        <div class="title-semester">Semester 1</div>
                                        <div class="semester-average">
                                            <span class="semester">80%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="average">
                                    <div class="title-semester">Semester 2</div>
                                    <div class="semester-average">
                                        <span class="semester">80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="total-average flex">
                        <div class="icon"> <i class="bi-bar-chart-line"></i> </div>
                        <div class="anual">
                            <div class="yearly-average">80%</div>
                            <div class="total-title">Moyenne Anuelle</div>
                        </div>

                    </div>
                    <div class="complements flex">
                        <div class="icon"> <i class="bi-arrow-down-left-circle"></i> </div>
                       <div class="complements-info">
                           <div class="complements-number">12</div>
                           <div class="complements-title">Complements Course</div>
                       </div>
                    </div>
                </div>
                <div class="examination-time">

                    <div class="current-max">
                        <div class="infos-academiques">
                            <h4>Informations académiques</h4>
                            <table>
                                <thead>
                                   <tr>
                                        <th>Course Name</th>
                                        <th>Tp</th>
                                        <th>Td</th>
                                        <th>Examen</th>
                                   </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Informatique</td>
                                    <td>12</td>
                                    <td>12</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Labo</td>
                                    <td>92</td>
                                    <td>88</td>
                                    <td>95</td>
                                </tr>
                                <tr>
                                    <td>C/C++</td>
                                    <td>75</td>
                                    <td>80</td>
                                    <td>85</td>
                                </tr>
                                <tr>
                                    <td>Python</td>
                                    <td>90</td>
                                    <td>92</td>
                                    <td>88</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="comingEvent">
                <div class="coming">Coming Soon</div>
                <div class="coming-icon flex">
                    <div class="icon-event flex"> <i class="bi-calendar-check"></i> </div>
                    <div class="coming-contents">
                        <div class="coming-event flex">
                            <div class="date-event">20/09/2024</div>
                            <div class="title-event">Examen C++</div>
                        </div>
                        <div class="description">L'examen est avec notes , 12heure 00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        <?php include_once ("../../scripts/titleBar.js")?>
    </script>
</body>
</html>