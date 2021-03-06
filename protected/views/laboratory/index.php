<?php
/* @var $this LaboratoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'实验室',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'laboratory-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>true,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'name',
		'dependent',
		'phone',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
