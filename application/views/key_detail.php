<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <p class="lead">NEWS # <?php echo ucfirst($detail['key']);?></p>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Key:</th>
                            <td><?php echo $detail['key'];?></td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td><?php echo $detail['phone'];?></td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><?php echo $detail['email'];?></td>
                        </tr>
                        <tr>
                            <th style="width:30%">Full Name:</th>
                            <td><?php echo $detail['full_name'];?></td>
                        </tr>
                        <tr>
                            <?php
                            if($detail['is_active'] == 1)
                            {
                            ?>
                            <td>
                                <button onclick="confirm_deactive();" class="btn btn-danger">Deactivate Key</button>
                            </td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>
                                <button onclick="confirm_active();" class="btn btn-success">Activate Key</button>
                            </td>
                            <?php
                            }
                            ?>
                            <td>
                                <a href="<?php echo base_url();?>/index.php/admin/edit_key/<?php echo $detail['id'];?>" class="btn btn-success">Edit Key</a>
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
    var url = '<?php echo base_url();?>/index.php/admin/deactivate_key/<?php echo $detail['id'];?>';

    var r = confirm("Are you sure you want to deactivate this key?");
    if (r == true) {
        window.location = url;
    } else {

    }
}

function confirm_active()
{
    var url = '<?php echo base_url();?>/index.php/admin/activate_key/<?php echo $detail['id'];?>';

    var r = confirm("Are you sure you want to activate this key?");
    if (r == true) {
        window.location = url;
    } else {

    }
}
</script>