# Welcome by the jora framework wiki.

##the addons:
application::loadAddon('session');
application::loadAddon('email');
application::loadAddon('encrypt');

###session:
    session::createSession('test', 'hoi');
    echo session::readSession('test');
    session::distroySession('test');

###email:
    email::setFrom();
    email::setTo();
    email::setMessage();
    email::setSubject();
    email::sendEmail();

###encrypt:
    encrypt::encryptData('data');