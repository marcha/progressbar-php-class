Progressbar PHP Class
======================

A PHP class for displaying a progress bar with Bootstrap and jQuery.
Take a look at the index.php for how to use it.

**Bootstrap**:
http://www.getbootstrap.com  
**jQuery**: http://www.jquery.com

##Usage
###ProgressbarHandler::__construct($addClasses="", $current)
Constructor
####$addClasses
Add bootstrap-classes to the html part, that is inserted into the index.php through ProgressbarHandler::insert().
####$current
The Status of the Progressbar, usual starts at 0.

###ProgressbarHandler::insert()
Insert the HTML Tags via echo(), when called.

###ProgressbarHandler::update()
Insert Javascript to animate the Progressbar. Changes the width to ProgressbarHandler::$current

###ProgressbarHandler::hide($timeout)
jQuery.FadeOut() the progressbar after $timeout.
####$timeout
Change the default timeout value (2000ms)

###ProgressbarHandler::set_current($current)
Setter for ProgressbarHandler::$current
