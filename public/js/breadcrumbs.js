'use strict';
const $ = (selector) => document.querySelector(selector);
const $$ = (selector) => document.querySelectorAll(selector);
const breadcrumb = $('.breadcrumb');
const breadcrumbSteps = $$('.breadcrumb__step');

[].forEach.call(breadcrumbSteps, (item, index, array) => {
    item.onclick = () => {
        if (!item.classList.contains('breadcrumb__step--active')) {
            for (let i = 0, l = array.length; i < l; i++) {
                if (index >= i) {
                    array[i].classList.add('breadcrumb__step--active');
                } else {
                    array[i].classList.remove('breadcrumb__step--active');
                }
            }
        }
    };
});
