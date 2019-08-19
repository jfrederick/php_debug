# PHP Debug Module
A devel module for Drupal 8. It is a a skeleton module that creates an arbitrary page, where you can write and execute arbitrary code for test/debugging purposes. It is especially helpful for writing code and using a step debugger on the code, which can't be done as well with Devel module's _Execute PHP_ page.

### To use:
1. Install the module.
2. Visit /admin/php-debug. You should see a page that says, "Hello".
3. Add your arbitrary code to php_debug/src/Controller/PhpDebugController::PhpDebugPage(). The method expects to return a render array.
4. The rest is up to you.

heyyy
