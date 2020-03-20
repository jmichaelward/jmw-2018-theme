const Encore = require('@symfony/webpack-encore');

Encore
    .setManifestKeyPrefix('./assets/dist')
    .setOutputPath('./assets/dist')
    .setPublicPath('/wp-content/themes/jmw-2018-theme/assets/dist')
    .addEntry('app', './assets/src/js/app.js')
    .addEntry('login', './assets/src/js/login.js')
    .autoProvidejQuery()
    // .enableVersioning(Encore.isProduction())
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSassLoader()
    .configureUrlLoader()
;

module.exports = Encore.getWebpackConfig();
