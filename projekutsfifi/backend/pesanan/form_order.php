<?php 
require_once '../dbkoneksi.php';
?>

      
<form method="POST" action="proses_order.php" >
  <div class="form-group row">
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="order_number" class="col-4 col-form-label">order_number</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="order_number" name="order_number" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">date</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="date" name="date" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="qty" class="col-4 col-form-label">qty</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="qty" name="qty" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="total_price" class="col-4 col-form-label">total_price</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="total_price" name="total_price" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="customer_id" class="col-4 col-form-label">customer_id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="customer_id" name="customer_id" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="product_id" class="col-4 col-form-label">product_id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="product_id" name="product_id" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <?php
        $button = (empty($_id)) ? "Simpan":"Update"; 
    ?>
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>"/>
      <input type="hidden" name="id" value="<?=$_id?>"/>
    </div>
</form>
</div>
