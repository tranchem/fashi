<?php

    //goi thu vien
    
    require_once 'class.smtp.php';

    require_once "class.phpmailer.php"; 

    $nFrom = "TheFace";    //mail duoc gui từ đâu

    $mFrom = 'botienhuyenthoai@gmail.com';  //dia chi email của mình (trung gian)

    $mPass = 'qxvxcysoqarxpmio';       //mat khau email của mình ( đã cấu hình)

    $nTo = 'Admin'; //Ten nguoi nhan

    $mTo = 'aungoctien21031999@gmail.com';   //dia chi nhan mail

    $mail             = new PHPMailer();

    $body             = $_POST['input_noidung'];   // Noi dung email

    $title = 'Phản hồi của khách hàng';   //Tieu de gui mail

    $mail->IsSMTP();             

    $mail->CharSet  = "utf-8";

    $mail->SMTPDebug  = 0;   // ?? ko hiểu

    $mail->SMTPAuth   = true;    // bật SMTP 

    $mail->SMTPSecure = "ssl";   //giao thức

    $mail->Host       = "smtp.gmail.com";    // sever gui mail.

    $mail->Port       = 465;         // cong gui mail de nguyen

    // xong phan cau hinh bat dau phan gui mail

    $mail->Username   = $mFrom;  // khai bao dia chi email

    $mail->Password   = $mPass;              // khai bao mat khau

    $mail->SetFrom($mFrom, $nFrom); 

    //reply

    $email_send=$_POST['input_email'];

    $ten=$_POST['input_hoten'];

    $mail->AddReplyTo($email_send,$ten);





    $mail->Subject    = $title;// tieu de email 

    $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.

    $mail->AddAddress($mTo, $nTo);

    // thuc thi lenh gui mail 

    if(!$mail->Send()) {

        echo 'Co loi!';

         

    } else {

         

        echo 'mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả. ';

    }


    echo 

    "

        <script type='text/javascript'>

            window.alert('Bạn đã phản hồi thành công.');

        </script>

    ";
        echo 

    "

        <script type='text/javascript'>

            window.location.href = 'http://localhost/fashi/contact';

        </script>

    ";


    

?>