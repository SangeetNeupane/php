<?php
//Useful Server Variables

print_r($_SERVER["PHP_SELF"]."<br>");
//The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of thecurrently executing script.So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself,instead of jumping to a different page. This way, the user will get error messages on thesame page as the form.


print_r($_SERVER["SERVER_ADDR"]."<br>");
//The IP address of the server under which the current script is executing.
print_r($_SERVER["SERVER_NAME"]."<br>");
//The name of the server host under which the current script is executing. If the scriptis running on a virtual host, this will be the value defined for that virtual host.

print_r($_SERVER["SERVER_SOFTWARE"]."<br>");
//Server identification string, given in the headers when responding to requests.
print_r($_SERVER["SERVER_PROTOCOL"]."<br>");
//Name and revision of the information protocol via which the page was requested; e.g.'HTTP/1.0';
print_r( $_SERVER["REQUEST_METHOD"]."<br>");
//Which request method was used to access the page; e.g. 'GET', 'POST'.
print_r($_SERVER["REQUEST_TIME"]."<br>");
//The timestamp of the start of the request. Available since PHP 5.1.0.
print_r($_SERVER["REQUEST_TIME_FLOAT"]."<br>");
//The timestamp of the start of the request, with microsecond precision. Availablesince PHP 5.4.0.
print_r( $_SERVER["QUERY_STRING"]."<br>");
//The query string, if any, via which the page was accessed.
print_r( $_SERVER["DOCUMENT_ROOT"]."<br>");
//The document root directory under which the current script is executing, as definedin the server's configuration file.
print_r($_SERVER["HTTP_ACCEPT"]."<br>");
//Contents of the Accept: header from the current request, if there is one.
print_r($_SERVER["HTTP_ACCEPT_CHARSET"]."<br>");
//Contents of the Accept-Charset: header from the current request, if there is one.Example: 'iso-8859-1,*,utf-8'.
print_r($_SERVER["HTTP_ACCEPT_ENCODING"]."<br>");
//Contents of the Accept-Encoding: header from the current request, if there is one.Example: 'gzip'.


print_r($_SERVER["HTTP_ACCEPT_LANGUAGE"]."<br>");
//Contents of the Accept-Language: header from the current request, if there is one.Example: 'en'.
print_r($_SERVER["HTTP_CONNECTION"]."<br>");
//Contents of the Connection: header from the current request, if there is one.Example: 'Keep-Alive'.
print_r( $_SERVER["HTTP_HOST"]."<br>");
// Contents of the Host: header from the current request, if there is one.
print_r($_SERVER["HTTP_REFERER"]."<br>");
// The address of the page (if any) which referred the user agent to the current page.This is set by the user agent. Not all user agents will set this, and some provide theability to modify HTTP_REFERER as a feature. In short, it cannot really be trusted.
print_r( $_SERVER["HTTP_USER_AGENT"]."<br>");
// Contents of the User-Agent: header from the current request, if there is one. This isa string denoting the user agent being which is accessing the page. A typical exampleis: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Among other things, you can use this valuewith get_browser() to tailor your page's output to the capabilities of the user agent.
print_r( $_SERVER["HTTPS"]."<br>");
// Set to a non-empty value if the script was queried through the HTTPS protocol.
print_r($_SERVER["REMOTE_ADDR"]."<br>");
// The IP address from which the user is viewing the current page.
print_r($_SERVER["REMOTE_HOST"]."<br>");
//The Host name from which the user is viewing the current page. The reverse dnslookup is based on theREMOTE_ADDR of the user.
print_r($_SERVER["REMOTE_PORT"]."<br>");
//The port being used on the user's machine to communicate with the web server.
print_r($_SERVER["REMOTE_USER"]."<br>");
// The authenticated user.
print_r($_SERVER["REDIRECT_REMOTE_USER"]."<br>");
//The authenticated user if the request is internally redirected.
print_r($_SERVER["SCRIPT_FILENAME"]."<br>");
// The absolute pathname of the currently executing script.
print_r($_SERVER["SERVER_ADMIN"]."<br>");
//The value given to the SERVER_ADMIN (for Apache) directive in the web serverconfiguration file. If the script is running on a virtual host, this will be the value defined forthat virtual host.

print_r($_SERVER["SERVER_PORT"]."<br>");
// The port on the server machine being used by the web server forcommunication. For default setups, this will be '80'; using SSL, for instance, willchange this to whatever your defined secure HTTP port is. 
print_r($_SERVER["SERVER_SIGNATURE"]."<br>");
//String containing the server version and virtual host name which are added toserver-generated pages, if enabled. 
print_r( $_SERVER["PATH_TRANSLATED"]."<br>");
// Filesystem- (not document root-) based path to the current script, after theserver has done any virtual-to-real mapping. 
print_r($_SERVER["SCRIPT_NAME"]."<br>");
// Contains the current script's path. This is useful for pages which need to point tothemselves. The __FILE__ constant contains the full path and filename of thecurrent (i.e. included) file. 
print_r( $_SERVER["REQUEST_URI"]."<br>");
// The URI which was given in order to access this page; for instance,'/index.html'. 
print_r( $_SERVER["PHP_AUTH_DIGEST"]."<br>");
// When doing Digest HTTP authentication this variable is set to the'Authorization' header sent by the client (which you should then use to make theappropriate validation).

print_r($_SERVER["PHP_AUTH_USER"]."<br>");
//When doing HTTP authentication this variable is set to the username provided by the user.
print_r($_SERVER["PHP_AUTH_PW"]."<br>");
//When doing HTTP authentication this variable is set to the password provided by the user.
print_r($_SERVER["AUTH_TYPE"]."<br>");
//When doing HTTP authentication this variable is set to the authentication type.
print_r($_SERVER["PATH_INFO"]."<br>");
//Contains any client-provided pathname information trailing the actual script filenamebut preceding the query string, if available. For instance, if the current script was accessedvia the URL http://www.example.com/php/path_info.php/some/stuff?foo=bar,then $_SERVER['PATH_INFO'] would contain /some/stuff.
print_r($_SERVER["ORIG_PATH_INFO"]."<br>");
//Original version of 'PATH_INFO' before processed by PHP.
?>
