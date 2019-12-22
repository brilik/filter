<div class="popup popup--auth" id="popup-auth"><button class="popup__close" type="button" title="Закрыть"></button>
    <div class="popup__tabs">
        <div class="popup__tabs-buttons">
            <div class="popup__tabs-button" tabindex="1">Sign in</div>
            <div class="popup__tabs-button" tabindex="1">Register</div>
        </div>
        <div class="popup__tabs-pages">
            <div class="popup__tabs-page">
                <div class="popup__container">
                    <form class="form form--popup js-validate popup__form" action="#" method="POST" id="form-sign-in">
                        <div class="field field--type-email form__field field--icon">
                            <div class="field__field"><input type="email" name="email" placeholder="Enter Your Email" id="form-sign-in-email" required="required" data-validator-required-message="This field is required" data-validator-email-message="This field requires a valid e-mail address" /><svg class="svg-icon svg-icon--field-email field__icon">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#field-email"></use>
                                </svg></div>
                        </div>
                        <div class="field field--type-password form__field field--icon">
                            <div class="field__field"><input type="password" name="password" placeholder="Enter password" id="form-sign-in-password" required="required" minlength="5" data-validator-required-message="This field is required" data-validator-minlength-message="This field length must be at least ${1} symbols" /><svg class="svg-icon svg-icon--field-password field__icon">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#field-password"></use>
                                </svg></div>
                        </div><a class="form__link-recovery js-popup" href="#popup-recovery">Forgot Your Password?</a><button class="button form__submit button--red" type="submit">Sign In</button>
                    </form>
                </div>
                <div class="popup__hint">Don’t have an account? <a href="#popup-auth" data-tab="1">Register now</a></div>
            </div>
            <div class="popup__tabs-page">
                <div class="popup__container">
                    <form class="form form--popup js-validate popup__form" action="#" method="POST" id="form-register">
                        <div class="field field--type-text form__field field--icon">
                            <div class="field__field"><input type="text" name="first-name" placeholder="First name" id="form-register-first-name" required="required" data-validator-required-message="This field is required" /><svg class="svg-icon svg-icon--field-name field__icon">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#field-name"></use>
                                </svg></div>
                        </div>
                        <div class="field field--type-text form__field field--icon">
                            <div class="field__field"><input type="text" name="last-name" placeholder="Last name" id="form-register-last-name" required="required" data-validator-required-message="This field is required" /><svg class="svg-icon svg-icon--field-name field__icon">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#field-name"></use>
                                </svg></div>
                        </div>
                        <div class="field field--type-email form__field field--icon">
                            <div class="field__field"><input type="email" name="email" placeholder="Enter Your Email" id="form-register-email" required="required" data-validator-required-message="This field is required" data-validator-email-message="This field requires a valid e-mail address" /><svg class="svg-icon svg-icon--field-email field__icon">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#field-email"></use>
                                </svg></div>
                        </div>
                        <div class="field field--type-password form__field field--icon">
                            <div class="field__field"><input type="password" name="password" placeholder="Enter password" id="form-register-password" required="required" data-validator-required-message="This field is required" /><svg class="svg-icon svg-icon--field-password field__icon">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#field-password"></use>
                                </svg></div>
                        </div>
                        <div class="form__text">
                            <p>From time to time, we would like to tell you about offers, news, services and products which we think will be of interest to you. If you would prefer not to hear from Clear.Wine, then let us know <a href="#" class="form__toggle">here</a>.</p>
                            <p>To find out more about how we keep your personal details safe, please read our <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.</p>
                        </div>
                        <div class="form__text hidden">
                            <p>Please note, by choosing not to receive communications from us, we cannot send you details of offers, events, news or services by email or post which we think will be of interest to you. If you find you are missing out on something you want to hear about, you can opt in to some, or all, of our communications at any time.</p>
                            <div class="field field--type-checkbox form__checkbox"><input type="checkbox" name="renouncement" id="form-auth-renouncement" /><label class="field__label" for="form-auth-renouncement"><span class="field__check"></span>I do NOT want to receive updates on new products, offers and events from Clear.Wine via email</label></div>
                            <p>To find out more about how we keep your personal details safe, please read our <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.</p>
                        </div><button class="button form__submit button--red" type="submit">Register</button>
                    </form>
                </div>
                <div class="popup__hint">Already have account? <a href="#popup-auth" data-tab="0">Sign in</a></div>
            </div>
        </div>
    </div>
</div>