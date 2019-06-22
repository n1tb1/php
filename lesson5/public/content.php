<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Gallery</h3>
    </div>
    <div class="panel-body">
      <div class="galleryPreviewsContainer">
          <?php foreach ($images as $image) : ?>
            <img class="popup" src="img/<?= $image['small']; ?>" data-id="<?= $image['id']; ?>" data-big="<?= $image['big']; ?>"/>
          <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

