# PersonalBlog-laravel
This website is a blog website with the complete CMS built based on the laravel5 and Mysql. It has also integrated the Sass frontend theme so as to be responsive

To run this project, you will first need to open your MAMP/WAMP to enbale the Mysql and Apache Servers.

step1: open your Mysql database
run the code like:

```mysql -u root -p ```

and enter the password for your database. 

Step2: start your server by running:

```php artisan serve```

Then, your project will be alive on the localhost:8000.

It is worth mentioning that you can use seed to generate some dummy data, so run the code:

``` php artisan migrate:refresh --seed ```

Then the localhost:8000 should have the original data to display. 

Register and Login into the CMS to manage the Posts, tags and categories. As a Admin, you will have right to set other's  privilege. 

To delete the Post, you will need to firstly trash it, namely soft deleting and then delete it in the "trashed posts"  permanently. 

Always remember, when posting a article, the image size cannot be too big and all the fields of the post are required to be completed. 


