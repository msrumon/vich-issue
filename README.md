# Issue with "Vich's uploader bundle"

I am having problem with `vich/uploader-bundle`. When I try to use it to upload multiple files, it can't create the file name to the right place, hence caught by database-level NOT-NULL constraint violation error.

## Usage

- Clone/Download this repository.
- Navigate into the project directory.
- Run `composer i` to install all the dependencies.
- Run `php bin/console doctrine:database:create` to create the database.
- Run `php bin/console doctrine:migrations:migrate` to run the migrations. This will essentially create all the required tables.

Afterthat, run `php -S localhost:4444 -t public` to start the development server and visit <http://localhost:4444/home> from your browser. You will see a form with 3 input elements and a submit button. Try to upload 3 images of your choice. You will see the error (`SQLSTATE[23000]: Integrity constraint violation: 19 NOT NULL constraint failed: bar.image`) by yourself.
