<?php if(logged_in()){ ?>
<div class="panel">
	<div class="page-header">
		<a href="" class="btn btn-info pull-right">Submit Support Ticket</a>
		<h1>Dashboard <small>welcome, here you can view and pay all your invoices, see your projects status and info</small></h1>
	</div>
	<div class="row-fluid">
		<div class="span4 section-panel">
			<h3>Your Recent Invoices</h3>
			<?php foreach($invoices as $invoice){ ?>
			<a href="<?=base_url('client/invoices/view/'.$invoice->invoice_id)?>" class="btn"><i class="icon-file"></i> #<?=$invoice->invoice_id?></a>
			<?php } ?>
		</div>
		<div class="span3 section-panel">
			<h3>Your Projects</h3>
		</div>
		<div class="span4 section-panel">
			<h3>Your Details</h3>
		</div>
	</div>
</div>
<div class="foot">&copy <?php echo date('Y'); ?> Ronald A. Richardson. All Rights Reserved.</div>
<?php } else { ?>
<div class="modal">
	<div class="modal-header">
		<h3>Login</h3>
	</div>
	<div class="modal-body">
		<?php echo form_open('/auth/login', array('class'=>'form-horizontal')); ?>
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="email">Email</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="email" name="email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Password</label>
					<div class="controls">
						<input type="password" class="input-xlarge" id="password" name="password">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<label class="checkbox"><?=form_checkbox('remember', '1', FALSE)?> Remember me</label>
					</div>
				</div>
			</fieldset>
	</div>
	<div class="modal-footer">
		<a href="<?=base_url('auth/forgot_password')?>">Forgot password?</a>
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
	</div>
</div>
<?php } ?>