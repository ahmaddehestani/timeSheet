import {createI18n} from 'vue-i18n';

import fa from '../i18n/fa.json';
import en from '../i18n/en.json';

const i18n = createI18n({
    locale: "fa",
    allowComposition: true,
    messages: {
        fa,
        en
    }
});

export default i18n;
