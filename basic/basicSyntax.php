<?php
    // Similar to other languages, PHP declares variables in a simple way; just put "$" followed by the name of the variable to be declared, and you're done.
    $name = 'Mayk';
    // After declaring the variable, simply assign a value to it using "=" followed by the value.
    $surname = 'Brito';

    // We can show something on console using echo like pearl
    echo("Hello $name $surname");
    // Or using print like javascript
    print("Hello $name $surname");
    // In this case, using echo instead of print is better because it saves 1 byte and provides slightly better performance.

    // To reassign a value to the same variable, simply call it again and give it a new value as if you were assigning it for the first time, and thus it receives a new value (similar to many programming languages).
    $var1 = 1;
    $var1 = 1 + 1;
    // Now this variable has its value reassigned to 2 (in this case, 1+1).

    // Like any programming language, PHP also has its constants. These constants are immutable variables, meaning that once they receive a value, it will always retain that value and cannot be reassigned, we can declare a constant using "const" followed by the constant name (usually in caps lock and without the "$" used in variables).
    const FIXEDVALUE = 100;
    // Done, we now have a constant with an immutable value. In this case, we cannot try to reassign a value to it, or we will have errors in our code.
?>