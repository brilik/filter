<section class="quick-select page__quick-select">
    <div class="quick-select__container">
        <div class="quick-select__left">
            <h2 class="quick-select__title">Quick select</h2>
            <p class="quick-select__subtitle">Lorem ipsum dolor sit amet, consectet ncididunt</p>
            <?php the_view('part__filter__quick-select'); ?>
        </div>
        <div class="quick-select__right" id="quick-select-results">
            <div class="quick-select__nav"><button class="quick-select__prev" type="button" aria-label="Prev"></button>
                <h3 class="quick-select__nav-title">Top Matches</h3>
                <button class="quick-select__next" type="button" aria-label="Next"></button>
            </div>
            <div class="quick-select__directive">
                <div class="quick-select__directive-wrapper"><svg class="svg-icon svg-icon--select-arrow-mob quick-select__directive-icon-1">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#select-arrow-mob"></use>
                    </svg>
                    <div class="quick-select__directive-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</div><svg class="svg-icon svg-icon--select-arrow quick-select__directive-icon-2">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#select-arrow"></use>
                    </svg>
                </div>
            </div>
            <div class="quick-select__cards">
                <div class="quick-select__card">
                    <div class="card card--select">
                        <div class="card__wrapper"><button class="btn-favorite card__btn-favorite" type="button" aria-label="Favorite"><svg class="svg-icon svg-icon--heart">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart"></use>
                                </svg><svg class="svg-icon svg-icon--heart-filled">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart-filled"></use>
                                </svg></button><a class="card__link" href="product.html"><span class="sticker sticker--new card__sticker">New</span>
                                <h3 class="card__title">Legende Domaine Barons de Rothschild Medoc</h3>
                                <div class="card__origin">
                                    <img class="card__flag" src="<?= get_template_directory_uri(); ?>/assets/img/flags/cz.svg" width="18" height="18" alt="" />
                                    <span class="card__region">La Mancha</span>
                                    <span class="card__appelation">Appelation</span>
                                </div>
                                <div class="card__main">
                                    <figure class="card__image"><img class="card__photo" src="<?= get_template_directory_uri(); ?>/assets/img/products/product-01-small.jpg" alt="" width="92" height="220" /></figure>
                                    <div class="card__main-right">
                                        <div class="card__vivino js-tooltip" title="Vivino rating"><span class="card__vivino-caption">Vivino 3.5 (273)</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--grape card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#grape"></use>
                                            </svg><span class="card__property-caption">Glera</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--drop card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#drop"></use>
                                            </svg><span class="card__property-caption">13% alc.</span></div>
                                        <div class="card__ratings">
                                            <div class="card__rating js-tooltip" title="James Suckling">JS 85</div>
                                            <div class="card__rating js-tooltip" title="Wine Spectator">WS 85</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__price card__price--no">
                                        <div class="card__price-label">Bottle</div>
                                        <div class="card__price-value">—</div>
                                    </div>
                                    <div class="card__price">
                                        <div class="card__price-label">Case (6 bottles)</div>
                                        <div class="card__price-value">€ 76</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="quick-select__card">
                    <div class="card card--select">
                        <div class="card__wrapper"><button class="btn-favorite card__btn-favorite active" type="button" aria-label="Favorite"><svg class="svg-icon svg-icon--heart">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart"></use>
                                </svg><svg class="svg-icon svg-icon--heart-filled">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart-filled"></use>
                                </svg></button><a class="card__link" href="product.html"><span class="sticker sticker--promo card__sticker">Promo</span>
                                <h3 class="card__title">Legende Domaine Barons</h3>
                                <div class="card__origin"><img class="card__flag" src="<?= get_template_directory_uri(); ?>/assets/img/flags/es.svg" width="18" height="18" alt="" /><span class="card__region">La Mancha</span><span class="card__appelation">Appelation</span></div>
                                <div class="card__main">
                                    <figure class="card__image"><img class="card__photo" src="<?= get_template_directory_uri(); ?>/assets/img/products/product-02-small.jpg" alt="" width="92" height="220" /></figure>
                                    <div class="card__main-right">
                                        <div class="card__vivino js-tooltip" title="Vivino rating"><span class="card__vivino-caption">Vivino 3.5 (273)</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--grape card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#grape"></use>
                                            </svg><span class="card__property-caption">Glera lore mips dolor lore mips dolor</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--drop card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#drop"></use>
                                            </svg><span class="card__property-caption">13% alc.</span></div>
                                        <div class="card__ratings">
                                            <div class="card__rating js-tooltip" title="James Suckling">JS 85</div>
                                            <div class="card__rating js-tooltip" title="Wine Spectator">WS 85</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__price">
                                        <div class="card__price-label">Bottle</div>
                                        <div class="card__price-value">€ 12</div>
                                    </div>
                                    <div class="card__price">
                                        <div class="card__price-label">Case (6 bottles)</div>
                                        <div class="card__price-value card__price-value--old">€ 76</div>
                                        <div class="card__price-value card__price-value--new">€ 56</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="quick-select__card">
                    <div class="card card--select">
                        <div class="card__wrapper"><button class="btn-favorite card__btn-favorite" type="button" aria-label="Favorite"><svg class="svg-icon svg-icon--heart">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart"></use>
                                </svg><svg class="svg-icon svg-icon--heart-filled">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart-filled"></use>
                                </svg></button><a class="card__link" href="product.html"><span class="sticker sticker--bestseller card__sticker">Bestseller</span>
                                <h3 class="card__title">Legende Domaine Barons de Rothschild Medoc Legende Domaine Barons de Rothschild Medoc</h3>
                                <div class="card__origin"><img class="card__flag" src="<?= get_template_directory_uri(); ?>/assets/img/flags/fr.svg" width="18" height="18" alt="" /><span class="card__region">La Mancha and so on</span><span class="card__appelation">Appelation</span></div>
                                <div class="card__main">
                                    <figure class="card__image"><img class="card__photo" src="<?= get_template_directory_uri(); ?>/assets/img/products/product-03-small.jpg" alt="" width="92" height="220" /></figure>
                                    <div class="card__main-right">
                                        <div class="card__vivino js-tooltip" title="Vivino rating"><span class="card__vivino-caption">Vivino 3.5 (273)</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--grape card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#grape"></use>
                                            </svg><span class="card__property-caption">Glera</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--drop card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#drop"></use>
                                            </svg><span class="card__property-caption">13% alc.</span></div>
                                        <div class="card__ratings">
                                            <div class="card__rating js-tooltip" title="James Suckling">JS 85</div>
                                            <div class="card__rating js-tooltip" title="Wine Spectator">WS 85</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__price card__price--no">
                                        <div class="card__price-label">Bottle</div>
                                        <div class="card__price-value">—</div>
                                    </div>
                                    <div class="card__price">
                                        <div class="card__price-label">Case (6 bottles)</div>
                                        <div class="card__price-value">€ 76</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="quick-select__card">
                    <div class="card card--select">
                        <div class="card__wrapper"><button class="btn-favorite card__btn-favorite active" type="button" aria-label="Favorite"><svg class="svg-icon svg-icon--heart">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart"></use>
                                </svg><svg class="svg-icon svg-icon--heart-filled">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart-filled"></use>
                                </svg></button><a class="card__link" href="product.html">
                                <h3 class="card__title">Legende Domaine Barons de Rothschild Medoc</h3>
                                <div class="card__origin"><img class="card__flag" src="<?= get_template_directory_uri(); ?>/assets/img/flags/gb.svg" width="18" height="18" alt="" /><span class="card__region">La Mancha</span><span class="card__appelation">Appelation</span></div>
                                <div class="card__main">
                                    <figure class="card__image"><img class="card__photo" src="<?= get_template_directory_uri(); ?>/assets/img/products/product-05-small.jpg" alt="" width="92" height="220" /></figure>
                                    <div class="card__main-right">
                                        <div class="card__vivino js-tooltip" title="Vivino rating"><span class="card__vivino-caption">Vivino 3.5 (273)</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--grape card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#grape"></use>
                                            </svg><span class="card__property-caption">Glera</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--drop card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#drop"></use>
                                            </svg><span class="card__property-caption">13% alc.</span></div>
                                        <div class="card__ratings">
                                            <div class="card__rating js-tooltip" title="James Suckling">JS 85</div>
                                            <div class="card__rating js-tooltip" title="Wine Spectator">WS 85</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__price card__price--no">
                                        <div class="card__price-label">Bottle</div>
                                        <div class="card__price-value">—</div>
                                    </div>
                                    <div class="card__price">
                                        <div class="card__price-label">Case (6 bottles)</div>
                                        <div class="card__price-value">€ 76</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="quick-select__card">
                    <div class="card card--select">
                        <div class="card__wrapper"><button class="btn-favorite card__btn-favorite" type="button" aria-label="Favorite"><svg class="svg-icon svg-icon--heart">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart"></use>
                                </svg><svg class="svg-icon svg-icon--heart-filled">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart-filled"></use>
                                </svg></button><a class="card__link" href="product.html">
                                <h3 class="card__title">Legende Domaine Barons de Rothschild Medoc</h3>
                                <div class="card__origin"><img class="card__flag" src="<?= get_template_directory_uri(); ?>/assets/img/flags/es.svg" width="18" height="18" alt="" /><span class="card__region">La Mancha</span><span class="card__appelation">Appelation</span></div>
                                <div class="card__main">
                                    <figure class="card__image"><img class="card__photo" src="<?= get_template_directory_uri(); ?>/assets/img/products/product-06-small.jpg" alt="" width="92" height="220" /></figure>
                                    <div class="card__main-right">
                                        <div class="card__vivino js-tooltip" title="Vivino rating"><span class="card__vivino-caption">Vivino 3.5 (273)</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--grape card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#grape"></use>
                                            </svg><span class="card__property-caption">Glera</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--drop card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#drop"></use>
                                            </svg><span class="card__property-caption">13% alc.</span></div>
                                        <div class="card__ratings">
                                            <div class="card__rating js-tooltip" title="James Suckling">JS 85</div>
                                            <div class="card__rating js-tooltip" title="Wine Spectator">WS 85</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__price card__price--no">
                                        <div class="card__price-label">Bottle</div>
                                        <div class="card__price-value">—</div>
                                    </div>
                                    <div class="card__price">
                                        <div class="card__price-label">Case (6 bottles)</div>
                                        <div class="card__price-value">€ 76</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="quick-select__card">
                    <div class="card card--select">
                        <div class="card__wrapper"><button class="btn-favorite card__btn-favorite" type="button" aria-label="Favorite"><svg class="svg-icon svg-icon--heart">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart"></use>
                                </svg><svg class="svg-icon svg-icon--heart-filled">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart-filled"></use>
                                </svg></button><a class="card__link" href="product.html"><span class="sticker sticker--new card__sticker">New</span>
                                <h3 class="card__title">Legende Domaine Barons de Rothschild Medoc</h3>
                                <div class="card__origin"><img class="card__flag" src="<?= get_template_directory_uri(); ?>/assets/img/flags/es.svg" width="18" height="18" alt="" /><span class="card__region">La Mancha</span><span class="card__appelation">Appelation</span></div>
                                <div class="card__main">
                                    <figure class="card__image"><img class="card__photo" src="<?= get_template_directory_uri(); ?>/assets/img/products/product-01-small.jpg" alt="" width="92" height="220" /></figure>
                                    <div class="card__main-right">
                                        <div class="card__vivino js-tooltip" title="Vivino rating"><span class="card__vivino-caption">Vivino 3.5 (273)</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--grape card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#grape"></use>
                                            </svg><span class="card__property-caption">Glera</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--drop card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#drop"></use>
                                            </svg><span class="card__property-caption">13% alc.</span></div>
                                        <div class="card__ratings">
                                            <div class="card__rating js-tooltip" title="James Suckling">JS 85</div>
                                            <div class="card__rating js-tooltip" title="Wine Spectator">WS 85</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__price card__price--no">
                                        <div class="card__price-label">Bottle</div>
                                        <div class="card__price-value">—</div>
                                    </div>
                                    <div class="card__price">
                                        <div class="card__price-label">Case (6 bottles)</div>
                                        <div class="card__price-value">€ 76</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="quick-select__card">
                    <div class="card card--select">
                        <div class="card__wrapper"><button class="btn-favorite card__btn-favorite" type="button" aria-label="Favorite"><svg class="svg-icon svg-icon--heart">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart"></use>
                                </svg><svg class="svg-icon svg-icon--heart-filled">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart-filled"></use>
                                </svg></button><a class="card__link" href="product.html"><span class="sticker sticker--new card__sticker">New</span>
                                <h3 class="card__title">Legende Domaine Barons de Rothschild Medoc</h3>
                                <div class="card__origin"><img class="card__flag" src="<?= get_template_directory_uri(); ?>/assets/img/flags/cz.svg" width="18" height="18" alt="" /><span class="card__region">La Mancha</span><span class="card__appelation">Appelation</span></div>
                                <div class="card__main">
                                    <figure class="card__image"><img class="card__photo" src="<?= get_template_directory_uri(); ?>/assets/img/products/product-01-small.jpg" alt="" width="92" height="220" /></figure>
                                    <div class="card__main-right">
                                        <div class="card__vivino js-tooltip" title="Vivino rating"><span class="card__vivino-caption">Vivino 3.5 (273)</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--grape card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#grape"></use>
                                            </svg><span class="card__property-caption">Glera</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--drop card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#drop"></use>
                                            </svg><span class="card__property-caption">13% alc.</span></div>
                                        <div class="card__ratings">
                                            <div class="card__rating js-tooltip" title="James Suckling">JS 85</div>
                                            <div class="card__rating js-tooltip" title="Wine Spectator">WS 85</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__price card__price--no">
                                        <div class="card__price-label">Bottle</div>
                                        <div class="card__price-value">—</div>
                                    </div>
                                    <div class="card__price">
                                        <div class="card__price-label">Case (6 bottles)</div>
                                        <div class="card__price-value">€ 76</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="quick-select__card">
                    <div class="card card--select">
                        <div class="card__wrapper"><button class="btn-favorite card__btn-favorite active" type="button" aria-label="Favorite"><svg class="svg-icon svg-icon--heart">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart"></use>
                                </svg><svg class="svg-icon svg-icon--heart-filled">
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#heart-filled"></use>
                                </svg></button><a class="card__link" href="product.html"><span class="sticker sticker--promo card__sticker">Promo</span>
                                <h3 class="card__title">Legende Domaine Barons</h3>
                                <div class="card__origin"><img class="card__flag" src="<?= get_template_directory_uri(); ?>/assets/img/flags/es.svg" width="18" height="18" alt="" /><span class="card__region">La Mancha</span><span class="card__appelation">Appelation</span></div>
                                <div class="card__main">
                                    <figure class="card__image"><img class="card__photo" src="<?= get_template_directory_uri(); ?>/assets/img/products/product-02-small.jpg" alt="" width="92" height="220" /></figure>
                                    <div class="card__main-right">
                                        <div class="card__vivino js-tooltip" title="Vivino rating"><span class="card__vivino-caption">Vivino 3.5 (273)</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--grape card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#grape"></use>
                                            </svg><span class="card__property-caption">Glera lore mips dolor</span></div>
                                        <div class="card__property"><svg class="svg-icon svg-icon--drop card__property-icon">
                                                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg?v=5#drop"></use>
                                            </svg><span class="card__property-caption">13% alc.</span></div>
                                        <div class="card__ratings">
                                            <div class="card__rating js-tooltip" title="James Suckling">JS 85</div>
                                            <div class="card__rating js-tooltip" title="Wine Spectator">WS 85</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__bottom">
                                    <div class="card__price">
                                        <div class="card__price-label">Bottle</div>
                                        <div class="card__price-value">€ 12</div>
                                    </div>
                                    <div class="card__price">
                                        <div class="card__price-label">Case (6 bottles)</div>
                                        <div class="card__price-value card__price-value--old">€ 76</div>
                                        <div class="card__price-value card__price-value--new">€ 56</div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
