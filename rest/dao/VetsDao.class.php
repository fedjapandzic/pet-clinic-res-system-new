<?php

require_once __DIR__ . '/BaseDao.class.php';

class VetsDao extends BaseDao {

    public function __construct(){
        parent::__construct("vets");
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
        $stmt = $this->conn->prepare("SELECT a.id AS id, a.appointment_date AS appointment_date,v.full_name AS full_name ,v.phone_number AS phone_number
        FROM appointments a
        JOIN vets v ON a.vets_id = v.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
<?php

require_once __DIR__ . '/BaseDao.class.php';

class VetsDao extends BaseDao {

    public function __construct(){
        parent::__construct("vets");
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
        $stmt = $this->conn->prepare("SELECT a.id AS id, a.appointment_date AS appointment_date,v.full_name AS full_name ,v.phone_number AS phone_number
        FROM appointments a
        JOIN vets v ON a.vets_id = v.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
