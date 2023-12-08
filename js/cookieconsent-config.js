import 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v3.0.0-rc.17/dist/cookieconsent.umd.js';

function inIframe() {
    try {
        return window.self !== window.top;
    } catch (ignored) {
    }
    return true;
}


CookieConsent.run({
    revision: 1,
    autoShow: !inIframe(),
    onFirstConsent: ({cookie}) => {
        location.reload()
    },
    cookie: {
        name: 'cc_cookie',
        domain: 'mimer.com',
        path: '/',
        expiresAfterDays: 182,
        sameSite: 'Lax'
    },
    guiOptions: {
        consentModal: {
            layout: "bar",
            position: "bottom",
            equalWeightButtons: true,
            flipButtons: true
        },
        preferencesModal: {
            layout: "box",
            position: "right",
            equalWeightButtons: true,
            flipButtons: true
        }
    },
    categories: {
        necessary: {
            readOnly: true
        },
        analytics: {}
    },
    language: {
        default: "en",
        translations: {
            en: {
                consentModal: {
                    title: "Cookies ",
                    description: "This site uses cookies. If you think that's ok, just click \"Accept all\". You can also choose what kind of cookies you want by clicking \"Settings\".",
                    acceptAllBtn: "Accept all",
                    acceptNecessaryBtn: "Reject all",
                    showPreferencesBtn: "Manage preferences",
                    footer: "<a href=\"#link\">Privacy Policy</a>\n<a href=\"#link\">Terms and conditions</a>"
                },
                preferencesModal: {
                    title: "Consent Preferences Center",
                    closeIconLabel: "Close modal",
                    acceptAllBtn: "Accept all",
                    acceptNecessaryBtn: "Reject all",
                    savePreferencesBtn: "Save preferences",
                    serviceCounterLabel: "Service|Services",
                    sections: [
                        {
                            title: "Strictly Necessary Cookies <span class=\"pm__badge\">Always Enabled</span>",
                            description: "Used to save preferences including the choice of this dialog",
                            linkedCategory: "necessary"
                        },
                        {
                            title: "Analytics Cookies",
                            description: "If allowed your usage of this site will be tracked using Google Analytics. The data will be used to inform us which areas need improvement.",
                            linkedCategory: "analytics"
                        },
                        {
                            title: "More information",
                            description: "For any query in relation to my policy on cookies and your choices, please <a class=\"cc__link\" href=\"#mimer.com\">contact me</a>.",
                        }
                    ]
                }
            }
        }
    }
});
