<?php 
include_once('head.php');
include_once('navbar.php');
?>
<script>
$(document).ready(function(){
  
});


</script>
 <!-- edit Section -->
<section id="page_edit" class="page_edit">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 <h2>Edit user informaton</h2>
		<hr>
		
		<?php if (isset($msg)){ ?>
		<div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
	<?php } ?>
		<form role="form" action="index.php?controller=users&edit=<?php echo $_GET['edit'];?>" method="POST">

  					
		<div class="form-group">
    		<label for="username">Username</label>
	    		<input type="text" class="form-control" name ="username" id="username" placeholder="Username" required value="<?php echo $user['username'];?>">
  		</div>
  		<div class="form-group">
    		<label for="password">Password</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="Password" required value="<?php echo $user['password'];?>">
  		</div>

<div class="form-group">
    		<label for="password">Confirm Password</label>
			<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required value="">
  		</div>

  					<div class="form-group">
    						<label for="email">Email address</label>
    						<input type="email"  required 	class="form-control" name="email" id="email" placeholder="Enter email"
value="<?php echo $user['email'];?>">
  					</div>
  					<div class="form-group">
    						<label for="type">Type</label>
    						<input type="text" class="form-control" name="type" id="type" placeholder="Type"
value="<?php echo $user['type'];?>">
  					</div>
  					
  					<button type="submit" class="btn btn-primary" id="submit">Submit</button>
  					<a href="index.php?controller=users"><button type="button" class="btn btn-success">Back</button></a>
				</form>
                </div>
            </div>
        </div>
</section>
<br/>
<?php 
include_once('footer.php');
?>
