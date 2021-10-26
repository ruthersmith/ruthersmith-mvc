This is the foundation of ruthersmith mvc
about 3 years ago, I started working with codeigniter and enjoyed it
I wanted to know what the process would be like to create a php framework from scratch
It turned out, Getting a basic framework was simpler than I originally imagine.
This is the result.

<strong>Important!!!</strong>
In order for this to work properly for you,
you will need to go into the config and change the constant to match your environment
Specifically your database environment, site name and base url
also you nee change the RewriteBase in the public/.htaccess to reflect the location of the pucblic folder

The entry point into the application would be under public/index.php
This requires the boostrap.php file
And initialize the app like "$app = new Core"

The boostrap.php file loads all the required files
such as the config and library classes, one of the library classes that this file loads 
is the "Core" that lives in 'libraries/core.php'

This class is the class responsible for directing traffic to the correct controller
once this is done, the framework follows the traditional mvc pattern.

Every controllers must extend from the base 'Controller' class in order to inherit 
the methods "load_model($model_name)" and "load_view($view_name, $data = [])"

Because the base controller can is under the libraries, it is automatically loaded by the application

I am still working on this,  
I am Testing this framework, by creating a basic web application with it

I also wonder what it would be like to create an accompanying cms, I think it would be my next project


