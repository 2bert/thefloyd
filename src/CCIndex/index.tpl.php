<h1>Index Controller</h1>
<p>Welcome to Floyd index controller.</p>

<h2>Download</h2>
<p>You can download Floyd from github.</p>
<blockquote>
<code>git clone git://github.com/2bert/thefloyd.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/2bert/thefloyd'>https://github.com/2bert/thefloyd</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Floyd needs
to be able to write and create files.</p>
<blockquote>
<code>cd thefloyd; chmod 777 site/data</code>
</blockquote>

<p>Second, Floyd has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>
