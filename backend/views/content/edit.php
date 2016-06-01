<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use ijackua\lepture\MarkdownEditor;

$this->title = '修改文章';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'content-form']); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">内容</h3>
            </div><!-- /.box-header -->
            <div class="box-body">

                <?= $form->field($model, 'class_id')->textInput() ?>

                <?= $form->field($model, 'title')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'content')->widget(MarkdownEditor::className()) ?>

            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <div class="col-lg-4">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">属性</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">操作</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <?= Html::submitButton('发布', ['class' => 'col-lg-12 btn btn-primary', 'name' => 'add-button']) ?>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
<?php ActiveForm::end(); ?>
