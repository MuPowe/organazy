<?php include('func/header.php'); ?>
    <section id="content">
        <section class="vbox">
            <header class="header bg-white b-b">
                <p>
                    <?php
                    $mysqli = new mysqli("localhost", "root", "xSy0knewpass", "organazy");

                    if ($mysqli->connect_errno) {
                        printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
                    }

                    $query = "SELECT * FROM  ORDER by ID DESC LIMIT 50,5";

                    if ($result = $mysqli->query($query)) {

                        /* fetch associative array */
                        while ($row = $result->fetch_assoc()) {
                            printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
                        }

                        /* free result set */
                        $result->free();
                    }

                    $time = date("H");
                    $timezone = date("e");
                    if ($time < "12") {
                        echo "Good morning";
                    } else
                        if ($time >= "12" && $time < "17") {
                            echo "Good afternoon";
                        } else
                            if ($time >= "17" && $time < "19") {
                                echo "Good evening";
                            } else
                                if ($time >= "19") {
                                    echo "Good night";
                                }

                    ?>
                </p>
            </header>
            <section class="scrollable wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading"><span class="label bg-dark">15</span> Inbox</header>
                            <section class="panel-body slim-scroll" data-height="230px">
                                <article class="media"><span class="pull-left thumb-sm"><img src="images/avatar.jpg"
                                                                                             class="img-circle"></span>
                                    <div class="media-body">
                                        <div class="pull-right media-xs text-center text-muted"><strong class="h4">12:18</strong><br>
                                            <small class="label bg-light">pm</small>
                                        </div>
                                        <a href="widgets.html#" class="h4">Bootstrap 3 released</a>
                                        <small class="block"><a href="widgets.html#" class="">John Smith</a> <span
                                                class="label label-success">Circle</span></small>
                                        <small class="block m-t-sm">Sleek, intuitive, and powerful mobile-first
                                            front-end framework for faster and easier web development.
                                        </small>
                                    </div>
                                </article>
                                <div class="line pull-in"></div>
                                <article class="media"><span class="pull-left thumb-sm text-center"><i
                                            class="fa fa-user fa fa-2x text-muted"></i></span>
                                    <div class="media-body">
                                        <div class="pull-right media-xs text-center text-muted"><strong class="h4">17</strong><br>
                                            <small class="label bg-light">feb</small>
                                        </div>
                                        <a href="widgets.html#" class="h4">Bootstrap documents</a>
                                        <small class="block"><a href="widgets.html#" class="">John Smith</a> <span
                                                class="label label-info">Friends</span></small>
                                        <small class="block m-t-sm">There are a few easy ways to quickly get started
                                            with Bootstrap, each one appealing to a different skill level and use
                                            case. Read through to see what suits your particular needs.
                                        </small>
                                    </div>
                                </article>
                                <div class="line pull-in"></div>
                                <article class="media">
                                    <div class="media-body">
                                        <div class="pull-right media-xs text-center text-muted"><strong class="h4">09</strong><br>
                                            <small class="label bg-light">jan</small>
                                        </div>
                                        <a href="widgets.html#" class="h4 text-success">Mobile first html/css
                                            framework</a>
                                        <small class="block m-t-sm">Bootstrap, Ratchet</small>
                                    </div>
                                </article>
                            </section>
                        </section>
                    </div>
                </div>
            </section>
        </section>
        <a href="index.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen"
           data-target="#nav"></a></section> <!-- /.vbox --> </section>
<script src="js/app.v2.js"></script> <!-- Bootstrap --> <!-- Sparkline Chart --> <!-- App --> </body>
</html>