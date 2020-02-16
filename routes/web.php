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


$router->group(['prefix'=>'api/v2'], function() use($router){

    /**
     * post addPet
     * Summary: Add a new pet to the store
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->post('/pet', 'PetApi@addPet');
    /**
     * put updatePet
     * Summary: Update an existing pet
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->put('/pet', 'PetApi@updatePet');
    /**
     * get findPetsByStatus
     * Summary: Finds Pets by status
     * Notes: Multiple status values can be provided with comma separated strings
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->get('/pet/findByStatus', 'PetApi@findPetsByStatus');
    /**
     * get findPetsByTags
     * Summary: Finds Pets by tags
     * Notes: Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->get('/pet/findByTags', 'PetApi@findPetsByTags');
    /**
     * delete deletePet
     * Summary: Deletes a pet
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->delete('/pet/{petId}', 'PetApi@deletePet');
    /**
     * get getPetById
     * Summary: Find pet by ID
     * Notes: Returns a single pet
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->get('/pet/{petId}', 'PetApi@getPetById');
    /**
     * post updatePetWithForm
     * Summary: Updates a pet in the store with form data
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->post('/pet/{petId}', 'PetApi@updatePetWithForm');
    /**
     * post uploadFile
     * Summary: uploads an image
     * Notes: 
     * Output-Formats: [routerlication/json]
     */
    $router->post('/pet/{petId}/uploadImage', 'PetApi@uploadFile');
    /**
     * get getInventory
     * Summary: Returns pet inventories by status
     * Notes: Returns a map of status codes to quantities
     * Output-Formats: [routerlication/json]
     */
    $router->get('/store/inventory', 'StoreApi@getInventory');
    /**
     * post placeOrder
     * Summary: Place an order for a pet
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->post('/store/order', 'StoreApi@placeOrder');
    /**
     * delete deleteOrder
     * Summary: Delete purchase order by ID
     * Notes: For valid response try integer IDs with value &lt; 1000. Anything above 1000 or nonintegers will generate API errors
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->delete('/store/order/{order_id}', 'StoreApi@deleteOrder');
    /**
     * get getOrderById
     * Summary: Find purchase order by ID
     * Notes: For valid response try integer IDs with value &lt;&#x3D; 5 or &gt; 10. Other values will generated exceptions
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->get('/store/order/{order_id}', 'StoreApi@getOrderById');
    /**
     * post createUser
     * Summary: Create user
     * Notes: This can only be done by the logged in user.
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->post('/user', 'UserApi@createUser');
    /**
     * post createUsersWithArrayInput
     * Summary: Creates list of users with given input array
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->post('/user/createWithArray', 'UserApi@createUsersWithArrayInput');
    /**
     * post createUsersWithListInput
     * Summary: Creates list of users with given input array
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->post('/user/createWithList', 'UserApi@createUsersWithListInput');
    /**
     * get loginUser
     * Summary: Logs user into the system
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->get('/user/login', 'UserApi@loginUser');
    /**
     * get logoutUser
     * Summary: Logs out current logged in user session
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->get('/user/logout', 'UserApi@logoutUser');
    /**
     * delete deleteUser
     * Summary: Delete user
     * Notes: This can only be done by the logged in user.
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->delete('/user/{username}', 'UserApi@deleteUser');
    /**
     * get getUserByName
     * Summary: Get user by user name
     * Notes: 
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->get('/user/{username}', 'UserApi@getUserByName');
    /**
     * put updateUser
     * Summary: Updated user
     * Notes: This can only be done by the logged in user.
     * Output-Formats: [routerlication/xml, routerlication/json]
     */
    $router->put('/user/{username}', 'UserApi@updateUser');



});