<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br>
<br>
<form class="form-horizontal" action="<?php echo base_url("home/fAddEvent") ?>" method="POST" align="center">
  <fieldset>
    <div id="legend">
      <legend class=""><b>Add Event</b></legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="Event Title">Event Title</label>
      <div class="controls">
        <input type="text"  name="EventTitle" placeholder="Enter Event Title" class="input-xlarge">
        <?php echo form_error('EventTitle'); ?>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="Start Date">Start Date</label>
      <div class="controls">
        <input type="Date"   placeholder=""  name="StartDate" class="input-xlarge">
        <?php echo form_error('StartDate'); ?>
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="Start Date">End Date</label>
      <div class="controls">
        <input type="Date"   placeholder=""  name="EndDate" class="input-xlarge">
        <?php echo form_error('EndDate'); ?>
      </div>
    </div>
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Recurrence</label>
      <div class="controls">
        <select name="Recurrence" class="input-xlarge" >
          <option value="">Select Any One</option>
          <option value="Every">Every</option>
          <option value="Everyother">Every other</option>
          <option value="everythird">every third</option>
          <option value="everyfourth">every fourth</option>
        </select>
        <?php echo form_error('Recurrence'); ?>
        <select name="Recurrence1" class="input-xlarge" >
          <option value="">Select Any One</option>
          <option value="day">day</option>
          <option value="week">week</option>
          <option value="month">month</option>
          <option value="year">year</option>
        </select>
        <?php echo form_error('Recurrence1'); ?>
      </div>
    </div>
 
    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Add Event</button>
      </div>
    </div>
  </fieldset>
</form>