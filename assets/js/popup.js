// Полный файл: assets/js/popup.js
document.addEventListener('DOMContentLoaded', function() {
    const issueButton = document.getElementById('issue');
    const popup = document.getElementById('popup');
    const closePopup = document.getElementById('close-popup');
    const closeSuccess = document.getElementById('close-success');
    const formContent = document.getElementById('form-content');
    const sendSuccessBlock = document.querySelector('.send-success-block');
    const form = document.getElementById('email-form');
    const recaptchaError = document.querySelector('.recaptcha-error');

    if (issueButton) {
        issueButton.addEventListener('click', () => {
            popup.classList.add('open');
        });
    }

    if (closePopup) {
        closePopup.addEventListener('click', () => {
            popup.classList.remove('open');
            formContent.style.display = 'block';
            sendSuccessBlock.style.display = 'none';
            recaptchaError.style.display = 'none';
        });
    }

    if (closeSuccess) {
        closeSuccess.addEventListener('click', () => {
            popup.classList.remove('open');
            formContent.style.display = 'block';
            sendSuccessBlock.style.display = 'none';
            recaptchaError.style.display = 'none';