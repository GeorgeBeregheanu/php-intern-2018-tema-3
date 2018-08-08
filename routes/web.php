<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/keygen', function() {
    echo str_random(32);
});


$router->get('/companies', 'CompaniesController@showAllCompanies');
$router->get('/companies/{id}', 'CompaniesController@getCompanyById');
$router->get('/companies?type={type}', 'CompaniesController@getCompanyByType');
$router->post('/companies', 'CompaniesController@createCompany');
$router->delete('companies/delete/{id}','CompaniesController@deleteCompany');
$router->patch('companies/update/{id}','CompaniesController@patchCompany');

$router->get('/employees','EmployeesController@showAllEmployees');
$router->get('/employees/{id}', 'EmployeesController@showEmployeeById');
$router->get('/employees?job={job}', 'EmployeesController@showEmployeeByJob');
$router->post('/employees', 'EmployeesController@createEmployee');
$router->delete('employees/delete/{id}','EmployeesController@deleteEmployee');
$router->patch('employees/update/{id}','EmployeesController@patchEmployee');