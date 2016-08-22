<?php include('func/header.php');?>
    <section id="content">
        <section class="hbox stretch" id="noteapp">
            <aside>
                <section class="vbox">
                    <header class="header bg-light lter bg-gradient b-b">
                        <button class="btn btn-success pull-right btn-sm" id="new-note"><i class="fa fa-plus"></i> NEW
                        </button>
                        <p>Notes</p></header>
                    <section class="bg-light lter">
                        <section class="hbox stretch"> <!-- .aside -->
                            <aside>
                                <section class="vbox b-b">
                                    <section class="paper" id="note-detail"> <!-- note detail -->
                                        <script type="text/template" id="note-template"> <textarea type="text"
                                                                                                   class="form-control scrollable"
                                                                                                   placeholder="Type your note here"><%- description %></textarea> </script>
                                        <!-- note detail --> </section>
                                </section>
                            </aside> <!-- /.aside --> </section>
                    </section>
                </section>
            </aside> <!-- .aside -->
            <aside class="aside-lg bg-light lter b-l" id="note-list">
                <section class="vbox">
                    <header class="header bg-light lter bg-gradient clearfix b-b">
                        <div class="input-group m-t-sm"><span class="input-group-addon input-sm"><i
                                class="fa fa-search"></i></span> <input type="text" class="form-control input-sm"
                                                                        id="search-note" placeholder="search"></div>
                    </header>
                    <section class="scrollable">
                        <div class="wrapper"> <!-- note list -->
                            <ul id="note-items" class="list-group"></ul> <!-- templates -->
                            <script type="text/template" id="item-template">
                                <div class="view" id="note-<%- id %>">
                                    <button class="destroy close hover-action">&times;</button>
                                    <div class="note-name"><strong> <%- (name && name.length) ? name : 'New note'
                                        %> </strong></div>
                                    <div class="note-desc"> <%- description.replace(name,'').length ?
                                        description.replace(name,'') : 'empty note' %>
                                    </div>
                                    <span class="text-xs text-muted"><%- moment(parseInt(date)).format('MMM Do, h:mm a') %></span>
                                </div> </script> <!-- / template --> <!-- note list --> </div>
                    </section>
                </section>
            </aside> <!-- /.aside --> </section>
    </section> <!-- /.vbox --> </section>
<script src="js/app.v2.js"></script> <!-- Bootstrap --> <!-- App -->
<script src="js/libs/underscore-min.js"></script>
<script src="js/libs/backbone-min.js"></script>
<script src="js/libs/backbone.localStorage-min.js"></script>
<script src="js/libs/moment.min.js"></script> <!-- Notes -->
<script src="js/apps/notes.js" cache="false"></script>
</body>
</html>