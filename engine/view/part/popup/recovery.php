<div class="popup popup--recovery" id="popup-recovery"><button class="popup__close" type="button" title="Закрыть"></button>
    <div class="popup__container">
        <h2 class="popup__title">Forgot password?</h2>
        <p class="popup__subtitle">Please enter your email address below to receive a password reset link</p>
        <form class="form form--popup js-validate popup__form" action="#" method="POST" id="form-recovery">
            <div class="field field--type-email form__field field--icon">
                <div class="field__field"><input type="email" name="email" placeholder="Enter Your Email" id="form-recovery-email" required="required" data-validator-required-message="This field is required" data-validator-email-message="This field requires a valid e-mail address" /><svg class="svg-icon svg-icon--field-email field__icon">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#field-email"></use>
                    </svg></div>
            </div><button class="button form__submit button--red" type="submit">Submit</button>
        </form>
    </div>
</div>