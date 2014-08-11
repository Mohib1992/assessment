assessment
==========

<h1>To install, Run & Edit this project follow those steps</h1>
<p>
<h2>Requirement :</h2>
    <ul>
    <li>PHP 5 or avob</li>
    <li>Composer</li>
    <li>CodeLobstare PHP Edition</li>
  </ul>
</p>

<h2>Installing laravel</h2>

Step 1 : Download & Install Composer <a href='https://getcomposer.org/download/'>Composer</a> (go to Windows Installer if you are using Windows and download the Installer .exe file). 
    
Step 2 : Restart your computer.

Step 3 :  Go to C:\wamp\bin\apache\Apache2.4.4\conf (if you use wamp) , open httpd.conf with notepad (any text editor), look for ssl_module , remove the # infront of LoadModule ssl_module modules/mod_ssl.so .

Step 4 : Start the Wamp Server 6. Run CMD as Administrator 

Step 5 : In command prompt change directory to C:\wamp\www\ then 
run this code: composer create-project laravel/laravel project_name
  
<h2>Run Project</h2>

Step 1 : Open git command prompt.

Step 2 : Go to the /app folder into the project directory.

Step 3 : Clone this repository.

Step 4 : Go to /config folder & open database.php with notepad.Change the database settings acording to your requirement.

Step 5 : Run cmd.exe command prompt & go to your project directory.

Step 6 : Type php artisan maigration

Step 7 : Then open browser and access the /public folder.
