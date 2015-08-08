<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-6">
            <p class="lead">CREATE NEWS</p>
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
                                <form name="create_news" id="create_news" action="" method="POST" onsubmit="return check_news();" enctype="multipart/form-data">
                                <input name="is_submit" id="is_submit" value="1" type="hidden" />
                                <input name="uniqid" id="uniqid" value="<?php echo $uniqid;?>" type="hidden" />
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control" value="" id="title" name="title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Intro</label>
                                            <textarea class="form-control" id="intro" name="intro" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Detail</label>
                                            <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Date</label>
                                            <input type="text" class="form-control" value="" id="date" name="date" placeholder="Date">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <input type="file" id="image" name="image">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="is_active" class="form-control">
                                                <option value="0" >Inactive</option>
                                                <option value="1" >Active</option>
                                            </select>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Create News</button>
                                    </div>
                                </form>
                            </div>

            </div>
        </div>
    </div>
</section><!-- /.content -->
<script>
function check_news()
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