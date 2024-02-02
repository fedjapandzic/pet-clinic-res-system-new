<?php

require_once __DIR__ . '/BaseService.class.php';
require_once __DIR__ . '/../dao/VetsDao.class.php';

class VetsService extends BaseService {

    public function __construct(){
        parent::__construct(new VetsDao);
    }

    // Get all vets
    public function get_all_vets(){
        return $this->get_all();
    }

    // Get vet by ID
    public function get_vet_by_id($id){
        return $this->get_by_id($id);
    }

    public function getVetAppointments(){
        return $this->dao->getVetAppointments();
    }

}

?>
