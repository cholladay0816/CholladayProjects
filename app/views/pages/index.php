
<div class="jumbotron pb-6" style='background: linear-gradient(to bottom, #e9ecef 93%,#fff)'>
  <div class='row row-cols-1 row-cols-md-2'>

  <div class='col pb-4'>

  <h1 class="display-4">Welcome!</h1>
  <p class="lead">This is my web portfolio, where I upload and share my projects, demos, and creations.</p>
  <hr class="my-4">
  <p>If you are interested in my projects, feel free to contact me!</p>
  <div class='col-6 row-cols-1'>

  <div class='btn-group mb-4 col'>
  <a class="btn btn-primary btn-lg" href="<?php echo URLROOT?>/contact" role="button">Contact Information</a>
  </div>
  <div class='btn-group col'>
  <a class="btn btn-sm btn-outline-dark btn-lg" href="<?php echo LINKEDIN ?>" target='_blank' role="button"><i class='fab fa-linkedin'></i> Linkedin</a>
  <a class="btn btn-sm btn-outline-dark btn-lg" href="<?php echo GITHUB ?>" target='_blank' role="button"><i class='fab fa-github'></i> Github</a>
  </div>
</div>
</div>
<div class='col'>
  <img style='' class='mb-5 mx-auto img-fluid' src='<?php echo URLROOT?>/public/img/projects/marketeer/cholladay-explore-marketeer.png'/>
</div>
</div>
</div>
<div class='container mb-5'>
  <h1 class='mb-4'>Project Samples</h1>
<div id="carouselExampleCaptions" class="carousel slide bg-light border rounded" data-ride="carousel" style='border-color: #8e44ad;box-shadow: 0 0 10px 3px #8e44ad;'>
  <ol class="carousel-indicators">
    <?php $count=0;foreach ($data['displays'] as $display): ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $count?>" <?php echo $count==0?'class="active"':''?>></li>

    <?php $count++;endforeach; ?>
  </ol>
  <div class="carousel-inner" style=''>
    <?php $count=0; foreach ($data['displays'] as $display): ?>

    <div class="carousel-item <?php echo $count==0 ? 'active' :' '?>">
      <img src="<?php echo $display->src?>" class="d-block w-100" alt="<?php echo $display->title?>" style='object-fit:contain'>
      <div class="carousel-caption d-none d-md-block text-dark">
        <h5><a class='text-dark' href='<?php echo URLROOT?>/projects/<?php echo ($display->title)?>'><?php echo $display->title?></a></h5>
        <p><?php echo $display->description?></p>
      </div>
    </div>
    <?php $count++; endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
