<div class="popup email-form-block" id="popup">
    <div class="popup__body">
        <div class="popup-scroll">
            <div class="popup__body_top">
                <div class="popup__body_top-title" data-title="Заполните форму" data-sent-title="Заявка успешно отправлена">
                    Заполните форму 
                </div>
                <div class="popup__body_top-close" id="pop-close">
                    <picture>
                        <source srcset="./assets/img/pop-close.webp" type="image/webp">
                        <img src="./assets/img/pop-close.png" alt="Закрыть">
                    </picture>
                </div>
            </div>

            <form id="email-form">
                <div class="error-block ds-none"></div>

                <div class="form-field">
                    <label for="name">Ваше имя</label>
                    <input type="text" id="name" name="name" pattern="[А-Яа-яЁё\s-]{2,30}" title="Только русские буквы, пробелы и дефисы" 
                    value="Например Иван Иванович" 
                    onblur="if(value=='') value = 'Например Иван Иванович'" onfocus="if(value=='Например Иван Иванович') value = ''" 
                    required>
                </div>

                <div class="form-field">
                    <label for="telephone">Номер телефона</label>
                    <input type="tel" id="telephone" name="telephone" pattern="\+?[\d\s\(\)-]+" title="Формат: +7 (XXX) XXX-XX-XX" 
                    value="Например +7 (960) 123-45-67"  
                    onblur="if(value=='') value = 'Например +7 (960) 123-45-67'" onfocus="if(value=='Например +7 (960) 123-45-67') value = ''" 
                    required>
                </div>

                <div class="form-field">
                    <label for="address">Город или населенный пункт</label>
                    <input type="text" id="address" name="address" pattern="[А-Яа-яЁё\s-]+" title="Только русские буквы, пробелы и дефисы" 
                    value="Например Краснодар"  
                    onblur="if(value=='') value = 'Например Краснодар'" onfocus="if(value=='Например Краснодар') value = ''" 
                    required>
                </div>

                <div class="form-field">
                    <label for="weight">Колличество в тоннах</label>
                    <input type="number" id="weight" name="weight" min="0" step="0.01" title="Введите число больше 0" 
                    value="3"  
                    onblur="if(value=='') value = '3'" onfocus="if(value=='3') value = ''" 
                    required>
                </div>

                <div class="form-field">
                    <label for="email">Электронная почта</label>
                    <input type="email" id="email" name="email" title="Введите корректный email" 
                    value="ivan@example.com"  
                    onblur="if(value=='') value = 'ivan@example.com'" onfocus="if(value=='ivan@example.com') value = ''" 
                    required>
                </div>

                <div class="form-field form-field-submit">
                    <button type="submit" class="btn-green" data-alt-text="Отправка" data-text="Отправить заявку">
                        Отправить заявку
                    </button>
                </div>

                <div class="form-field">
		    <div class="g-recaptcha" data-sitekey="6Ld5gbcqAAAAAFhVm0s3hxpm775C-5OaOZ_oW15A" data-callback="verifyRecaptchaCallback"></div>
                </div>

                <div class="form-field-checkbox">
                    <input type="checkbox" id="agree" name="agree" required>
                    <label for="agree">Согласен на обработку персональных данных</label>
                </div>

                <div class="form-description">
                    <p><b>*</b> заполнение формы не обязывает вас к покупке</p>
                    <p><b>*</b> все данные защищены и не будут переданы третьим лицам</p>
                </div>
            </form>

            <div class="send-success-block ds-none">
                <button type="button" class="btn-green close-btn">
                    Ок
                </button>
            </div>
        </div>
    </div>
</div>