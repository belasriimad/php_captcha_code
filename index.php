<?php
session_start(); 
include('includes/header.php');
?>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
       <?php include('check.php');?>
        <div class="panel panel-default">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <form action="index.php" method="post" style="margin:20px;">
                        <div class="form-group">
                            <img src="generate.php" alt="" class="thumbnail">
                        </div>
                        <div class="form-group">
                            <input type="number" name="code" class="fom-control" required="" placeholder="Enter the code">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>