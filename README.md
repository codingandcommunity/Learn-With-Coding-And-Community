# Learn-With-Coding-And-Community
An approved PITCCH project idea, Learn With Coding&&Community is a web-based application that will be integrated to the official club [website](https://codingandcommunity.org/) as an additional feature, created with the intent to spread and improve the accessibility of the club's Computer Science education.

Users can create and then log into their Coding&&Community account (username/email & password) to access our website where they can complete curriculum, register for hackathons, and receive college and career advice. The application employs [Moodle](https://moodle.org/), an open source learning platform (under the [GPL license](https://docs.moodle.org/dev/License)) as a means of delivering Coding&&Community's educational content and allowing curriculum creators to conveniently post and update coding lessons and courses.

## Curriculum Platform - Moodle
![moodle_integration_to_learnwithcoding&&community_early_stage](https://github.com/JessHua159/Learn-With-Coding-And-Community/blob/master/all_other_assets/info/moodle_integration_to_learnwithcoding%26%26community_early_stage.PNG)

## Built With
* AMP Stack - Web server stack (for Moodle), which stands for Apache, MySql, and PHP)
* [Moodle](https://moodle.org/) - Open sourced learning platform for delivering the educational and user account content
* [Node.js](https://nodejs.org/en/)
* [Okta](https://developer.okta.com/) - Authentication service provider for front-end site account system

## Deployment
We plan to use the same hosting service that Coding&&Community uses for their main website for deployment. **Please be mindful that no stable version of this application exists yet.**

# Local Copy/Installation
**If you would like to get a copy of this web application at its current state on your local machine, follow the instructions below. Bear in mind that there has not been a stable release yet, so this process is not by any means perfect.**

### Prerequisites
* **Web server stack (Apache, MySql, and PHP)** depending on OS and preferences: ([WAMP](http://ampps.com/wamp), [XAMPP](https://www.apachefriends.org/index.html), [MAMP](https://www.mamp.info/en/), [LAMP](https://phoenixnap.com/kb/how-to-install-lamp-stack-on-ubuntu))
* Recommended to have **phpmyadmin** working on stack. 
Note: If you have Linux and are going with LAMP,  **phpmyadmin** is not automatically included when you install all stack components. Follow instructions [here](https://www.ostechnix.com/install-phpmyadmin-with-lamp-stack-on-ubuntu-16-04/) to get **phpmyadmin** installed on LAMP.

### Installing
Just install this repo's **Moodle** distribution if you are only interested in the learning content specifically. If you want to see everything, from the Coding&&Community user account login to the curriculum, hackathon registration, and advice, install everything listed below (*additional instructions will be posted as those features are added*).

**Moodle:**

  **1.** Clone/download the *moodle* and *moodledata* folders from the moodle branch on this repo into a separate folder on your machine (recommended to put on your Desktop folder).
 
  **2.** Copy the *moodle* folder into the designated localhost directory of the web server stack you are using (ex. into `/var/www/html/` if you are using LAMP). Copy the *moodledata* folder into the root localhost directory folder (ex. into `/var/www/` if you are using LAMP).

  **3.** Open up localhost on your favorite browser. Navigate to the *moodle* folder. 

  **4.** If this is your first time doing the installation, you may have to run through Moodle's own installation process. When you reach the server checks page, you may need to install additional PHP packages and uncommenting the respective "includes" `;extension=<php-package>` (";" is a comment) in the php.ini config file for Moodle to function properly. If you still have trouble passing the server checks, try using another web server stack. (for ex., if it does not work on WAMP, try using LAMP instead). Click [here](https://docs.moodle.org/38/en/Installation_quick_guide#Install_Moodle) for more information on installing Moodle if you need help.

  **5.** Create a Moodle account (if you have not already done so) and log into it to see the distribution of Moodle in its latest edition for Coding&&Community. Recommend you avoid creating the account as an administrator - that's reserved for the developers.
  
  **6.** Log onto **phpmyadmin** (custom account separate from *root* recommended for security reasons, click [here](https://webmasters.stackexchange.com/questions/2242/how-to-create-separate-users-in-phpmyadmin-each-one-cant-see-others-databases) for more info), and verify that a database named *moodle_codingandcommunity* has been created. If not, then run through Moodle's installation process again. Before submitting database information to the installation, on **phpmyadmin**, create a database named *moodle_codingandcommunity* and input that into the respective field in the Moodle installation. Make sure that you name the database correctly with the right spelling or else Moodle will not work properly.

## License
* This GitHub Repo: [MIT License](https://github.com/JessHua159/Learn-With-Coding-And-Community/blob/master/LICENSE)
* Moodle: [GPL License](https://docs.moodle.org/dev/License)
