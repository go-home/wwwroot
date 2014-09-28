<?php
return array(
	'app_init'=>array('Common\Behavior\InitHookBehavior'),
	'view_filter' => array(
		'Behavior\TokenBuildBehavior',
		'Common\Behavior\ContentReplaceBehavior'
	),

	'app_begin_web' => array(
		'Common\Behavior\AppBeginBehavior'
	)

);