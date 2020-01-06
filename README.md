# Learn-With-Coding-And-Community
This is a web-based application that is to be directly deployed onto the official Coding&amp;&amp;Community club [website]( https://codingandcommunity.org/) as an additional learning feature. It is to be added to the main site in the form of an additional tab on the upper toolbar with the name of this web-app. Clicking on the tab enables users to log into their Coding&&Community account (username/email & password) onto a separate website where they can complete curriculum, register for hackathons, and receive advice. The application employs [Moodle](https://moodle.org/), an open source learning platform (under the GPL license) as a means of delivering coding&&community's educational content.

**README template below will be filled out as this application is developed.**
## Getting Started

Follow these instructions to get a copy of this web application working on your local machine (most notably, localhost). See deployment for notes on how to deploy the project on a live system.

### Prerequisites
* Performance prerequisites TBA.
* **Web server stack (Apache, MySql, and PHP)** depending on OS and preferences: ([WAMP](http://ampps.com/wamp), [XAMPP](https://www.apachefriends.org/index.html), [MAMP](https://www.mamp.info/en/), [LAMP](https://phoenixnap.com/kb/how-to-install-lamp-stack-on-ubuntu))
* Recommended to have **phpmyadmin** working on stack. 
Note: If you have Linux and are going with LAMP,  **phpmyadmin** is not automatically included when you install all stack components. Follow instructions [here](https://www.ostechnix.com/install-phpmyadmin-with-lamp-stack-on-ubuntu-16-04/) to get **phpmyadmin** installed on LAMP.

```
Give examples
```

### Installing
**Moodle:**
  **1.** Clone/download the *moodle* and *moodledata* folders from the moodle branch on this repo into a separate folder on your machine (recommended to put on your Desktop folder).
 
  **2.** Make a copy of the *moodle* and *moodledata* folders. Move the *moodle* folder into the designated localhost directory of the web server stack you are using (ex. into */var/www/html/* if you are using LAMP). Move the *moodledata* folder into the root localhost directory folder (ex. into */var/www/* if you are using LAMP).

  **3.** Using **phpmyadmin**, create a database named *moodle_codingandcommunity*. Make sure that you name the database correctly with the right spelling or else Moodle will be unable to connect to your web server database. It is recommended you log into **phpmyadmin** with a custom account separate from *root*.

  **4.** Open up localhost on your favorite browser. Navigate to the *moodle* folder. 

  **5.** If this is your first time doing so, you may have to run through an installation process. When you reach the server checks page, you may need to install additional PHP packages for Moodle to function properly. If you have trouble passing the server checks even after following the suggested instructions, try using another web server stack. (for ex., if it does not work on WAMP, try using LAMP instead). Click [here](https://docs.moodle.org/38/en/Installation_quick_guide#Install_Moodle) for more information about installing Moodle.

  **6.** Create a Moodle account and log into it to see the distribution of Moodle in its latest edition for coding&&community. 
  
If you would like to contribute educational content to the Moodle distribution, contact the **administrator** (jesseweihuang@gmail.com or on the coding&&community Slack). If you are a Developer, simply ask in the #general thread on the *coding&&community Web App Dev* Discord server for administrator access.

```
Give the example
```

And repeat

```
until finished
```

for each step if necessary.

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments
**Developers**: Jesse Huang, Omar Cobas, Gavin Song, Yash Mistri
* Inspiration
* etc
