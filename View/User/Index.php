<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
switch($action){
        case 'details':
                $model  = User::Get($_REQUEST['id']);
                $view         = 'details.php';
				break;
		default:
                $model  = User::Get();
                $view         = 'List.php';
				break;
}
include $view;
?>