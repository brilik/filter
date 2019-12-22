<?php // \engine\Debug::pr(get_product()); ?>
<!-- food_type=Meat,Fish&wine_type=Red,White,Rose&country=La%20Mancha,Italy,Other&price_basic=60:150 -->
<div class="quick-select__filters">
    <div class="filter-qs quick-select__filter">
        <div class="filter-qs__label">Food type</div>
        <div class="filter-qs__control">
            <button class="filter-qs__toggle" type="button"><span class="filter-qs__caption">Food type</span><span class="filter-qs__placeholder">Choose food type</span></button>
            <div class="filter-qs__dropdown">
                <ul class="filter-qs__items">
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-food[]" value="Meat" id="filter-qs-food-1" onclick="pushParam(this, 'food_type');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-food-1">Meat</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-food[]" value="Fish" id="filter-qs-food-2" onclick="pushParam(this, 'food_type');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-food-2">Fish</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-food[]" value="Poultry" id="filter-qs-food-3" onclick="pushParam(this, 'food_type);"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-food-3">Poultry</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-food[]" value="Dessert" id="filter-qs-food-4" onclick="pushParam(this, 'food_type);"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-food-4">Dessert</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="filter-qs quick-select__filter">
        <div class="filter-qs__label">Wine type</div>
        <div class="filter-qs__control">
            <button class="filter-qs__toggle" type="button"><span class="filter-qs__caption">Wine type</span><span class="filter-qs__placeholder">Choose wine type</span></button>
            <div class="filter-qs__dropdown">
                <ul class="filter-qs__items">
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-wine[]" value="Red" id="filter-qs-wine-1" onclick="pushParam(this,'wine_type');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-wine-1">Red</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-wine[]" value="White" id="filter-qs-wine-2" onclick="pushParam(this,'wine_type');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-wine-2">White</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-wine[]" value="Rose" id="filter-qs-wine-3" onclick="pushParam(this,'wine_type');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-wine-3">Rose</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-wine[]" value="Champagne" id="filter-qs-wine-4" onclick="pushParam(this,'wine_type');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-wine-4">Champagne / Sparkling</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="filter-qs quick-select__filter">
        <div class="filter-qs__label">Country</div>
        <div class="filter-qs__control">
            <button class="filter-qs__toggle" type="button"><span class="filter-qs__caption">Country</span><span class="filter-qs__placeholder">Choose country</span></button>
            <div class="filter-qs__dropdown">
                <ul class="filter-qs__items">
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-country[]" value="France" id="filter-qs-country-1" onclick="pushParam(this,'country');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-country-1">France</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-country[]" value="Italy" id="filter-qs-country-2" onclick="pushParam(this,'country');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-country-2">Italy</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-country[]" value="Spain" id="filter-qs-country-3" onclick="pushParam(this,'country');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-country-3">Spain</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-country[]" value="Other" id="filter-qs-country-4" onclick="pushParam(this,'country');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-country-4">Other</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="filter-qs quick-select__filter">
        <div class="filter-qs__label">Price range</div>
        <div class="filter-qs__control"><button class="filter-qs__toggle" type="button"><span class="filter-qs__caption">Price range</span><span class="filter-qs__placeholder">Choose price range</span></button>
            <div class="filter-qs__dropdown">
                <ul class="filter-qs__items">
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-price[]" value="0-10" id="filter-qs-price-1" onclick="pushParam(this,'price_basic');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-price-1">Under 10 €</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-price[]" value="10-15" id="filter-qs-price-2" onclick="pushParam(this,'price_basic');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-price-2">10 € to 15 €</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-price[]" value="15-30" id="filter-qs-price-3" onclick="pushParam(this,'price_basic');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-price-3">15 € to 30 €</label>
                        </div>
                    </li>
                    <li class="filter-qs__item">
                        <div class="filter-qs__checkbox">
                            <input type="checkbox" name="filter-price[]" value="30+" id="filter-qs-price-4" onclick="pushParam(this,'price_basic');"/>
                            <label class="filter-qs__checkbox-label" for="filter-qs-price-4">Over 30 €</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="quick-select__buttons">
    <a class="quick-select__button-results" href="#" role="button">All Results</a>
    <button class="quick-select__button-reset" type="button">
        <svg class="svg-icon svg-icon--delete">
            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#delete"></use>
        </svg>
        <span>Reset Filters</span></button>
</div>