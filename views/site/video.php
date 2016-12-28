<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
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

  <div class="col-sm-10">
      <div class="col-sm-12 col-md-9 video-container-single">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?= $video->video_url; ?>"></iframe>
        </div>
        <div class="col-sm-9">
          <div class="row">
            <br />
            <strong><?= $video->video_title; ?></strong>
          </div>
        </div>
        <br /><br /><br />
        <div class="col-sm-9">
          <div class="row">
            <div class="comments-form">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($modelComments, 'comm_text')->textarea(['rows' => 2]) ?>

                <div class="form-group">
                    <?= Html::submitButton($modelComments->isNewRecord ? 'Post' : 'Update', ['class' => $modelComments->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>

            <?php foreach ($comments as $comment) { ?>
              
              <h5><strong>@: <?= $comment->comm_user_id ?></strong></h5>
              <div class="col-sm-12 jumbotron">
                <?= $comment->comm_text ?>
              </div>
            <?php } ?>
          </div>
        </div>

      </div>
  </div>

</div>
