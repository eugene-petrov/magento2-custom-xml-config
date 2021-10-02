[![ExtDN M2 Coding Standard](https://github.com/eugene-petrov/magento2-custom-xml-config/actions/workflows/coding-standard.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-custom-xml-config/actions/workflows/coding-standard.yml)
[![ExtDN M2 Mess Detector](https://github.com/eugene-petrov/magento2-custom-xml-config/actions/workflows/mess-detector.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-custom-xml-config/actions/workflows/mess-detector.yml)
[![ExtDN M2 PHPStan](https://github.com/eugene-petrov/magento2-custom-xml-config/actions/workflows/phpstan.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-custom-xml-config/actions/workflows/phpstan.yml)

***Snippet_CustomXmlConfig***

_Task:_ You need to create a custom config file.

Test url: `http://{host.name}/config/`

To enable this module execute:
- php bin/magento --clear-static-content module:enable Snippet_CustomXmlConfig
- php bin/magento setup:upgrade
