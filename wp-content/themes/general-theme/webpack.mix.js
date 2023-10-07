// webpack.mix.js

let mix = require('laravel-mix');

mix
    .js('assets/js/main.js', 'dist/js/main.js')
    .sass('assets/sass/template/sections/_hero-1.scss', 'blocks/hero-home-1/hero-section.css') //hero section
    .sass('assets/sass/template/sections/_feature.scss', 'blocks/feature-area/feature-area.css') //feature section
    .sass('assets/sass/template/sections/_about.scss', 'blocks/about-area/about-area.css') //about section
    .sass('assets/sass/template/sections/_parallax.scss', 'blocks/parallax/parallax.css') //about section
    .sass('assets/sass/template/sections/_service-offering.scss', 'blocks/service-offering/service-offering.css') //service offering
    .sass('assets/sass/template/sections/_service-provide.scss', 'blocks/service-provide/service-provide.css') //service provide
    .sass('assets/sass/template/sections/_wcu-1.scss', 'blocks/why-choose-us/why-choose-us.css') //why choose us
    .sass('assets/sass/template/sections/_counter-1.scss', 'blocks/counter-area/counter-area.css') //counter area 1
    .sass('assets/sass/template/sections/_testimonial-1.scss', 'blocks/testimonial-1/testimonial-1.css') //counter area 1
    .sass('assets/sass/template/sections/_pricing-1.scss', 'blocks/pricing-plan/pricing-plan.css') //counter area 1
    .sass('assets/sass/template/breadcumb/_breadcumb-v1-1.scss', 'blocks/hero-breadcrumb/hero-breadcrumb.css') //counter area 1
    .sass('assets/sass/template/sections/_cta-1.scss', 'blocks/cta-area/cta-area.css') //counter area 1
    .sass('assets/sass/general-style.scss', 'style.css')
    // .sass('assets/sass/general-style.scss', 'style2.css')




