<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

			
			if( wp_verify_nonce( $_POST['_wpnonce'] )) {

				$to = get_option('admin_email');
				
				//$to = 'galina.dounar@gersis-software.com';
				//$to = 'artiom.danelian@gersis-software.com';

				$fname 		= !empty($_POST['fname']) 			? __('Имя', 'gregor_danelian').': '.sanitize_text_field($_POST['fname']).'<br/>' 						: '';
//				$lname 		= !empty($_POST['lname']) 			? __('Фамилия', 'gersis').': '.sanitize_text_field($_POST['lname']).'<br/>'	 					        : '';
//				$usluga		= !empty($_POST['usluga']) 			? __('Выбранная услуга', 'gregor_danelian').': '.sanitize_text_field($_POST['usluga']).'<br/>'	 		: '';
				$email 		= !empty($_POST['email']) 			? __('Email', 'gregor_danelian').': '.sanitize_email($_POST['email']).'<br/>' 						    : '';
				$phone 	    = !empty($_POST['phone']) 		    ? __('Телефон', 'gregor_danelian').': '.sanitize_text_field($_POST['phone']).'<br/>' 					: '';
				$message	= !empty($_POST['msg']) 			? __('Сообщение', 'gregor_danelian').': '.sanitize_text_field($_POST['msg']).'<br/>' 					: '';
				
//				$fileCount = count((array)$_FILES['files']['name']);
//				$uploaddir = __DIR__.'/uploads/';
//
//				$attachments = '';
//		        if (!empty($_FILES)) {
//		            $error = $_FILES['files']['error'];
//		            if ($error == UPLOAD_ERR_OK) {
//		                $tmp_name = $_FILES["files"]["tmp_name"];
//		                $path = WP_CONTENT_DIR.
//		                '/uploads/'.$_FILES["files"]["name"];
//
//		                move_uploaded_file($tmp_name, $path);
//		                $attachments = $path;
//		            }
//
//		        }

				if(!empty($_POST['phone'])) {
					$from = sanitize_text_field($_POST['fname'])." - ".sanitize_text_field($_POST['phone']);
				} else {
					$from = sanitize_text_field($_POST['fname']);
				};

		        $headers = array(
					'From: '.$from.'<gregor_danelian@gregor_danelian.com>',
					'content-type: text/html'
				);

				$subj = "Арт-менеджеру от: ".sanitize_text_field($_POST['fname']);
				$body = "	С сайта gregor-danelian.com письмо<br/><hr/>";
				$body .= $fname.$email.$phone.$message;
				
				$res = wp_mail($to, $subj, $body, $headers);
                
                if ( $attachments != "" ) {
                unlink($attachments);
            }

				if ($res)
					echo __('Отправлено успешно', 'gregor_danelian');
			}
			else {
				wp_die(__('Проверка не пройдена', 'gregor_danelian'));
			}
	}
	else {
		http_response_code(403);
		echo 'Access Denied';
	}
?>