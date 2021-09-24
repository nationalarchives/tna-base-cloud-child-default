# tna-base-cloud default child theme

This should be used when creating new child themes for tna-base-cloud

### 1.0 Clone the Github repository using SourceTree

Click 'Remote' in SourceTree and you will be shown a full list of repositories you have access to. Click on 'Clone' and follow the prompts.

### 1.1 Create a new project in PhpStorm

* Select 'Create New Project from Existing Files'
* Select 'Web server is installed locally, source files are located under its document root'
* Set /Applications/MAMP/htdocs/sites/tna-base-dev/wp-content/themes/tna-... and click 'Project Root'
* Specify parameters for a new server as:
  * Name: tna-...
  * Web server root URL: http://tna-base:8888
  * Set Project URL as: http://tna-base:8888

### 1.2 Installing dependencies

#### 1.2.1 Obtaining dependencies via Composer

Having followed the steps above you will be able to install dependencies by typing ```composer install``` at the Terminal.

#### 1.2.2 Obtaining dependencies via NPM

Type ```npm install``` to obtain Node dependencies

### 1.3 Running PHPUnit

Having followed the steps under 'Obtaining dependencies via Composer' type ```vendor/bin/phpunit -c phpunit.xml``` from within the tna-base directory to run Unit Tests for the project.

Note: PhpStorm allows for PHPUnit integration - allowing your tests to be run automatically. Search the JetBrains website to find out how to configure this.

### 1.4 Running Jasmine tests

Having obtained the dependencies you can type ```grunt jasmine``` to run JavaScript tests