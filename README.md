<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

honeypot-spam-controller
<pre>
These is a simple spam prevention which has 2 hidden inputs in honeypot.blade.php.
It is composed by a middleware and a config file. 
If in the config setup file the honeypot is enabled middleware would start cheching if inputs are empty or the fields are filled to fast.
If any of the condition is met it will abort, else it will pass the request through component class -> view.


There is another branch called asPackage. 
    In this branch we groupped all file related to honey pot in a folder in ap app dir.
    Created and registered a service provider to be able to register the config file and the compoenent.
</pre>
