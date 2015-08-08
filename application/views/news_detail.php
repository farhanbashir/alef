<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <p class="lead">NEWS # <?php echo ucfirst($detail['news_id']);?></p>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Title:</th>
                            <td><?php echo $detail['title'];?></td>
                        </tr>
                        <tr>
                            <th>Intro:</th>
                            <td><?php echo $detail['intro'];?></td>
                        </tr>
                        <tr>
                            <th>Detail:</th>
                            <td><?php echo $detail['detail'];?></td>
                        </tr>
                        <tr>
                            <th>Date:</th>
                            <td><?php echo $detail['date'];?></td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td>
                                <?php
                                    echo ($detail['is_active'] == 1) ? "<span class='label label-success'>Active</span>" : "<span class='label label-danger'>Inactive</span>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Image:</th>
                            <td><img width="200" height="200" src="<?php echo $detail['image'];?>" /></td>
                        </tr>
                        <tr>
                            <th>Image:</th>
                            <td><?php echo $detail['image'];?></td>
                        </tr>
                        <tr>
                            <?php
                            if($detail['is_active'] == 1)
                            {
                            ?>
                            <td>
                                <button onclick="confirm_deactive();" class="btn btn-danger">Deactivate News</button>
                            </td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>
                                <button onclick="confirm_active();" class="btn btn-success">Activate News</button>
                            </td>
                            <?php
                            }
                            ?>
                            <td>
                                <a href="<?php echo base_url();?>/index.php/admin/edit_news/<?php echo $detail['news_id'];?>" class="btn btn-success">Edit News</a>
                            </td>
                        </tr>
                    </tbody></table>
            </div>
        </div>
    </div>
</section><!-- /.content -->
<script>
function confirm_deactive()
{
    var url = '<?php echo base_url();?>/index.php/admin/deactivate_news/<?php echo $detail['news_id'];?>';

    var r = confirm("Are you sure you want to deactivate this news?");
    if (r == true) {
        window.location = url;
    } else {

    }
}

function confirm_active()
{
    var url = '<?php echo base_url();?>/index.php/admin/activate_news/<?php echo $detail['news_id'];?>';

    var r = confirm("Are you sure you want to activate this news?");
    if (r == true) {
        window.location = url;
    } else {

    }
}
</script>