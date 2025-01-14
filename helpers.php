<?php

/**
 * Get the base path
 * 
 * @param string $path 
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load view
 * 
 * @param string $name
 * @return void
 * 
 * 
 */
function loadView($name, $data = [])
{
    $viewPath = basePath("App/views/{$name}.view.php");


    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View '{$name}' not found!";
    }
}


/**
 * Load partial
 * 
 * @param string $name
 * @return void
 * 
 * 
 */
function loadPartial($name)
{
    $partialPath =  basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '{$name} not found!'";
    }
}
/**
 * inspecta value(s)
 * 
 * @param mixed $value
 * @return void
 * 
 * 
 */


function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * inspecta value and die
 * 
 * @param mixed $value
 * @return void
 * 
 * 
 */


function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * format salary
 * 
 * @param string $salary
 * @return string Formatted Salary
 */

function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}