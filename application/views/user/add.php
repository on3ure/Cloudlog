
<div class="container">

<br>
<?php if($this->session->flashdata('notice')) { ?>
    <div id="message" >
        <?php echo $this->session->flashdata('notice'); ?>
    </div>
<?php } ?>

<div class="card">
  <div class="card-header">Create User Account</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>

    <?php $this->load->helper('form'); ?>
    <?php echo validation_errors(); ?>

    <form method="post" action="<?php echo site_url('user/add'); ?>" name="users">

		<div class="form-group">
			<label>Username</label>
		    <input class="form-control" type="text" name="user_name" value="<?php if(isset($user_name)) { echo $user_name; } ?>" />
			<?php if(isset($username_error)) { echo "<div class=\"small error\">".$username_error."</div>"; } ?>
		</div>

		<div class="form-group">
			<label>User Role</label>
		    <select class="custom-select" name="user_type">
			<?php			
				$levels = $this->config->item('auth_level');
				while (list($key, $val) = each($levels)) {
			?>
					<option value="<?php echo $key; ?>" <?php if(isset($user_type)) { if($user_type == $key) { echo "selected=\"selected\""; } } ?>><?php echo $val; ?></option>
				<?php } ?>
			</select>
		  </div>

		<div class="form-group">
			<label>Email Address</label>
			<input class="form-control" type="text" name="user_email" value="<?php if(isset($user_email)) { echo $user_email; } ?>" />
			<?php if(isset($email_error)) { echo "<div class=\"small error\">".$email_error."</div>"; } ?>
		</div>

		<div class="form-group">
			<label>Password</label>
		    <input class="form-control" type="password" name="user_password" value="<?php if(isset($user_password)) { echo $user_password; } ?>" />
				<?php if(isset($password_error)) { echo "<div class=\"small error\">".$password_error."</div>"; } ?>
		</div>

		<div class="form-group">
			<label>First Name</label>
		    <input class="form-control" type="text" name="user_firstname" value="<?php if(isset($user_firstname)) { echo $user_firstname; } ?>" />
			<?php if(isset($firstname_error)) { echo "<div class=\"small error\">".$firstname_error."</div>"; } ?>
		</div>

		<div class="form-group">
		    <label>Last Name</label>
		    <input class="form-control" type="text" name="user_lastname" value="<?php if(isset($user_lastname)) { echo $user_lastname; } ?>" />
			<?php if(isset($lastname_error)) { echo "<div class=\"small error\">".$lastname_error."</div>"; } ?>
		</div>

		<div class="form-group">
		    <label>Callsign</label>
		    <input class="form-control" type="text" name="user_callsign" value="<?php if(isset($user_callsign)) { echo $user_callsign; } ?>" />
			<?php if(isset($callsign_error)) { echo "<div class=\"small error\">".$callsign_error."</div>"; } ?>
		</div>
			
		<div class="form-group">
		    <label>Locator</label>
		    <input class="form-control" type="text" name="user_locator" value="<?php if(isset($user_locator)) { echo $user_locator; } ?>" />
			<?php if(isset($locator_error)) { echo "<div class=\"small error\">".$locator_error."</div>"; } ?>
		</div>

		<div class="form-group">
		    <label>Timezone</label>
			<?php 
				if(!isset($user_timezone)) { $user_timezone = 0; }
				echo form_dropdown('user_timezone', $timezones, $user_timezone); 
			?>
		</div>

		<div class="form-group">
        	<label for="SelectDateFormat">Date Format</label>
            <select name="user_date_format" class="custom-select" id="SelectDateFormat" aria-describedby="SelectDateFormatHelp">
            	<option value="">Select Format</option>
            	<option value="d/m/y"><?php echo date('d/m/y'); ?></option>
            	<option value="d/m/Y"><?php echo date('d/m/Y'); ?></option>
            	<option value="m/d/y"><?php echo date('m/d/y'); ?></option>
            	<option value="m/d/Y"><?php echo date('m/d/Y'); ?></option>
            	<option value="d.m.Y"><?php echo date('d.m.Y'); ?></option>
            	<option value="Y-m-d"><?php echo date('Y-m-d'); ?></option>
            </select>
            
            <small id="SelectDateFormatHelp" class="form-text text-muted">Select how you would like dates shown when logged into your account.</small>
        </div>


        <div class="form-group">
            <label for="user_measurement_base">Measurement preference</label>
            <select class="custom-select" id="user_measurement_base" name="user_measurement_base" required>
                <option value=''></option>
                <option value='K' <?php if($measurement_base == "K") { echo "selected=\"selected\""; } ?>>Kilometers</option>
                <option value='M' <?php if($measurement_base == "M") { echo "selected=\"selected\""; } ?>>Miles</option>
                <option value='N' <?php if($measurement_base == "N") { echo "selected=\"selected\""; } ?>>Nautical miles</option>
            </select>
            <small id="user_measurement_base_Help" class="form-text text-muted">Choose which unit distances will be shown in.</small>
        </div>

        <div class="form-group">
            <label for="user_stylesheet">Theme</label>
            <select class="custom-select" id="user_stylesheet" name="user_stylesheet" required>
                <option value='bootstrap.min.css' selected="selected">Standard theme</option>
                <option value='bootstrap-dark.css'>Dark theme</option>
                <option value='bootstrap-blue.css'>Blue theme</option>
            </select>
        </div>

		<input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>" />
		<button type="submit" class="btn btn-primary">Create Account</button>
    </form>
  </div>
</div>


</div>
