# Laravel Web Installer | A Web Installer [Package](https://packagist.org/packages/tnb/laravel-installer)

[![Total Downloads](https://poser.pugx.org/tnb/laravel-installer/d/total.svg)](https://packagist.org/packages/tnb/laravel-installer)
[![Latest Stable Version](https://poser.pugx.org/tnb/laravel-installer/v/stable.svg)](https://packagist.org/packages/tnb/laravel-installer)
[![License](https://poser.pugx.org/tnb/laravel-installer/license.svg)](https://packagist.org/packages/tnb/laravel-installer)

- [About](#about)
- [Requirements](#requirements)
- [Installation](#installation)
- [Routes](#routes)
- [Usage](#usage)
- [Contributing](#contributing)
- [Help](#help)
- [Screenshots](#screenshots)
- [Changelog](#changelog)

## About

Do you want your clients to be able to install a Laravel project just like they do with WordPress or any other CMS?
This Laravel package allows users who don't use Composer, SSH etc to install your application just by following the setup wizard.
The current features are :

- Check For Server Requirements.
- Check For Folders Permissions.
- Ability to set database information.
	- .env text editor
	- .env form wizard
- Migrate The Database.
- Seed The Tables or run other artisan commands.

## Requirements

* [Laravel 9+](https://laravel.com/docs/installation)

## Installation

1. From your projects root folder in terminal run:

```bash
    composer require tnb/laravel-installer
```

2. Publish the packages views, config file, assets, and language files by running the following from your projects root folder:

```bash
    php artisan vendor:publish --tag=laravelinstaller
```

## Routes

* `/install`
* `/update`

## Usage

* **Install Routes Notes**
	* In order to install your application, go to the `/install` route and follow the instructions.
	* Once the installation has ran the empty file `installed` will be placed into the `/storage` directory. If this file is present the route `/install` will abort to the 404 page.

* **Update Route Notes**
	* In order to update your application, go to the `/update` route and follow the instructions.
	* The `/update` routes countes how many migration files exist in the `/database/migrations` folder and compares that count against the migrations table. If the files count is greater then the `/update` route will render, otherwise, the page will abort to the 404 page.

* Additional Files and folders published to your project :

| File                                | File Information                                                                                                                                                                                                            |
|:------------------------------------|:----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `config/installer.php`              | In here you can set the requirements along with the folders permissions for your application to run, by default the array cotaines the default requirements for a basic Laravel app.                                        |
| `public/installer/assets`           | This folder contains a css folder and inside of it you will find a `main.css` file, this file is responsible for the styling of your installer, you can overide the default styling and add your own.                       |
| `resources/views/vendor/installer`  | This folder contains the HTML code for your installer, it is 100% customizable, give it a look and see how nice/clean it is.                                                                                                |
| `lang/zh-CN/installer_messages.php` | This file holds all the messages/text, currently only English and Simplified Chinese is available, if your application is in another language, you can copy/past it in your language folder and modify it the way you want. |

## Contributing

* If you have any suggestions please let me know : https://github.com/tnb-labs/laravel-installer/pulls.
* Please help us provide more languages for this awesome package please send a pull request https://github.com/tnb-labs/laravel-installer/pulls.

## Help

* Cannot figure it out? Need more help? Here is a video tutorial: [Laravel Installer by Devdojo](https://www.youtube.com/watch?v=Jput5doFYLg)

## Screenshots

###### Installer
![Laravel web installer | Step 1](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/1-welcome.jpg)
![Laravel web installer | Step 2](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/2-requirements.jpg)
![Laravel web installer | Step 3](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/3-permissions.jpg)
![Laravel web installer | Step 4 Menu](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4-environment.jpg)
![Laravel web installer | Step 4 Classic](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4a-environment-classic.jpg)
![Laravel web installer | Step 4 Wizard 1](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-1.jpg)
![Laravel web installer | Step 4 Wizard 2](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-2.jpg)
![Laravel web installer | Step 4 Wizard 3](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-3.jpg)
![Laravel web installer | Step 5](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/5-final.jpg)

###### Updater
![Laravel web updater | Step 1](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/update/1-welcome.jpg)
![Laravel web updater | Step 2](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/update/2-updates.jpg)
![Laravel web updater | Step 3](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/update/3-finished.jpg)

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.
