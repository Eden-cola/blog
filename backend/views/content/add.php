<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Category;
use ijackua\lepture\MarkdownEditor;
use kartik\select2\Select2;

$this->title = '文章发布';
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

                <?= $form->field($model, 'category_id', ['labelOptions'=>['label'=>'所属栏目']])->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(Category::find()->all(),'id','name'),
                ]); ?>

                <?= $form->field($model, 'rec', ['labelOptions'=>['label'=>'是否推荐']])->checkBox(['class'=>'flat-red']) ?>

            </div><!-- /.box-body -->
        </div><!-- /.box -->
        <?= Html::submitButton('发布', ['class' => 'col-xs-12 col-md-12 col-lg-12 col-sm-12 btn btn-primary', 'name' => 'add-button']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
