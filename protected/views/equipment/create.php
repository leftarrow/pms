<?php
/* @var $this EquipmentController */
/* @var $model Equipment */

$this->breadcrumbs=array(
	'设备'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建设备</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>