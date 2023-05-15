<?php 
require_once '../dbkoneksi.php';
?>

<form method="POST" action="proses_product.php" >
  <div class="form-group row">
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="sku" class="col-4 col-form-label">sku</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="sku" name="sku" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="name" name="name" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="purchase_price" class="col-4 col-form-label">purchase_price</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="purchase_price" name="purchase_price" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="sell_price" class="col-4 col-form-label">sell_price</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="sell_price" name="sell_price" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="stock" class="col-4 col-form-label">stock</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="stock" name="stock" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="min_stock" class="col-4 col-form-label">min_stock</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="min_stock" name="min_stock" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="product_type_id" class="col-4 col-form-label">product_type_id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="product_type_id" name="product_type_id" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="restock_id" class="col-4 col-form-label">restock_id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="restock_id" name="restock_id" type="text" class="form-control" 
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
