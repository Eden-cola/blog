<?php

/* @var $this yii\web\View */

use common\models\Category;
use common\models\Content;

$this->title = 'My Yii Application';
?>
<div class="site-index">

  <div class="body-content">

    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-2 col-xs-4">
        <img src="/headerimg.jpg" alt="名为头像之物" class="img-thumbnail">
      </div>

      <div class="col-lg-10 col-md-9 col-sm-10 col-xs-8">
        <h3>可乐的Eden</h3>

        <h3><small>名为签名之物</small></h3>

        <p class="hidden-xs hidden-sm">个人信息等等dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat.</p>

      </div>
    </div>

    <div class="row">

      <!--推荐文章-->
      <div class="col-lg-9 col-md-8">
        <?php foreach(Category::find()->where(['user_id'=>0])->all() as $category){ ?>
        <h2><small><?= $category['name'] ?></small></h2>
        <hr />
        <div class="row">
          <?php foreach(Content::find()->where(['category_id'=>$category['id']])->limit(2)->all() as $content){ ?>
          <div class="col-lg-6">
          <h2><?= $content['title'] ?></h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur.</p>

          </div>
          <?php }; ?>
        </div>
        <?php }; ?>
      </div>

      <!--模块-->
      <div class="col-lg-3 col-md-4">
        <br />
      <!--统计数据-->
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="/demo/bootstrap3-plugin-collapse-accordion.htm#collapseOne">
                  统计数据
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                vice lomo.
                <hr />
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                vice lomo.
              </div>
            </div>
          </div>
        </div>
      <!--留言-->
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="/demo/bootstrap3-plugin-collapse-accordion.htm#collapseOne">
                  热门文章
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                vice lomo.
                <hr />
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                vice lomo.
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
