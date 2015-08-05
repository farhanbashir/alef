<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-6">
            <p class="lead">FEED # <?php echo ucfirst($detail['feed_id']);?></p>
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
                                <form name="edit_event" id="edit_event" action="" method="POST" onsubmit="return check_edit_feed();" enctype="multipart/form-data">
                                <input name="is_submit" id="is_submit" value="1" type="hidden" />
                                <input name="uniqid" id="uniqid" value="<?php echo $uniqid;?>" type="hidden" />
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="end_date">Start Month</label>
                                            <select id="from" name="from" class="form-control">
                                                <?php for($i=0;$i<36;$i++) { ?>
                                                <option <?php if($detail['from'] == $i){ echo "selected='selected'";}?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date">End Month</label>
                                            <select id="to" name="to" class="form-control">
                                                <?php for($i=0;$i<36;$i++) { ?>
                                                <option <?php if($detail['to'] == $i){ echo "selected='selected'";}?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date">Milestone</label>
                                            <select id="milestone_id" name="milestone_id" class="form-control">
                                                <?php foreach($milestones as $milestone) { ?>
                                                <option <?php if($detail['milestone_id'] == $milestone['milestone_id']){ echo "selected='selected'";}?> value="<?php echo $milestone['milestone_id'];?>"><?php echo $milestone['milestone_name'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date">Feed</label>
                                            <textarea class="form-control" id="feed" name="feed" rows="3" placeholder="Enter ..."><?php echo $detail['feed'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date">Feed Arabic</label>
                                            <textarea class="form-control" id="feed_ar" name="feed_ar" rows="3" placeholder="Enter ..."><?php echo $detail['feed_ar'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date">Intro</label>
                                            <textarea class="form-control" id="intro" name="intro" rows="3" placeholder="Enter ..."><?php echo $detail['intro'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date">Intro Arabic</label>
                                            <textarea class="form-control" id="intro_ar" name="intro_ar" rows="3" placeholder="Enter ..."><?php echo $detail['intro_ar'];?></textarea>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit Feed</button>
                                    </div>
                                </form>
                            </div>

            </div>
        </div>
    </div>
</section><!-- /.content -->
<script>
function check_edit_feed()
{
    var count = 0;

    if($('#feed').val() == '')
    {
        count++;
        $('#feed').parent().addClass('has-error');
    }
    if($('#feed_ar').val() == '')
    {
        count++;
        $('#feed_ar').parent().addClass('has-error');
    }
    if($('#intro').val() == '')
    {
        count++;
        $('#intro').parent().addClass('has-error');
    }
    if($('#intro_ar').val() == '')
    {
        count++;
        $('#intro_ar').parent().addClass('has-error');
    }


    if(count == 0)
        return true;
    else
        return false;
}
</script>