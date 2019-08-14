# Namespaces and Autoloading in WordPress
A simple boilerplate to autoload classes inside wordpress without composer.

<h3>Usage</h3>
<ul>
	<li>Just copy/paste autoload class from functions.php to your own</li>
	<li>Create a "lib" directory where you will place your classes. If you want to change directory just change line 55</li>
	<li>Your class file name should : class-YOUR_CLASS_NAME.php</li>
</ul>
<p>
	In my example my class inside lib folder is named Config, so the file name is class-config.php in Appi namespace.
	To use the class : 
	<pre>new Appi\Config();</pre>
</p>