   <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    sendEmail();
}

function sendEmail()
{

    if (!isset($_POST['name']) || !isset($_POST['telephone'])) {
        echo sendResponse($_POST, 'Required fields are not filled in', 400);
        die;
    }
    $config = include './modules/config.php';

    $name = htmlspecialchars(trim($_POST['name']));
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $address = htmlspecialchars(trim($_POST['address']));
    $weight = htmlspecialchars(trim($_POST['weight']));
    $email = htmlspecialchars(trim($_POST['email']));
    $agree = htmlspecialchars(trim($_POST['agree'] ?? ''));

    if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo sendResponse(['code' => 'error'], 'Email wrong', 400);
        die;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $mail->Host = $config['host'];
        $mail->Port = $config['port'];
        $mail->Username = $config['username'];
        $mail->Password = $config['password'];

        $mail->setFrom($config['username'],'Юг Пеллет');
        $mail->addAddress($config['username']);

        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $mail->Subject = "Новая заявка от - $name";
        $mail->Body = "
            <table>
                <tr>
                    <td>Имя:</td>
                    <td>$name</td>
                </tr>
                <tr>
                    <td>Телефон:</td>
                    <td>$telephone</td>
                </tr>
                <tr>
                    <td>Адрес:</td>
                    <td>$address</td>
                </tr>
                <tr>
                    <td>Колличество в тоннах:</td>
                    <td>$weight</td>
                </tr>
                <tr>
                    <td>Почта:</td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>Обработку персональных данных:</td>
                    <td>$agree</td>
                </tr>
            </table>
        ";

        $mail->send();

        if ($email) {
            $mail->Subject = "Заказ через сайт ug-pellet.ru";
            $mail->Body = "<p>Спасибо за заявку, Ваш заказ принят</p>
            <p>cайт :  ug-pellet.ru  <br> e-mail : info@ug-pellet.ru <br> телефон : 8 (964) 936 94 54 </p>";

            $mail->addAddress($email);
            $mail->send();
        }

        echo sendResponse(['code' => 'ok'], 'Send successfully');
        die;
    } catch (Exception $e) {
        echo sendResponse(['code' => 'error'], $mail->ErrorInfo, 400);
        //echo sendResponse(['code' => 'error'], 'Ошибка отправки', 400);
        die;
    }
}

function sendResponse($data, $message, $status = 200)
{
    return json_encode([
        'message' => $message,
        'data' => $data,
        'status' => $status,
    ]);
}

?>