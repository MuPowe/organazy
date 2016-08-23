<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Organazy - Уеб органайзер за вашето ежедневие</title>
    <meta name="description"
          content="app, web app, responsive, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" />
    <link rel="stylesheet" href="js/fullcalendar/fullcalendar.css" type="text/css" />
    <link rel="stylesheet" href="css/app.v2.css" type="text/css"/>
    <link rel="stylesheet" href="css/font.css" type="text/css" cache="false"/>
<body>
<section class="hbox stretch"> <!-- .aside -->
    <aside class="bg-primary aside-sm" id="nav">
        <section class="vbox">
            <header class="dker nav-bar nav-bar-fixed-top"><a class="btn btn-link visible-xs"
                                                              data-toggle="class:nav-off-screen" data-target="#nav"> <i
                    class="fa fa-bars"></i> </a> <a href="index.html#" class="nav-brand"
                                                    data-toggle="fullscreen">todo</a> <a class="btn btn-link visible-xs"
                                                                                         data-toggle="class:show"
                                                                                         data-target=".nav-user"> <i
                    class="fa fa-comment-o"></i> </a></header>
            <section> <!-- user -->
                <div class="bg-success nav-user hidden-xs pos-rlt">
                    <div class="nav-avatar pos-rlt"><a href="index.html#" class="thumb-sm avatar animated rollIn"
                                                       data-toggle="dropdown"> <img src="images/avatar.jpg" alt=""
                                                                                    class=""> <span
                            class="caret caret-white"></span> </a>
                        <ul class="dropdown-menu m-t-sm animated fadeInLeft"><span class="arrow top"></span>
                            <li><a href="index.html#">Настройки</a></li>
                            <li><a href="profile.html">Профил</a></li>
                            <li><a href="index.html#"> <span class="badge bg-danger pull-right">3</span> Известия
                            </a></li>
                            <li class="divider"></li>
                            <li><a href="docs.html">Помощ</a></li>
                            <li><a href="signin.html">Изход</a></li>
                        </ul>
                        <div class="visible-xs m-t m-b"><a href="index.html#" class="h3">Кичко Петков</a>
                            <p><i class="fa fa-map-marker"></i> София, България</p></div>
                    </div>
                    <div class="nav-msg"><a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"> <b
                            class="badge badge-white count-n">2</b> </a>
                        <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                            <div class="arrow left"></div>
                            <section class="panel bg-white">
                                <header class="panel-heading"><strong>Имате <span class="count-n">2</span>
                                    известия</strong></header>
                                <div class="list-group"><a href="index.html#" class="media list-group-item"> <span
                                        class="pull-left thumb-sm"> <img src="images/avatar.jpg" alt="John said"
                                                                         class="img-circle"> </span> <span
                                        class="media-body block m-b-none"> Използване на друг скрипт<br> <small
                                        class="text-muted">28 Aug 13</small> </span> </a> <a href="index.html#"
                                                                                             class="media list-group-item">
                                    <span class="media-body block m-b-none"> -<br> <small
                                            class="text-muted">27 Aug 13</small> </span> </a></div>
                                <footer class="panel-footer text-sm"><a href="index.html#" class="pull-right"><i
                                        class="fa fa-cog"></i></a> <a href="index.html#">Виж всички известия</a>
                                </footer>
                            </section>
                        </section>
                    </div>
                </div> <!-- / user --> <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <ul class="nav">
                        <li class="active"><a href="index.php"> <i class="fa fa-eye"></i> <span>Discover</span> </a></li>
                        <li><a href="notifications.php"> <b class="badge bg-primary pull-right">3</b> <i class="fa fa-envelope-o"></i> <span>Известия</span> </a></li>
                        <li><a href="diary.php"> <i class="fa fa-book"></i> <span>Дневник</span> </a></li>
                        <li><a href="tasks.php"> <i class="fa fa-tasks"></i> <span>Задачи</span> </a></li>
                        <li><a href="calendar.php"> <i class="fa fa-pencil"></i> <span>Календар</span> </a></li>
                        <li><a href="timeline.php"> <i class="fa fa-clock-o"></i> <span>Timeline</span> </a></li>
                    </ul>
                </nav> <!-- / nav --> <!-- note -->
               <!-- <div class="bg-danger wrapper hidden-vertical animated fadeInUp text-sm"><a href="index.html#"
                                                                                            data-dismiss="alert"
                                                                                            class="pull-right m-r-n-sm m-t-n-sm"><i
                        class="fa fa-times"></i></a> Добър вечер, Бачи Колю.
                </div> <!-- / note --> </section>
            <footer class="footer bg-gradient hidden-xs"><a href="modal.lockme.php?id=<?php $_SESSION['user_info']['id'];?>" data-toggle="ajaxModal"
                                                            class="btn btn-sm btn-link m-r-n-xs pull-right"> <i
                    class="fa fa-power-off"></i> </a> <a href="index.html#nav" data-toggle="class:nav-vertical"
                                                         class="btn btn-sm btn-link m-l-n-sm"> <i
                    class="fa fa-bars"></i> </a></footer>
        </section>
    </aside> <!-- /.aside --> <!-- .vbox -->
