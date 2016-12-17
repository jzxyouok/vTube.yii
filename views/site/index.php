<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = 'vTube.yii';
?>

<div class="header-clear-fix"></div>

<div class="row">
  <div id="mySidenav" class="col-sm-2 sidenav">
    <div class="col-sm-12 row">
      <span class="sidenav-btn" onclick="ocNav()">&#9776;</span>
    </div>
    <ul>
      <li><a href="#">Test</a></li>
      <li><a href="#">Test</a></li>
      <li><a href="#">Test</a></li>
      <li><a href="#">Test</a></li>
      <li><a href="#">Test</a></li>
      <li><a href="#">Test</a></li>
      <li><a href="#">Test</a></li>
    </ul>
  </div>


  <div class="col-sm-12">
    <?php foreach ($videos as $video) { ?>
      <div class="col-sm-4 col-md-3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?= $video->video_url; ?>"></iframe>
        </div>
        <div class="col-sm-10">
          <div class="row">
            <strong><?= $video->video_title; ?></strong>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="row">
            <button class="btn btn-defult" type="button" name="button"><></button>
          </div>
        </div>
        <br /><br /><br />
      </div>
    <?php } ?>

  </div>

</div>
