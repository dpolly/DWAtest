<?php
/*
 * DMP 11-28-2014: added Debug Routes for testing page design: Master
 * DMP 11-30-2014: added Debug Routes for validations: DB Connectivity, Environment, Error Checking
 */
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * DEBUG Section **********************************************
 */
/**
 * Testing Design-Master
 */
Route::get('/test-master', function()
    {
        return View::make("master");
    }
);

/**
 * Validate Database Connectivity
 */
Route::get('mysql-test', function() {
    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    #echo Pre::render($results);
    var_dump($results);
});

/**
 * Validate Environment Settings
 */
Route::get('/get-environment',function() {
    echo "Environment: ".App::environment();
});

/**
 * Validate Error Response
 */
Route::get('/trigger-error',function() {
    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;
});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});


/**
* Index

Route::get('/', 'IndexController@getIndex');

/**
 * User
* (Explicit Routing)

Route::get('/signup','UserController@getSignup' );
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', 'UserController@postSignup' );
Route::post('/login', 'UserController@postLogin' );
Route::get('/logout', 'UserController@getLogout' );

/**
 * Book
 * (Explicit Routing)

Route::get('/species', 'BookController@getIndex');
Route::get('/species/edit/{id}', 'BookController@getEdit');
Route::post('/species/edit', 'BookController@postEdit');
Route::get('/species/create', 'BookController@getCreate');
Route::post('/species/create', 'BookController@postCreate');
Route::post('/species/delete', 'BookController@postDelete');

 ## Ajax examples
Route::get('/species/search', 'BookController@getSearch');
Route::post('/species/search', 'BookController@postSearch');


/**
* Debug
* (Implicit Routing)

Route::controller('debug', 'DebugController');


/**
* Tag
* (Implicit RESTful Routing)

Route::resource('tag', 'TagController');


/**
* Demos
* (Explicit Routing)

Route::get('/demo/csrf-example', 'DemoController@csrf');
Route::get('/demo/collections', 'DemoController@collections');
Route::get('/demo/js-vars', 'DemoController@jsVars');

Route::get('/demo/crud-create', 'DemoController@crudCreate');
Route::get('/demo/crud-read', 'DemoController@crudRead');
Route::get('/demo/crud-update', 'DemoController@crudUpdate');
Route::get('/demo/crud-delete', 'DemoController@crudDelete');

Route::get('/demo/collections', 'DemoController@collections');
Route::get('/demo/query-without-constraints', 'DemoController@queryWithoutConstraints');
Route::get('/demo/query-with-constraints', 'DemoController@queryWithConstraints');
Route::get('/demo/query-responsibility', 'DemoController@queryResponsibility');
Route::get('/demo/query-with-order', 'DemoController@queryWithOrder');

Route::get('/demo/query-relationships-author', 'DemoController@queryRelationshipsAuthor');
Route::get('/demo/query-relationships-tags', 'DemoController@queryRelationshipstags');
Route::get('/demo/query-eager-loading-authors', 'DemoController@queryEagerLoadingAuthors');
Route::get('/demo/query-eager-loading-tags-and-authors', 'DemoController@queryEagerLoadingTagsAndAuthors');

Route::get('/demo/simple-ajax', 'DemoController@getSimpleAjax');
Route::post('/demo/simple-ajax', 'DemoController@postSimpleAjax');


/*Route::get('/', function()
{
	return View::make('hello');
});
*/
