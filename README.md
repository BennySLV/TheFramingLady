<h2>Synopsis</h2>

<p>This project is a prototype website for The Framing Lady - a former picture framing business. The website is designed using HTML, CSS and Bootstrap and will be developed using JavaScript/jQuery as well as PHP and MySQL.</p>

<h2>Motivation</h2>

<p>The main purpose of this project is to enhance my personal project portfolio as well as simulate a standard web development lifecycle project.</p>

<h2>Installation</h2>

<p>Please note that to view the "testimonials" page data and to successfully test the contact form on the "contact" page, you will need a web server. It is also recommended to set up your own virtual host on your preferred web-server stack.</p>

For example if you are using the LAMP Stack on Ubuntu, please do the following using the terminal:

<ol>
<li>Access the following file and edit using your preferred text editor (e.g. nano or vim):</li>
  - <code>/etc/apache2/sites-enabled/000-default.conf</code><br />

<li>Inside your <code>000-default.conf</code> file, add the following code at the bottom of the file:</li><br />

<code>&lt;VirtualHost *:80&gt;</code><br />
        <code>ServerName theframinglady.dev</code><br />
        <code>DocumentRoot /var/www/TheFramingLady/public</code><br />
        <code>SetEnv APPLICATION_ENV "development"</code><br />
        <code>&lt;Directory /var/www/TheFramingLady/public&gt;</code><br />
                  <code>Options FollowSymLinks</code><br />
                  <code>DirectoryIndex index.php</code><br />
                  <code>AllowOverride All</code><br />
                  <code>Order allow,deny</code><br />
                  <code>Allow from all</code><br />
        <code>&lt;/Directory&gt;</code><br />
<code>&lt;/VirtualHost&gt;</code>

<li>Then access your hosts file (<code>/etc/hosts</code>) and add a new line underneath your existing hosts with the following code:</li>

<code>127.0.0.1       theframinglady.dev localhost</code>
</ol>
<p>Please note that these above details will be different if you choose to use your own personal web server as opposed to localhost or if you plan to use another web-server stack such as MAMP, XAMPP, WAMP, etc.</p>