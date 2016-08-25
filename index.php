<?php
session_start();
if(isset($_GET['do']) == 'logout'){

    session_destroy();
    header("Refresh:0; url=signin.php");

}
if(isset($_SESSION['is_logged']) != TRUE) {
    header("Refresh:0; url=signin.php");
}else {;
include('func/header.php');
?>
    <section id="content">
        <section class="vbox">
            <header class="header bg-white b-b">
                <p>
                    <?php
                    echo dailyMessage();
                    ?>
                </p>
            </header>
            <section class="scrollable wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div ng-controller="formCtrl">

                            <section class="panel">

                                    <form name="userForm">
                                        <textarea class="form-control input-lg no-border" ng-model="msg"  rows="2" placeholder="Добавете бърза бележка..." required></textarea>
                                        <input type="hidden" name="id" ng-init="id=<?php echo $_SESSION['user_info']['id']; ?>;" ng-value="id"/>
                                        <input type="hidden" name="type" ng-init="type=1" ng-value="type"/>
                                    </form>
                                    <footer class="panel-footer bg-light lter">
                                        <button type="submit" ng-click="formsubmit(userForm.$valid);userForm.$setPristine();userForm.$setUntouched()"  ng-disabled="userForm.$invalid" class="btn btn-info pull-right">Добави</button>
                                        <ul class="nav nav-pills">
                                            <li><a href="index.html#"><i class="fa fa-location-arrow"></i></a></li>
                                            <li><a href="index.html#"><i class="fa fa-camera"></i></a></li>
                                            <li><a href="index.html#"><i class="fa fa-video-camera"></i></a></li>
                                            <li><a href="index.html#"><i class="fa fa-microphone"></i></a></li>
                                            <li class="dropdown"><a href="components.html#" class="dropdown-toggle"
                                                                    data-toggle="dropdown"><i
                                                        class="fa fa-cog text-default"></i> Тип <b class="caret"></b></a>
                                                <ul class="dropdown-menu text-left">
                                                    <li><a href="components.html#dropdown1" data-toggle="tab"><i class="fa fa-exclamation-triangle"></i> Важна</a></li>
                                                    <li><a href="components.html#dropdown1" data-toggle="tab"><i class="fa fa-bell"></i> Напомняне</a></li>
                                                    <li><a href="components.html#dropdown1" data-toggle="tab"><i class="fa fa-exclamation-triangle"></i> Задача</a></li>
                                                    <li><a href="components.html#dropdown1" data-toggle="tab"><i class="fa-sticky-note "></i> Бележка</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </footer>

                            </section>
                            <div ng-model="result" ng-bind-html="result">
                                {{result}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="clearfix m-b">
                                            <small class="text-muted pull-right">преди 5мин.</small>

                                            <div class="clear">
                                            <a href="#" class="thumb-sm pull-left m-r">
                                                <i class="fa fa-exclamation-triangle fa-3x" style="color:orange" aria-hidden="true"></i>

                                            </a>
                                                <a href="index.html#"><strong>Важно</strong></a>
                                                <small class="block text-muted">относно <a class="task-name">Organazy</a></small>
                                            </div>
                                        </div>

                                        <h4 >Защитаване на курсов проект в Softuni</h4>
                                        <small class=""><a href="index.html#"><i class="fa fa-clock-o"></i> Краен Срок:  01/06/2016 14:53</a></small>
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

                                            <div class="clear">
                                                <a href="#" class="thumb-sm pull-left m-r"> <i class="fa fa-bell fa-3x" style="color:limegreen;" aria-hidden="true"></i></a>
                                                <a href="index.html#"><strong>Напомняне</strong></a>
                                                <small class="block text-muted">относно <a class="task-name">Organazy</a></small>
                                            </div>
                                        </div>

                                        <h4 >Защитаване на курсов проект в Softuni</h4>
                                        <small class=""><a href="index.html#"><i class="fa fa-clock-o"></i> Краен Срок:  01/06/2016 14:53</a></small>
                                    </div>
                                    <footer class="panel-footer pos-rlt"><span class="arrow top"></span>
                                        <form class="pull-out"><input type="text"
                                                                      class="form-control no-border input-lg text-sm"
                                                                      placeholder="Write a comment..."></form>
                                    </footer>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="clearfix m-b">
                                            <small class="text-muted pull-right">преди 5мин.</small>

                                            <div class="clear">
                                                <a href="#" class="thumb-sm pull-left m-r">
                                                    <i class="fa fa-exclamation-triangle fa-3x" style="color:darkgrey" aria-hidden="true"></i>

                                                </a>
                                                <a href="index.html#"><strong>Важно</strong></a>
                                                <small class="block text-muted">относно <a class="task-name">Organazy</a></small>
                                            </div>
                                        </div>

                                        <h4 >Защитаване на курсов проект в Softuni</h4>
                                        <small class=""><a href="index.html#"><i class="fa fa-clock-o"></i> Краен Срок:  01/06/2016 14:53</a></small>
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

                                            <div class="clear">
                                                <a href="#" class="thumb-sm pull-left m-r"> <i class="fa fa-tasks fa-3x" style="color:deepskyblue;" aria-hidden="true"></i></a>
                                                <a href="index.html#"><strong>Напомняне</strong></a>
                                                <small class="block text-muted">относно <a class="task-name">Organazy</a></small>
                                            </div>
                                        </div>

                                        <h4 >Защитаване на курсов проект в Softuni</h4>
                                        <small class=""><a href="index.html#"><i class="fa fa-clock-o"></i> Краен Срок:  01/06/2016 14:53</a></small>
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
                    <div class="col-xs-2">


                                <div class="panel bg-success ">
                                    <div class="panel-body"><span class="timeline-icon"><i
                                                class="fa fa-bell-o fa-2x time-icon bg-success"></i></span> <span
                                            class=" h2 timeline-date">7:30</span> <h4><span>Wake up</span> Me
                                        </h4>
                                        <div class="m-t-sm timeline-action">
                                            <span class="h2 pull-left m-r-sm">4:51</span> left
                                            <span class="h2 pull-left m-r-sm">
                                                <button class="btn btn-sm btn-white"><i class="fa fa-pause"></i> Пауза</button>
                                                <button class="btn btn-sm btn-white"><i class="fa fa-times"></i> Спри</button>
                                            </span>
                                            <span></span>

                                        </div>
                                    </div>
                                </div>

                    </div>
                    <div class="col-xs-2">
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
                    </div>
                    <div class="col-lg-4">
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
<?php } ?>