// In strict mode, only a variable of the requested type (like: int of the type declaration) will be accepted,
// or a TypeError will be thrown.
declare(strict_types=1);

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise()
{
$block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
echo $block;
}

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
# verou-3-debugging-php-benjaminlangenaken
