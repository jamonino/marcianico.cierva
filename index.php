
	<?php
	
	
		
		require "Marcianico.php";
		
		
		function return_response($status, $statusMessage, $data) {
			echo json_encode($data);
		}
		 
		$bodyRequest = file_get_contents("php://input");
		
		switch ($_SERVER['REQUEST_METHOD']) {
			case 'POST':
				//$et = new Marcianico("juanito",100,50,50,50);
				$et = new Marcianico;
				$et->jsonConstruct($bodyRequest);
				$et->setVida($et->getVida()-10);
				return_response(200, "OK", $et);
				break;
			case 'GET':
				return_response(200, "OK", $bodyRequest);
				break;
			default:
				return_response(405, "Method Not Allowed", null);
				break;
		}
		
		//$et = new Marcianico("juanito",100,50,50,50);
		
		
		
	?>

