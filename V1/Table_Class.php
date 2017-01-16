<?php
class DemandeTable{

	function getAllDemande(){
		$listDemande = array();
		$con = new ConnectionDB().getConn();
		$req = "SELECT * FROM demande";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Demance(
								$e['numDemande'], 
								$e['dateDemande'], 
								$e['descriptionDemande'], 
								$e['loginEmp']
							);
			$listDemande->add($emp); }
		return $this->$listDemande; }	
}


class EmployeTable{

	function getAllEmploye(){
		$listEmploye = array();
		$con = new ConnectionDB().getConn();
		$req = "SELECT * FROM empoloye";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Employe(
								$e['loginEmp'], 
								$e['passwordEmp'], 
								$e['nomEmp'], 
								$e['prenomEmp'], 
								$e['dateEmbaucheEmp'], 
								$e['telEmp'], 
								$e['numService'], 
								$e['numTypeLogin']
							);
			$listEmploye->add($emp); }
		return $this->$listEmploye; }	
}


class InterventionTable{

	function getAllIntervention(){
		$listIntervention = array();
		$con = new ConnectionDB().getConn();
		$req = "SELECT * FROM intervention";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Intervention(
								$e['numIntervention'], 
								$e['dateIntervention'], 
								$e['descriptionIntervention'], 
								$e['numDemande']
							);
			$listIntervention->add($emp); }
		return $this->$listIntervention; }	
}


class MarqueTable{

	function getAllMarque(){
		$listMarque = array();
		$con = new ConnectionDB().getConn();
		$req = "SELECT * FROM marque";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Marque(
								$e['numMarque'], 
								$e['nomMarque']
							);
			$listMarque->add($emp); }
		return $this->$listMarque; }	
}


class MaterielTable{

	function getAllMateriel(){
		$listMateriel = array();
		$con = new ConnectionDB().getConn();
		$req = "SELECT * FROM materiel";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Materiel(
								$e['refMat'], 
								$e['nomModeleMat'], 
								$e['caracteristiquesMat'], 
								$e['dateAchatMat'], 
								$e['loginEmp'], 
								$e['numTypeMat'], 
								$e['numMarque']						
							);
			$listMateriel->add($emp); }
		return $this->$listMateriel; }	
}


class ServiceTable{

	function getAllService(){
		$listService = array();
		$con = new ConnectionDB().getConn();
		$req = "SELECT * FROM service";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new Service(
								$e['numService'], 
								$e['nomService']						
							);
			$listService->add($emp); }
		return $this->$listService; }	
}


class TypeLoginTable{

	function getAllTypeLogin(){
		$listTypeLogin = array();
		$con = new ConnectionDB().getConn();
		$req = "SELECT * FROM type_login";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new TypeLogin(
								$e['numTypeLogin'], 
								$e['nomTypeLogin']					
							);
			$listTypeLogin->add($emp); }
		return $this->$listTypeLogin; }
}


class TypeMatTable{


	function getAllTypeMat(){
		$listTypeMat = array();
		$con = new ConnectionDB().getConn();
		$req = "SELECT * FROM type_mat";
		$result = $con->query($req);
		while($e = mysqli_fetch_array($result)) {
			$emp = new TypeMat(
								$e['numTypeMatt'], 
								$e['nomTypeMat']					
							);
			$listTypeMat->add($emp); }
		return $this->$listTypeMat; }
}

?>