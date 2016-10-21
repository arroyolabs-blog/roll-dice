Roll the Dice
============

Sample application from the blog post http://cms.arroyolabs.com/?p=459&preview=true


Installation
------------

***via git & composer***

If you prefer to install yourself you can clone erdiko from github and run "composer install" in the root folder.

1. git clone git@github.com:arroyolabs-blog/roll-dice.git
2. cd roll
3. composer install

***Server***

Now that you have the latest code, set up an apache vhost to the webroot which is located at /public/

In general, files that are downloaded in the browser go in the /public folder while application code goes in the /app folder.  Erdiko packages are located in the /vendor/erdiko/ folder.


Docker
------

If you want to run your new site using docker use our bundled container scripts by running docker-compose in the docker folder.

	cd docker

	docker-compose up -d


Erdiko Documentation
--------------------

See our full documentation at http://erdiko.org/


**Who is behind Erdiko?**

Erdiko was created by [Arroyo Labs](http://arroyolabs.com)
