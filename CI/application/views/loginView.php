<section class="mainContainer" class="cf"><!--main container begins-->
    <h1>ADMIN LOGIN </h1>
    <section class="contentAdmin">
<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Admin Login</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<div><input type="submit" value="Login" /></div>

</form>
</section>
</section>
</div>