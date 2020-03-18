function sayHello() {
    if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
        var args = ['\n %c Made with ❤️ by Maint %c https://maint.kz %c %c \n', 'border: 1px solid #fff;color: #070707; background: #F89601; padding:5px 0;', 'color: #fff; padding:5px 0;border: 1px solid #fff;', 'padding:5px 0;', 'color: #b0976d; padding:5px 0;'];
        window.console.log.apply(console, args);
    } else if (window.console) {
        window.console.log('Made with love ❤️ Maint.kz - https://maint.kz/  ❤️');
    }
};

module.exports = sayHello;
