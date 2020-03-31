# How to run an asynchronous process from the Controller in Symfony Framework 4.4

- Clone and `composer install` this repo
- See [`\App\Controller\MyController::runAsyncProcess`](https://github.com/keomaborges/async-process-symfony-example/blob/master/src/Controller/MyController.php)
- Then [`\App\AsyncResponse`](https://github.com/keomaborges/async-process-symfony-example/blob/master/src/AsyncResponse.php)
- And finally [`\App\EventSubscriber::onTerminate`](https://github.com/keomaborges/async-process-symfony-example/blob/master/src/EventSubscriber.php#L24)

After understanding how it works, see it working.

- Run the app locally using `symfony server:start`
- Open your favourite API manager (mine is [Postman](https://www.postman.com/))
- Call POST http://127.0.0.1:8000/async/test (change your host if it's the case)

If everything runs well, you should get a 200 response with the message `Process is running on background;` and after some seconds a TXT file should be created in `public` directory.

![](https://i.imgur.com/YWO3MfU.jpg)
