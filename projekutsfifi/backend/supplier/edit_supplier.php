<?php 
require_once '../dbkoneksi.php';
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM supplier WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?> 
<div class="container" >  <br>       
<form method="POST" action="proses_supplier.php" >
  <div class="form-group row">
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
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
        value="<?php if(isset($row['name'])) echo $row['name']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-4 col-form-label">phone</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="phone" name="phone" 
        value="<?php if(isset($row['phone'])) echo $row['phone']; ?>" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="address" class="col-4 col-form-label">address</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="address" name="address" type="text" class="form-control" 
        value="<?php if(isset($row['address'])) echo $row['address']; ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="contact_name" class="col-4 col-form-label">contact_name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="contact_name" name="contact_name" type="text" class="form-control" 
        value="<?php if(isset($row['contact_name'])) echo $row['contact_name']; ?>">
      </div>
    </div>
  </div>

  

  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Update"/>
      <input type="hidden" name="idedit" value="<?=$_idedit;?>">
    </div>
  </div>
</form>
</div>