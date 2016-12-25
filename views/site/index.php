<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = 'vTube.yii';
?>


<div class="row">
  <div id="" class="col-sm-2 sidenav">
    <!-- <div class="col-sm-12 row">
      <span class="sidenav-btn" onclick="ocNav()">&#9776;</span>
    </div> -->   
    <br />
    <ul>
      <?php foreach ($categories as $category) { ?>

        <li>
          <?=
            Html::a($category->cat_name, ['site/findvideo', 'id' => $category->cat_id], ['class' => 'category-link']);
          ?>
        </li>

      <?php } ?>
    </ul>
  </div>

  <div class="col-sm-10 video-container">
    <?php foreach ($videos as $video) { ?>
      <div class="col-sm-4 col-md-3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?= $video->video_url; ?>"></iframe>
        </div>
        <div class="col-sm-9">
          <div class="row">
            <strong><?= $video->video_title; ?></strong>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="row">
            <?= Html::a('View', ['site/showvideo', 'id' => $video->video_id,], ['class' => 'btn btn-default']); ?>
          </div>
        </div>
        <br /><br /><br />
      </div>
    <?php } ?>

  </div>

</div>
