window._ = require('lodash');

import Vue from 'vue';
import Form from './core/Form';

window.Vue = Vue;
window.axios = require('axios');
window.Form = Form;

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
};

axios.interceptors.request.use(function (config) {
    if (config.url.charAt(0) !== '/') {
        config.url = '/api/v1/' + config.url;
    }
    return config;
});