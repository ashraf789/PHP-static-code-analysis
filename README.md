# PHP static code analysis by PHPCS, PHPMD and PHP Phan

### PHPCS
``` composer require --dev squizlabs/php_codesniffer ```
</br>
Now create a controller like php artisan make:controller TestController and modify controller 
TestController should looks like this 

``` 
namespace AppHttpControllers;

use IlluminateHttpRequest;

class testController extends Controller
{
    private function testTest(){
    }
}
```
</br>
Run PPHCS on terminal 

``` ./vendor/bin/phpcs app/Http/Controllers/TestController.php ```
</br>

Some error will be display on terminal also you could get some message that some error could be fixed automatically 
To automatically fix error run this command on terminal 

</br>

``` ./vendor/bin/phpcbf app/Http/Controllers/TestController.php ```

</br>

Automatically some problem will be fixed.
we can make a configure file to make it more simple
make a phpcs.xml file on top of root directory and write this code 

</br>

```
<?xml version="1.0"?>
<ruleset name="PSR2">    
<description>The PSR2 coding standard.</description>    
<rule ref="PSR2"/>     
<file>app/</file>     
<exclude-pattern>vendor</exclude-pattern>    
<exclude-pattern>resources</exclude-pattern>    
<exclude-pattern>database/</exclude-pattern>    
<exclude-pattern>storage/</exclude-pattern>    
<exclude-pattern>node_modules/</exclude-pattern>
<exclude-pattern>public</exclude-pattern>
</ruleset>
```
</br>
Now we can check our all app/ directory code by just a simple command 
</br>

``` ./vendor/bin/phpcs ```
