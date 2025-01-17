<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptchaSecret = '6Ld5gbcqAAAAAORQYAjLVBiqeIXWZU5GM25oMM9x';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Проверка reCAPTCHA
    $recaptchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($recaptchaVerifyUrl . '?secret=' . $recaptchaSecret . '&response=' . $recaptchaResponse);
    $responseKeys = json_decode($response, true);

    if (!$responseKeys['success']) {
        echo json_encode(['success' => false, 'message' => 'Проверка reCAPTCHA не пройдена. Пожалуйста, попробуйте снова.']);
        exit;
    }

    // Обработка данных формы
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];
    $weight = $_POST['weight'];
    $email = $_POST['email'];

    // Здесь вы можете добавить логику для обработки данных формы, например, отправку email

    echo json_encode(['success' => true, 'message' => 'Форма успешно отправлена.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Неправильный метод запроса.']);
}
?>