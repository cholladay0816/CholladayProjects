<div class='container-fluid col-sm-11 my-4'>

<div class="row row-cols-md-2 row-cols-1">
<?php
foreach ($data['displays'] as $display):
  $file = $display->banner;
  $exists = @get_headers($file);
?>
    <div class="col mb-4">
    <div class="card h-100">
      <a class='text-dark' href='<?php echo URLROOT.'/projects/'.$display->title?>'>
        <img style='<?php echo $exists?"":"display:none"?>'src="<?php echo $display->banner?>" class="card-img-top" alt="<?php echo $display->title?>">
      </a>
      <div class="card-body">
        <h5 class="card-title">
          <a class='text-dark' href='<?php echo URLROOT.'/projects/'.$display->title?>'><?php echo $display->title?></a>
        </h5>
        <p class="card-text"><?php echo $display->description?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
</div>
