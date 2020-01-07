# Learn-With-Coding-And-Community
This is a web-based application that is to be directly deployed onto the official coding&amp;&amp;community club [website]( https://codingandcommunity.org/) as an additional learning feature in the form of a tab on the upper website toolbar. Clicking on the tab enables users to log into their coding&&community account (username/email & password) onto a separate website where they can complete curriculum, register for hackathons, and receive advice. The application employs [Moodle](https://moodle.org/), an open source learning platform (under the GPL license) as a means of delivering coding&&community's educational content.

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
Just install this repo's **Moodle** distribution if you are only interested in the learning content specifically. If you want to see everything, from the coding&&community user account login to the curriculum, hackathon registration, and advice, install everything listed below.

**Moodle:**

  **1.** Clone/download the *moodle* and *moodledata* folders from the moodle branch on this repo into a separate folder on your machine (recommended to put on your Desktop folder).
 
  **2.** Make a copy of the *moodle* and *moodledata* folders. Move the copied *moodle* folder into the designated localhost directory of the web server stack you are using (ex. into */var/www/html/* if you are using LAMP). Move the copied *moodledata* folder into the root localhost directory folder (ex. into */var/www/* if you are using LAMP).

  **3.** Using **phpmyadmin**, create a database named *moodle_codingandcommunity*. Make sure that you name the database correctly with the right spelling or else Moodle will be unable to connect to your web server database. It is recommended you log into **phpmyadmin** with a custom account separate from *root*.

  **4.** Open up localhost on your favorite browser. Navigate to the *moodle* folder. 

  **5.** If this is your first time doing so, you may have to run through an installation process. When you reach the server checks page, you may need to install additional PHP packages for Moodle to function properly. If you have trouble passing the server checks even after following the suggested instructions, try using another web server stack. (for ex., if it does not work on WAMP, try using LAMP instead). Click [here](https://docs.moodle.org/38/en/Installation_quick_guide#Install_Moodle) for more information about installing Moodle.

  **6.** Create a Moodle account and log into it to see the distribution of Moodle in its latest edition for coding&&community. 
  
If you would like to contribute educational content to the Moodle distribution, contact the **administrator** (jesseweihuang@gmail.com or on the coding&&community Slack). If you are a developer, simply ask in the #general thread on the *coding&&community Web App Dev* Discord server for administrator access.

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

Add additional notes about how to deploy this on a live system, TBA.

## Built With
* AMP Stack - Web server stack (for Moodle)
* [Moodle](https://moodle.org/) - Open sourced learning platform for delivering the educational and user account content

## Source Control

We use [Git](https://git-scm.com/) for source control. 

## Content Creators

* TBA 

## Developers

* [Jesse Huang](https://github.com/JessHua159)
* [Omar Cobas](https://github.com/omarASC5)

## License

This project is licensed under the MIT License - see the [LICENSE.md](https://github.com/JessHua159/Learn-With-Coding-And-Community/blob/master/LICENSE) file for details.

## Acknowledgments
* Inspiration
* etc
