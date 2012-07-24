Zendless YouTube API Library
============================
This PHP library will let you make YouTube API requests with the dependency on Zend GData. It is a port of the CodeIgniter Library I wrote. That library can be found here: https://github.com/jimdoescode/CodeIgniter-YouTube-API-Library

If you have any questions please ask them on my blog: http://jimdoescode.blogspot.com

Demo Configuration
------------------
In the demo files (index.php and authorize.php) replace all of the TODO information with their appropriate values. Check the code comments for what to put in each. Make sure you change the callback URL in index.php to reflect your server setup. In this example the callback needs to point to the authorize.php file.

key = Your OAuth Consumer key
secret = Your OAuth Consumer secret
apikey = Your YouTube api key
callback = The location of authorize.php on your server (mine happens to be: http://localhost/youtube_api/authorize.php

After you have all the appropriate values entered or changed then you can visit index.php and click the link. You will be redirected to Google to verify your application. After that you are redirected to authorize.php which will finish the OAuth authentication and instantiate the YouTube api with your new access token values. The YouTube api can then make authenticated calls.

Additional Information
----------------------
It's worth mentioning that OAuth v1 access tokens don't expire so you only need your users to authenticate with your application once. Store the access token data in your database. Then retrieve it from the database next time you need to make a call. The example code is purely academic in regards to authenticating with YouTube.

The example files are index.php and authorize.php those files should not be included in your project they are just for reference and a working example.

License
-------
This code is license under the MIT library.
