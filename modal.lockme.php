<?php session_start();?>
<div class="modal-over">
    <div class="modal-center animated flipInX" style="width:300px;margin:-30px 0 0 -150px;">
        <div class="pull-left thumb m-r"><img src="images/avatar.jpg" class="img-thumbnail"></div>
        <div class="clear">
            <p class="text-white"><?php echo $_SESSION['user_info']['user_name']; ?> <a class="text-muted pull-right" href="?do=logout" style="color:white;"> [Излез <i class="fa fa-sign-out "></i>]</a></p>
            <div class="input-group input-s"><input type="password" class="form-control text-sm" placeholder="Enter pwd to continue">

                <span class="input-group-btn">
                    <button class="btn btn-success" type="button" data-dismiss="modal">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>