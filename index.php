<?php
the_view('part__head');
the_view('part__header');

echo '<main class="page__content">';
echo '<div class="page__home-wrapper">';

//the_view('section__banners');
//the_view('section__features');
//the_view('section__collection');
the_view('section__quick-select');
//the_view('section__collection-2');
//the_view('section__banners-2');
//the_view('section__store');
//the_view('section__instagram');
//the_view('section__subscription');

echo '</div>';
echo '</main>';

the_view('part__footer');
