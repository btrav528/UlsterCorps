<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
switch($action){
		case 'new':
                $model = User::Blank();
                $view         = 'edit.php';                
		case 'edit':
			 case 'edit':
                $model  = User::Get($_REQUEST['id']);
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
	
			case 'save':
                $errors = User::Validate($_REQUEST);
                if(!$errors){
                        $errors = User::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: " .$model['2013Fall_FirstName']. $model['LastName']      ;        
                
			break;
		default:
                $model  = User::Get();
                $view         = 'List.php';
				break;
}
include $view;
?>