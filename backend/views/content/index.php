<?php

/* @var $this yii\web\View */
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use backend\models\Content;

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">文章列表</h3>
        <div class="box-tools">
            <div class="input-group" >
                <a href="<?=Url::to(['content/add'], true);?>" class="btn btn-sm btn-success">添加</a>
            </div>
        </div>
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-hover">
            <tr>
                <th width="20" align="left" class="hidden-xs">
                    <input type="checkbox" class="minimal">
                </th>
                <th align="center">标题</th>
                <th width="100">操作</th>
            </tr>
            <?php foreach($data as $v){ ?>
            <tr>
                <td class="hidden-xs">
                    <label>
                        <input type="checkbox" class="minimal">
                    </label>
                </td>
                <td><?= $v['title']?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?= Url::to(['content/edit', 'id'=>$v['id']], true)?>" class="btn btn-primary btn-xs">修改</a>
                        <a href="<?= Url::to(['content/del', 'id'=>$v['id']], true)?>" class="btn btn-danger btn-xs">删除</a>
                    </div>
                </td>
            </tr>
            <?php }; ?>
        </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <div class="hidden-xs">
            <button class="btn btn-sm btn-danger">删除</button>
            <button class="btn btn-sm btn-primary">隐藏</button>
            <button class="btn btn-sm btn-success">推荐</button>
        </div>
    </div><!-- /.box-footer -->
</div><!-- /.box -->
