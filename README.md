# Namespaces and Autoloading in WordPress
A simple boilerplate to autoload classes inside wordpress without composer.

<h3>Usage</h3>
<ul>
	<li>Just copy/paste autoload class from functions.php to your own</li>
	<li>Create a "lib" directory where you will place your classes. If you want to change directory just change line 55</li>
	<li>Your class file name should : class-YOUR_CLASS_NAME.php</li>
</ul>
<p>
	In my example my class inside lib folder is named Config, so <strong>the file name is class-config.php</strong> in Appi namespace.
	To use the class : 
	<pre>new Appi\Config();</pre> or 
</p>
<p>
	for plugins don't forget to change 
	<pre> get_template_directory() </pre>
	by
	<pre>
		plugin_dir_path(__FILE__)
	</pre>
	<a href="https://bit.ly/31BMwyw">plugin_dir_path</a>
</p>