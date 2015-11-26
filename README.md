#A demo for JetBrains support staff.
 
The namespaced `include.php` file contains class, along with a function that returns an instance of the class. 
The `main.php` file includes the `include.php` file, then makes a call to the function.

##Demo 1: Autocomplete Working

In the first demo, we can see that autocomplete works fine because the object has been assigned to a variable which has an explicit type declared.

##Demo 2: Autocomplete Not Working

In the second demo, the autocomplete is not working for the chained method call. The **@return** tag on the `\MyNamespace\getTestInstance()` appears to be ignored.