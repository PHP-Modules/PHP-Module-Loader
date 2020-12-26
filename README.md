<h1>What is PHP Modules?</h1>
<p>In case you couldn't guess from the name, it's a module loader for PHP. It also includes an API that modules can use.</p>

<h1>How do I install it?</h1>
<p>Just download the code, place <code>module-loader.php</code> in the root of your website, and create a folder called <code>modules</code>. Next write the code <code>require &quot;module-loader.php&quot;</code> at the top of your PHP file inside of a PHP tag (<code>&lt;?php?&gt;</code). This will require the module loader to be loaded so that you can load modules and your modules can use the API. When your ready to load a module, just type the following code into your PHP file:</p>
<br>
<p>
<code>
if(moduleExists(&quot;example-module&quot;)) {<br>&nbsp;useInstalledModule(&quot;example-module&quot;)<br>}</p>
