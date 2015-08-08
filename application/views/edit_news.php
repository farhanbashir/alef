<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-6">
            <p class="lead">NEWS # <?php echo ucfirst($detail['news_id']);?></p>
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
                                <form name="edit_news" id="edit_news" action="" method="POST" onsubmit="return check_edit_news();" enctype="multipart/form-data">
                                <input name="is_submit" id="is_submit" value="1" type="hidden" />
                                <input name="uniqid" id="uniqid" value="<?php echo $uniqid;?>" type="hidden" />
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control" value="<?php echo $detail['title'];?>" id="title" name="title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Intro</label>
                                            <textarea class="form-control" id="intro" name="intro" rows="3" placeholder="Enter ..."><?php echo $detail['intro'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Detail</label>
                                            <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Enter ..."><?php echo $detail['detail'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Date</label>
                                            <input type="text" class="form-control" value="<?php echo $detail['date'];?>" id="date" name="date" placeholder="Date">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <input type="file" id="image" name="image">
                                            <?php
                                            if($detail['image'] != "")
                                            {    
                                            ?>
                                            <p class="help-block">
                                                <img width="300" height="300" src="<?php echo $detail['image'];?>" />
                                            </p>
                                            <?php
                                            }    
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="is_active" class="form-control">
                                                <option value="0" <?php echo ($detail['is_active'] == 0) ? 'selected' : '';?>>Inactive</option>
                                                <option value="1" <?php echo ($detail['is_active'] == 1) ? 'selected' : '';?>>Active</option>
                                            </select>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit News</button>
                                    </div>
                                </form>
                            </div>

            </div>
        </div>
    </div>
</section><!-- /.content -->
<script>
function check_edit_news()
{
    var count = 0;

    if($('#title').val() == '')
    {
        count++;
        $('#title').parent().addClass('has-error');
    }
    else
    {
        $('#title').parent().removeClass('has-error');   
    }

    if($('#intro').val() == '')
    {
        count++;
        $('#intro').parent().addClass('has-error');
    }
    else
    {
        $('#intro').parent().removeClass('has-error');   
    }

    if($('#detail').val() == '')
    {
        count++;
        $('#detail').parent().addClass('has-error');
    }
    else
    {
        $('#detail').parent().removeClass('has-error');   
    }

    if($('#date').val() == '')
    {
        count++;
        $('#date').parent().addClass('has-error');
    }
    else
    {
        $('#date').parent().removeClass('has-error');   
    }


    if(count == 0)
        return true;
    else
        return false;
}
</script>