<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

honeypot-spam-controller

These is a simple spam prevention which has 2 hidden inputs in honeypot.blade.php Created a a midware and a config so that it will be reusable. 
If config is enabled midware will check if inputs are empty or the fields are filled to fast. If yes it will abort if no it will pass the request Passed vars throut component class to view.
