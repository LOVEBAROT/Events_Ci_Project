<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br>
<br>


<form class="form-horizontal" action="<?php echo base_url("home/fEditEvent/".$Events->fEventId) ?>" method="POST" align="center">
  <fieldset>
    <div id="legend">
      <legend class=""><b>Edit Event</b></legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="Event Title">Event Title</label>
      <div class="controls">
        <input type="text"  name="EventTitle" value="<?php echo $Events->fEventTitle ?>" placeholder="Enter Event Title" class="input-xlarge">
        <?php echo form_error('EventTitle'); ?>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="Start Date">Start Date</label>
      <div class="controls">
        <input type="Date"   placeholder="" value="<?php echo date('Y-m-d',strtotime($Events->fEventStartDate)); ?>" name="StartDate" class="input-xlarge">
        <?php echo form_error('StartDate'); ?>
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="Start Date">End Date</label>
      <div class="controls">
        <input type="Date"   placeholder="" value="<?php echo date('Y-m-d',strtotime($Events->fEventEndDate)); ?>" name="EndDate" class="input-xlarge">
        <?php echo form_error('EndDate'); ?>
      </div>
    </div>
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Recurrence</label>
      <div class="controls">
        <?php 
          $Recurrence =   explode("-", $Events->fRecurrence);
         ?>
        <select name="Recurrence" class="input-xlarge">
          <option value="">Select Any One</option>
          <option value="Every" <?php echo ($Recurrence[0] == 'Every') ? "selected" : "" ?>>Every</option>
          <option value="Everyother" <?php echo ($Recurrence[0] == 'Everyother') ? "selected" : "" ?>>Every other</option>
          <option value="everythird" <?php echo ($Recurrence[0] == 'everythird') ? "selected" : "" ?> >every third</option>
          <option value="everyfourth" <?php echo ($Recurrence[0] == 'everyfourth') ? "selected" : "" ?> >every fourth</option>
        </select>
        <?php echo form_error('Recurrence'); ?>
        <select name="Recurrence1" class="input-xlarge" >
          <option value="">Select Any One</option>
          <option value="day" <?php echo ($Recurrence[1] == 'day') ? "selected" : "" ?>>day</option>
          <option value="week"  <?php echo ($Recurrence[1] == 'week') ? "selected" : "" ?>>week</option>
          <option value="month" <?php echo ($Recurrence[1] == 'month') ? "selected" : "" ?>>month</option>
          <option value="year" <?php echo ($Recurrence[1] == 'year') ? "selected" : "" ?>>year</option>
        </select>
        <?php echo form_error('Recurrence1'); ?>
      </div>
    </div>
 
    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Edit Event</button>
      </div>
    </div>
  </fieldset>
</form>