window.addEventListener('DOMContentLoaded', windowInit)

function windowInit() {
    initTabs()
    locationsAnchor()
    handleEmailForm()
}

// Инициализация вкладок
function initTabs() {
    const tabs = document.querySelectorAll('.tab-buttons button')
    tabs.forEach(el => el.addEventListener('click', function (evt) {
        setContentByTab(evt.target)
    }))
}

// Обработка якорных ссылок для вкладок
function locationsAnchor() {
    const links = document.querySelectorAll('header a')

    links.forEach(a => {
        if (a.dataset.tab) {
            a.addEventListener('click', function (evt) {
                let target = evt.target
                const tab = document.querySelector('.tab-buttons [data-content="' + target.dataset.tab + '"]')
                if (tab) setContentByTab(tab)
            }, { passive: true }) // Добавлен пассивный слушатель событий
        }
    })
}

// Установка контента по выбранной вкладке
function setContentByTab(btnElement) {
    const contentId = btnElement.dataset.content

    if (!contentId) return

    const content = document.querySelector('.tab-contents #' + contentId)

    if (!content) return

    // Удаляем активный класс с текущих активных элементов
    document.querySelectorAll('.tab-contents .active, .tab-buttons .active').forEach(
        cont => cont.classList.remove('active')
    )
    // Добавляем активный класс к выбранным элементам
    content.classList.add('active')
    btnElement.classList.add('active')
}

// Обработка формы email
function handleEmailForm() {
    const formBlock = document.querySelector('.email-form-block')
    const form = document.querySelector('#email-form')

    if (!form) return

    const button = form.querySelector('button')
    const agree = form.querySelector('input#agree')
    const successBlock = document.querySelector('.send-success-block')
    const errorBlock = form.querySelector('.error-block')
    const popup = document.querySelector('#popup')
    const title = popup.querySelector('.popup__body_top-title')
    let recaptchaVerified = false

    // Проверка состояния кнопки отправки формы
    function checkSubmitButtonState() {
        if (agree.checked && recaptchaVerified) {
            button.disabled = false
            button.classList.remove('disable')
        } else {
            button.disabled = true
            button.classList.add('disable')
        }
    }

    // Установка обработчика события для элемента reCAPTCHA
    window.verifyRecaptchaCallback = function(response) {
        if (response) {
            recaptchaVerified = true
        } else {
            recaptchaVerified = false
        }
        checkSubmitButtonState()
    }

    form.addEventListener('submit', async function (evt) {
        evt.preventDefault() // Предотвращаем стандартное поведение формы

        // Валидация формы
        let isValid = true
        let errorMessage = ''

        const nameField = document.getElementById('name')
        const telephoneField = document.getElementById('telephone')
        const addressField = document.getElementById('address')
        const weightField = document.getElementById('weight')
        const emailField = document.getElementById('email')

        // Проверка имени
        const namePattern = /^[А-Яа-яЁё\s-]{2,30}$/
        if (!namePattern.test(nameField.value)) {
            isValid = false
            nameField.classList.add('error')
            errorMessage += 'Введите корректное имя.\n'
        } else {
            nameField.classList.remove('error')
        }

        // Проверка телефона
        const telephonePattern = /^\+?[\d\s\(\)-]+$/
        if (!telephonePattern.test(telephoneField.value)) {
            isValid = false
            telephoneField.classList.add('error')
            errorMessage += 'Введите корректный номер телефона.\н'
        } else {
            telephoneField.classList.remove('error')
        }

        // Проверка адреса
        const addressPattern = /^[А-Яа-яЁё\s-]+$/
        if (!addressPattern.test(addressField.value)) {
            isValid = false
            addressField.classList.add('error')
            errorMessage += 'Введите корректный адрес.\н'
        } else {
            addressField.classList.remove('error')
        }

        // Проверка веса
        const weightPattern = /^[0-9]+(\.[0-9]{1,2})?$/
        if (!weightPattern.test(weightField.value) || weightField.value <= 0) {
            isValid = false
            weightField.classList.add('error')
            errorMessage += 'Введите корректное количество в тоннах.\н'
        } else {
            weightField.classList.remove('error')
        }

        // Проверка email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
        if (!emailPattern.test(emailField.value)) {
            isValid = false
            emailField.classList.add('error')
            errorMessage += 'Введите корректный email.\н'
        } else {
            emailField.classList.remove('error')
        }

        // Если есть ошибки, отображаем их и прерываем отправку формы
        if (!isValid) {
            errorBlock.textContent = errorMessage
            errorBlock.classList.remove('ds-none')
            button.disabled = false
            button.textContent = button.dataset.text
            return
        } else {
            errorBlock.classList.add('ds-none')
        }

        if (button.disabled) return

        button.disabled = true
        button.textContent = button.dataset.altText

        const formData = new FormData(this)

        // Отправка формы на сервер для проверки reCAPTCHA и обработки данных
        const response = await fetch('/submit_email_form.php', {
            method: 'POST',
            body: formData,
        })
        const result = await response.json()

        button.disabled = false
        button.textContent = button.dataset.text

        if (result.success) {
            formBlock.classList.add('sent')
            title.textContent = title.dataset.sentTitle
            successBlock.classList.remove('ds-none')
            form.classList.add('ds-none')
        } else {
            errorBlock.classList.remove('ds-none')
            errorBlock.innerHTML = result.message
        }
    })

    // Обработчик изменения состояния согласия на обработку данных
    agree.addEventListener('change', function (evt) {
        checkSubmitButtonState()
    })

    successBlock.querySelector('button').addEventListener('click', function (event) {
        event.preventDefault()
        window.location.reload()
    })
}