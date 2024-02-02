<?php
Flight::route('GET /vets/get_appointments', function(){
    Flight::json(Flight::vetsService()->getVetAppointments());
    // Flight::json(Flight::vetsService()->get_all_vets());
});
Flight::route('GET /vets', function(){
    // Flight::json(Flight::vetsService()->getVetAppointments());
    Flight::json(Flight::vetsService()->get_all_vets());
});

Flight::route('GET /vets/@id', function($id){
    Flight::json(Flight::vetsService()->get_vet_by_id($id));
});


// Add more routes for vet-related operations if needed

// Example: Route to get vets by name
Flight::route('GET /vets/by_name/@full_name', function($full_name){
    Flight::json(Flight::vetsService()->get_vet_by_full_name($full_name));
});

// Example: Route to add a new vet
Flight::route('POST /vets', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::vetsService()->add($data));
});

// Example: Route to update vet information
Flight::route('PUT /vets/@id', function($id){
    $data = Flight::request()->data->getData();
    Flight::vetsService()->update($id, $data);
    Flight::json(Flight::vetsService()->get_vet_by_id($id));
});

// Example: Route to delete a vet
Flight::route('DELETE /vets/@id', function($id){
    Flight::vetsService()->delete($id);
    Flight::json(["message" => "deleted"]);
});

?>
