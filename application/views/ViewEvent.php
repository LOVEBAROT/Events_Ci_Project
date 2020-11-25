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
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle" style="width: 1000px;">
    <table class="table table-striped custab">
    <thead>
        <h3>Event Name : <?php echo $Events->fEventTitle ?></h3>
        <h3>Event Occurrences : <?php echo $Recurrence ?></h3>
    <br>
    </thead>
    </table>
    </div>
</div>

