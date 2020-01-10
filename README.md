# PHP static code analysis by PHPCS, PHPMD and PHP Phan

### PHPCS
<b>install by composer</b>

``` composer require --dev squizlabs/php_codesniffer ```
</br>
Now create a controller by artisan like php artisan make:controller TestController 
And modify controller like bellow.
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

Some error will display on terminal also you will get a message on bottom of report that some error could be fixed automatically 
To automatically fix those error run this command.

</br>

``` ./vendor/bin/phpcbf app/Http/Controllers/TestController.php ```

</br>

Automatically some error will be fixed.
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

</br></br>
### PHPMD
<b>install by composer</b>

``` composer require --dev phpmd/phpmd ```
</br>

Run PPHMD on terminal 

</br>

``` vendor/bin/phpmd app html cleancode,codesize,controversial,design,naming,unusedcode > phpmd.html ```
</br>

<b> Command Analysis </b>
1. vendor/bin/phpmd -> phpmd location </br>
2. app -> analysable code directory </br>
3. html -> output formate[text is also fine] </br>
4. cleancode,codesize,controversial,design,naming,unusedcode -> rule to analysis code </br>
5. > phpmd.html -> save output on phpmd.html file </br>

</br>

We can save all rules on a xml file. See the bellow file.

</br>

``` https://github.com/ashraf789/PHP-static-code-analysis/blob/master/phpmd.xml ```

</br>

Now we can run PPHMD on terminal like bellow 

</br>

``` vendor/bin/phpmd app html phpmd.xml > phpmd.html ```
</br>
