<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-6">
            <p class="lead">CREATE KEY</p>
            <?php
            if($error != "")
            {
            ?>    
            <div class="alert alert-danger alert-dismissable">
                <i class="fa fa-ban"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>Alert!</b> <?php echo $error;?>
            </div>
                
            <?php
            }    
            ?>
            <div class="table-responsive">

                <div class="box box-primary">

                                <!-- form start -->
                                <form name="edit_event" id="edit_event" action="" method="POST" onsubmit="return check_key();">
                                <input name="is_submit" id="is_submit" value="1" type="hidden" />
                                <input name="uniqid" id="uniqid" value="<?php echo $uniqid;?>" type="hidden" />
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name">Key</label>
                                            <input type="text" class="form-control" value="<?php //echo $detail['key'];?>" id="key" name="key" placeholder="Key">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Phone</label>
                                            <input type="text" class="form-control" value="<?php //echo $detail['phone'];?>" id="phone" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="text" class="form-control" value="<?php //echo $detail['email'];?>" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control" value="<?php //echo $detail['full_name'];?>" id="full_name" name="full_name" placeholder="Full Name">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Create Key</button>
                                    </div>
                                </form>
                            </div>

            </div>
        </div>
    </div>
</section><!-- /.content -->
<script>
function check_key()
{
    var count = 0;

    if($('#key').val() == '')
    {
        count++;
        $('#key').parent().addClass('has-error');
    }
    else
    {
        $('#key').parent().removeClass('has-error');   
    }

    if($('#phone').val() == '')
    {
        count++;
        $('#phone').parent().addClass('has-error');
    }
    else
    {
        $('#phone').parent().removeClass('has-error');   
    }

    if($('#email').val() == '')
    {
        count++;
        $('#email').parent().addClass('has-error');
    }
    else
    {
        $('#email').parent().removeClass('has-error');   
    }

    if($('#full_name').val() == '')
    {
        count++;
        $('#full_name').parent().addClass('has-error');
    }
    else
    {
        $('#full_name').parent().removeClass('has-error');   
    }


    if(count == 0)
        return true;
    else
        return false;
}
</script>