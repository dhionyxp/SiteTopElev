<?php
    require 'Mailer/vendor/autoload.php';

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $telefone = $_POST["telefone"];

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'servidor.topelev@gmail.com';
    $mail->Password = 'Mudar123';
    $mail->Port = 587;
    $mail->CharSet = 'UTF8';

    $mail->setFrom('servidor.topelev@gmail.com');
    $mail->addAddress('luan.diniz23@hotmail.com', 'Luan');
    // $mail->addAddress('luan_gatinho06@hotmail.com', 'Contato');
    // $mail->addCC('dhiony1234@hotmail.com', 'Cópia');
    // $mail->addBCC('luan_gatao10@hotmail.com', 'Cópia Oculta');
    // $mail->addReplyTo('luan_gatinho06@hotmail.com');


    $mail->isHTML(true);
    $mail->Subject = 'Site TopElev - Email de Contato';
    $mail->Body    = '<strong> Nome: </strong>'.$nome.'<br> <strong>Telefone:</strong> '
                        .$telefone.'<br><strong> Email:</strong> '.$email.'<br><br><strong> Mensagem:</strong><br> '.$mensagem;
    // $mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
    // $mail->addAttachment('/tmp/image.jpg', 'nome.jpg');
?>
<style> 
    body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    background: url("images/banner.png") no-repeat center;
    background-size: cover;
    }
    a{
        color: #eee;
    }

    a:hover{
        color: blue;
    } 

.centro {
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, .5);
    /* background-color: #1E90FF; */
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.conteudo {
    line-height:200px;
    font-size: 20px;
    height: 500px;
    width: 60%;
    color: #eee;
    text-align:center;
    border-radius: 2em;
    background-color: #4682B4;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
    }

</style>

<body>
    <div class="centro">
        <div class="conteudo">
            <h1>

            <?php
                if(!$mail->send()) {
                    echo 'Não foi possível enviar a mensagem.<br>';
                    echo 'Erro: ' . $mail->ErrorInfo;
                } else {
                    echo 'Mensagem enviada.';
                }

                $mail->SMTPDebug = 3;
                $mail->Debugoutput = 'html';
                $mail->setLanguage('pt');
            ?>

            </h1>

            <a href="index.html"> <h2>Voltar ao Site</h2> </a>

        </div>

    </div>
</body>