<section class="mainContainer"><!--main container begins-->
  <h1>ADMIN AREA: ADD CLASS </h1> 
<section class="contentAdmin">

<?php echo form_open('admin/insertClass');?>
  <ul id="classTimes">
    <li class=""><input type="text" name="newDay" placeholder="day" value="" autofocus="autofocus"/></li>
    <li class=""><input type="text" name="newTime" placeholder="time" value=""/></li>
    <li class=""><input type="text" name="newPlace" placeholder="place" value=""/></li>
    <li class=""><input type="text" name="newAddress" placeholder="address" value=""/></li>  
  </ul>
<p class="submit"><input type="submit" id="insertClassSubmit" name="insertClassSubmit" value="Add Class" /></p>
</form>

</section>
</section>

<div>



