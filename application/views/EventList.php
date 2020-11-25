<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    
    .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>
<br>
<br>
<br>
<br>
                        <?php
                            if ($this->session->flashdata('message')) {
                                echo '<div class="alert alert-success">
                                    ' . $this->session->flashdata("message") . '
                                </div>';
                            }
                        ?>
                        <?php
                            if ($this->session->flashdata('message_Delete')) {
                                echo '<div class="alert alert-danger">
                                    ' . $this->session->flashdata("message_Delete") . '
                                </div>';
                            }
                        ?>
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle" style="width: 1000px;">
    <table class="table table-striped custab">
    <thead>
    <a href="<?php echo base_url("home/fViewAddEvent") ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Events</a>
    <br>
        <tr>
            <th>ID</th>
            <th>Event Title</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Recurrence</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    <?php 
    if(empty($Events))
        {
            ?>
                <p align="center"><b>No Record Found..!please add event.</b></p>
            <?php 
        }
        $counter = 1;
     foreach ($Events as $Event) {
                        ?>
            <tr>
                <td><?php echo $counter++ ?></td>
                <td><?php echo $Event->fEventTitle ?></td>
                <td><?php echo $Event->fEventStartDate ?></td>
                <td><?php echo $Event->fEventEndDate ?></td>
                 <td><?php echo $Event->fRecurrence ?></td>
                <td class="text-center">
                    <a href="<?php echo base_url("home/fViewEvent/".$Event->fEventId) ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-remove"></span> View</a>
                    <a class='btn btn-info btn-xs' href="<?php echo base_url("home/fViewEditEvent/".$Event->fEventId) ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                    <a href="<?php echo base_url("home/fDeleteEvent/".$Event->fEventId) ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
</div>

