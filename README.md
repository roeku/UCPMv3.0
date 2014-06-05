UCPMv3.0
========

UCPM v3.0: third git rep. for the course user centered project design.

## [DEMO](http://jellevandevelde.com/UCPM/ "demo")

## SOURCE CODE

Within the root directory we have created the pages that:

1. Define the header of a page
2. Import the the necessary php files (init.php, head.php, menu.php)
3. Import the corresponding template files
4. Import the correct .js files

In the [core/functions/...](URL "functions") you can find the functions we have created to make this prototypes actions actually output something.

In [core/database/...](URL "database") you can find a connect.php file that provides a connection to the mySQL database needed to store the users, appointments, deliveries and recipes.

In [core/init.php](URL "init.php") you can find the collection of imported function files.

In [templates/...](URL "content") we have created a content file that will display the correct content needed for a certain page. It is also the place where we the needed functions are performed. We have tried to give all the content files the same name as their overhead file.

## DATABASE

Like previously mentioned we have 4 tables namely the following:

### UCPM_appointments

INSERT IMAGE

* The appID gives every new appointment an unique ID;
* the userID is defined within UCPM_employes and is used to combine these two tables,
* the inviteesID is used to determine in whose calendar the appointment should be included, if inviteesID = 0 then there are no other users with the same appointment;
* the label can be 3 different inputs (professional, private or holiday);
* the secret is either 0 or 1, if it's 0 the appointment won't show up when colleagues are looking at a users calendar.

### UCPM_deliveries

INSERT IMAGE

### UCPM_employes

INSERT IMAGE


### UCPM_recipes

INSERT IMAGE