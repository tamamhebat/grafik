<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Demo_viewer Read</h2>
        <table class="table">
	    <tr><td>Numberofview</td><td><?php echo $numberofview; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('demo_viewer') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>