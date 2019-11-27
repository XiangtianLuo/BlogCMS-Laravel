# BlogCMS-Laravel
This website is a personal blog with a complete CMS, built on the laravel 5 and integrated with Sass front-end theme

To start this project, the first step is to start Mysql and Apache server, in my project, I am using MAMP.

The step2 is to start Mysql by run the following code:

```mysql -u root -p ```

and then enter your password for the mysql database

The step3 is to run 

```php artisan serve```

By running this code, the server will start and localhost:8000 will be alive. 

In order to generate some dummy data at the beginning, you can run the code:

``` php artisan migrate:refresh --seed ```

so that the website will have something to display in the first place.

In the welcome page, the user can browse the posts and use search function to filter the posts. By using the third party api, the user can leave comments on the posts. User can register and login into the CMS to manage the post, such as publishing , deleting and updating the post. There is even soft delete function for deleting the post. 

Always remember that when adding a post, all the fields are required to fill out and the image size of the post cannot be oversized. 


