<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Organazy - Уеб органайзер за вашето ежедневие</title>
    <meta name="description"
          content="app, web app, responsive, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
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
                        <li class="active"><a href="index.html"> <i class="fa fa-eye"></i> <span>Discover</span> </a></li>
                        <li><a href="mail.html"> <b class="badge bg-primary pull-right">3</b> <i class="fa fa-envelope-o"></i> <span>Известия</span> </a></li>
                        <li><a href="tasks.html"> <i class="fa fa-book"></i> <span>Дневник</span> </a></li>
                        <li><a href="tasks.html"> <i class="fa fa-tasks"></i> <span>Задачи</span> </a></li>
                        <li><a href="notes.html"> <i class="fa fa-pencil"></i> <span>Бележки</span> </a></li>
                        <li><a href="timeline.html"> <i class="fa fa-clock-o"></i> <span>Timeline</span> </a></li>
                    </ul>
                </nav> <!-- / nav --> <!-- note -->
               <!-- <div class="bg-danger wrapper hidden-vertical animated fadeInUp text-sm"><a href="index.html#"
                                                                                            data-dismiss="alert"
                                                                                            class="pull-right m-r-n-sm m-t-n-sm"><i
                        class="fa fa-times"></i></a> Добър вечер, Бачи Колю.
                </div> <!-- / note --> </section>
            <footer class="footer bg-gradient hidden-xs"><a href="modal.lockme.html" data-toggle="ajaxModal"
                                                            class="btn btn-sm btn-link m-r-n-xs pull-right"> <i
                    class="fa fa-power-off"></i> </a> <a href="index.html#nav" data-toggle="class:nav-vertical"
                                                         class="btn btn-sm btn-link m-l-n-sm"> <i
                    class="fa fa-bars"></i> </a></footer>
        </section>
    </aside> <!-- /.aside --> <!-- .vbox -->
    <section id="content">
        <section class="vbox">
            <header class="header bg-white b-b"><p>Добър вечер, Бачи Колю!</p></header>
            <section class="scrollable wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="panel">
                            <form><textarea class="form-control input-lg no-border" rows="2"
                                            placeholder="Добавете бърза бележка..."></textarea></form>
                            <footer class="panel-footer bg-light lter">
                                <button class="btn btn-info pull-right">Добави</button>
                                <ul class="nav nav-pills">
                                    <li><a href="index.html#"><i class="fa fa-location-arrow"></i></a></li>
                                    <li><a href="index.html#"><i class="fa fa-camera"></i></a></li>
                                    <li><a href="index.html#"><i class="fa fa-video-camera"></i></a></li>
                                    <li><a href="index.html#"><i class="fa fa-microphone"></i></a></li>
                                </ul>
                            </footer>
                        </section>
                        <div class="row">
                            <h1></h1>
                            <div class="col-lg-6 col-sm-6">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="clearfix m-b">
                                            <small class="text-muted pull-right">преди 5мин.</small>

                                            <div class="clear"><a href="index.html#"><strong>Важно!</strong></a>
                                                <small class="block text-muted">относно <a class="task-name">Organazy</a></small>
                                            </div>
                                        </div>
                                        <p> Защитаване на курсов проект в Softuni </p>
                                        <small class=""><a href="index.html#"><i class="fa fa-clock-o"></i> 01/06/2016 </a> - добавена</small>

                                    </div>
                                    <footer class="panel-footer pos-rlt"><span class="arrow top"></span>
                                        <form class="pull-out"><input type="text"
                                                                      class="form-control no-border input-lg text-sm"
                                                                      placeholder="Write a comment..."></form>
                                    </footer>
                                </section>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="clearfix m-b">
                                            <small class="text-muted pull-right">преди 5мин.</small>

                                            <div class="clear"><a href="index.html#"><strong>Напомняне</strong></a>
                                                <small class="block text-muted">относно <a class="task-name">Organazy</a></small>
                                            </div>
                                        </div>
                                        <p> Защитаване на курсов проект в Softuni </p>
                                        <small class=""><a href="index.html#"><i class="fa fa-clock-o"></i> 01/06/2016 </a> - добавена</small>

                                    </div>
                                    <footer class="panel-footer pos-rlt"><span class="arrow top"></span>
                                        <form class="pull-out"><input type="text"
                                                                      class="form-control no-border input-lg text-sm"
                                                                      placeholder="Write a comment..."></form>
                                    </footer>
                                </section>
                            </div>
                        </div>
                        <section class="panel">
                            <header class="panel-heading">
                                <ul class="nav nav-pills pull-right">
                                    <li><a href="widgets.html#" class="panel-toggle text-muted"><i
                                            class="fa fa-caret-down text-active"></i><i
                                            class="fa fa-caret-up text"></i></a></li>
                                </ul>
                                News <span class="badge bg-info">32</span></header>
                            <section class="panel-body">
                                <article class="media">
                                    <div class="pull-left"><span class="fa fa-stack fa-2x"> <i
                                            class="fa fa-circle text-info fa-stack-2x"></i> <i
                                            class="fa fa-bold text-white fa-stack-1x"></i> </span></div>
                                    <div class="media-body"><a href="widgets.html#" class="h4">Bootstrap 3: What you
                                        need to know</a>
                                        <small class="block m-t-xs">Sleek, intuitive, and powerful mobile-first
                                            front-end framework for faster and easier web development.
                                        </small>
                                        <em class="text-xs">Posted on <span class="text-danger">Feb 23, 2013</span></em>
                                    </div>
                                </article>
                                <div class="line pull-in"></div>
                                <article class="media">
                                    <div class="pull-left"><span class="fa fa-stack fa-2x"> <i
                                            class="fa fa-circle text-primary fa-stack-2x"></i> <i
                                            class="fa fa-file text-white fa-stack-1x"></i> </span></div>
                                    <div class="media-body"><a href="widgets.html#" class="h4">Bootstrap
                                        documents</a>
                                        <small class="block m-t-xs">There are a few easy ways to quickly get started
                                            with Bootstrap, each one appealing to a different skill level and use
                                            case. Read through to see what suits your particular needs.
                                        </small>
                                        <em class="text-xs">Posted on <span class="text-danger">Feb 12, 2013</span></em>
                                    </div>
                                </article>
                                <div class="line pull-in"></div>
                                <article class="media">
                                    <div class="pull-left"><span class="fa fa-stack fa-2x"> <i
                                            class="fa fa-circle text-default fa-stack-2x"></i> <i
                                            class="fa fa-star text-white fa-stack-1x"></i> </span></div>
                                    <div class="media-body"><a href="widgets.html#" class="h4 text-success">Mobile
                                        first html/css framework</a>
                                        <small class="block m-t-xs">Bootstrap, Ratchet</small>
                                        <em class="text-xs">Posted on <span class="text-danger">Feb 05, 2013</span></em>
                                    </div>
                                </article>
                            </section>
                        </section>

                        <div class="text-center m-b"><i class="fa fa-spinner fa fa-spin"></i></div>
                    </div>
                    <div class="col-lg-4">
                        <section class="panel bg-info lter no-borders">
                            <div class="panel-body"><a class="pull-right" href="index.html#"><i
                                    class="fa fa-map-marker"></i></a> <span class="h4">McLean, VA</span>
                                <div class="text-center padder m-t"><span class="h1"><i
                                        class="fa fa-cloud text-muted"></i> 68°</span></div>
                            </div>
                            <footer class="panel-footer lt">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <small class="text-muted block">Humidity</small>
                                        <span>56 %</span></div>
                                    <div class="col-xs-4">
                                        <small class="text-muted block">Precip.</small>
                                        <span>0.00 in</span></div>
                                    <div class="col-xs-4">
                                        <small class="text-muted block">Winds</small>
                                        <span>7 mp</span></div>
                                </div>
                            </footer>
                        </section>
                        <section class="panel" id="progressbar">
                            <header class="panel-heading">
                                <ul class="nav nav-pills pull-right">
                                    <li><a href="components.html#" data-toggle="progress" data-target="#progressbar">Random</a>
                                    </li>
                                </ul>
                                Progress bar
                            </header>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a class="note-name" href="#">проект Organazy</a>
                                    <div class="progress progress-xs m-t-sm">
                                        <div class="progress-bar progress-bar-info" data-toggle="tooltip"
                                             data-original-title="40%" style="width: 40%"></div>
                                    </div>
                                    <a class="note-name" href="#">Курсов проект</a>
                                    <div class="progress progress-xs progress-striped">
                                        <div class="progress-bar progress-bar-success" data-toggle="tooltip"
                                             data-original-title="10%" style="width: 10%"></div>
                                    </div>
                                    <a class="note-name" href="#">Нещо друго</a>
                                    <div class="progress progress-xs progress-striped">
                                        <div class="progress-bar progress-bar-warning" data-toggle="tooltip"
                                             data-original-title="50%" style="width: 50%"></div>
                                    </div>
                                    <a class="note-name" href="#">Време да дишам</a>
                                    <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-danger" data-toggle="tooltip"
                                             data-original-title="30%" style="width: 30%"></div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <section class="vbox">
                            <section class="panel">


                                <header class="panel-heading">
                                    <div class="col-lg-12"><input type="text" class="form-control rounded"></div>
                                    <div class="btn-group btn-group-justified">
                                        <a href="#" class="btn btn-default"><i class="fa fa-plus"></i> проект</a>
                                        <a href="#" class="btn btn-info"><i class="fa fa-plus"></i> задача</a>
                                        <a href="#" class="btn btn-success"><i class="fa fa-plus"></i> напомняне</a>
                                    </div>
                                </header>

                                <div class="list-group bg-white"><a href="dashboard-1.html#" class="list-group-item text-ellipsis"> <span
                                        class="badge bg-danger">7:30</span> Meet a friend </a> <a href="dashboard-1.html#"
                                                                                                  class="list-group-item text-ellipsis">
                                    <span class="badge bg-success">9:30</span> Have a kick off meeting with .inc company </a> <a
                                        href="dashboard-1.html#" class="list-group-item text-ellipsis"> <span
                                        class="badge bg-light">19:30</span> Milestone release </a></div>
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