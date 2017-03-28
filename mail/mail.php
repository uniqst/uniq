<?
	if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")) {
	        $to = 'info@mozhu.com.ua';
//		$to = 'info@mozhu.com.ua';
	        $subject = 'Зателефонуйте мені';
	        $message = '
	                <html>
	                    <head>
	                        <title>'.$subject.'</title>
	                    </head>
	                    <body>
	                        <p>Ім\'я: '.$_POST['name'].'</p>
	                        <p>Телефон: '.$_POST['phone'].'</p>
	                    </body>
	                </html>'; 
	        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	        $headers .= "From: Форма  Callback <noreply@mozhu.com.ua\r\n";
	        mail($to, $subject, $message, $headers); 
	}