<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
switch($action){
		case 'new':
                $model = Users::Blank();
                $view         = 'edit.php';                
		case 'edit':
			 case 'edit':
                $model  = Users::Get($_REQUEST['id']);
                $view         = 'edit.php';                
		break;
			
        case 'details':
                $model  = User::Get($_REQUEST['id']);
                $view         = 'details.php';
				break;
		case 'delete':
                if(isset($_POST['id'])){
                        $errors = User::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location:  ?");
                                die();
                        }                                                        
                }
                $model  = User::Get($_REQUEST['id']);
                $view         = 'delete.php';                                         
                break;
		case 'delete2':
			$model= User::Delete($model['id']);
			$view= "List.php";
			break;		
		default:
                $model  = User::Get();
                $view         = 'List.php';
				break;
}
include $view;
?>