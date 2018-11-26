<?php
$layout_defs['Contacts']['subpanel_setup']['targetlists'] = array(
	'order' => 1,
	'sort_order' => 'desc',
	'title_key' => 'LBL_TARGETLISTS',
	'subpanel_name' => 'default',
	'module' => 'ProspectLists',
	'get_subpanel_data' => 'prospect_lists',
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopSelectButton'),
	)
);
