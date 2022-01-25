# Magento Module Shoman OneTrust

    `shoman/module-onetrust`

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)



## Main Functionalities
- Module to integrate OneTrust Cookie Script and put the tracking script just after the opening <head> tag.
- Compatible with Magento 2.2.x, 2.3.x, 2.4.x


## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Shoman`
 - Enable the module by running `php bin/magento module:enable Shoman_OneTrust`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require shoman/module-onetrust`
 - enable the module by running `php bin/magento module:enable Shoman_OneTrust`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Enabled (onetrust/general/is_enabled)

 - Site ID (onetrust/general/siteid)


## Specifications

 - This module adds the OneTrust tracking script right after the opening <head> tag and before the Magento 2 core requireJS.



