<article class="markdown-body entry-content container-lg" itemprop="text"><h2 dir="auto"><a id="user-content-installation" class="anchor" aria-hidden="true" href="#installation"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>INSTALLATION</h2>
<ol dir="auto">
<li>
<p dir="auto">Prerequisites Required</p>
<ul dir="auto">
<li>PHP 8.0.2 or greater</li>
<li>MySQL 5.7 and above</li>
</ul>
</li>
<li>
<p dir="auto">Clone the repository and run the following command</p>
</li>
</ol>
<p dir="auto"><code>composer install</code></p>
<ol start="3" dir="auto">
<li>Run the migrations</li>
</ol>
<p dir="auto">Please update your .env file to point to an empty database before running the following command</p>
<p dir="auto"><code>php artisan migrate</code></p>
<ol start="4" dir="auto">
<li>Run the Seeders</li>
</ol>
<p dir="auto"><code>php artisan db:seed ProductsTableSeeder</code></p>
<p dir="auto">Update the <code>APP_URL</code> in the <code>.env</code> file as <a href="http://127.0.0.1:8000" rel="nofollow">http://127.0.0.1:8000</a></p>
<p dir="auto">Run the application using the following command</p>
<p dir="auto"><code>php artisan serve</code></p>
<p dir="auto">Contact</p>
<p dir="auto">If you face any issues, feel free to reach out to me.</p>
</article>
