<?php
class Demande{

	private $numDemande;
	private $dateDemande;
	private $descriptionDemande;
	private $loginEmp;
	function __construct($aNumDemande, $aDateDemande, $aDescriptionDemande, $aLoginEmp){
		$this->$numDemande       		= $aNumDemande;
		$this->$dateDemande     		= $aDateDemande;
		$this->$descriptionDemande      = $aDescriptionDemande;
		$this->$loginEmp        		= $aLoginEmp;
	}

	public function getNumDemande(){
		return $this->$numDemande; }
	public function setNumDemande($aNumDemande){
		$this->$numDemande = $aNumDemande; }

	public function getDateDemande(){
		return $this->$dateDemande; }
	public function setDateDamande($aDateDemande){
		$this->$dateDemande = $aDateDemande; }

	public function getDescription(){
		return $this->$descriptionDemande; }
	public function setDescription($aDescriptionDemande){
		$this->$descriptionDemande = $aDescriptionDemande; }

	public function getLogin(){
		return $this->$loginEmp; }
	public function setLogin($aLoginEmp){
		$this->$loginEmp = $aLoginEmp; }
}


class Employe {

	private $loginEmp;
	private $passwordEmp;
	private $nomEmp;
	private $prenomEmp;
	private $dateEmbaucheEmp;
	private $telEmp;
	private $numService;
	private $numTypeLogin;
	function __construct($aLoginEmp, $aPasswordEmp, $aNomEmp, $aPrenomEmp, $aDateEmbaucheEmp, $aTelEmp, $aNumService, $aNumTypeLogin){
		$this->$loginEmp         = $aLoginEmp;
		$this->$passwordEmp      = $aPasswordEmp;
		$this->$nomEmp           = $aNomEmp;
		$this->$prenomEmp        = $aPrenomEmp;
		$this->$dateEmbaucheEmp  = $aDateEmbaucheEmp;
		$this->$telEmp           = $aTelEmp;
		$this->$numService       = $aNumService;
		$this->$numTypeLogin     = $aNumTypeLogin;
	}

	public function getLogin(){
		return $this->$loginEmp; }
	public function setLogin($aLogin){
		$this->$loginEmp = $aLogin; }

	public function getPassword(){
		return $this->$passwordEmp; }
	public function setPassword($aPasswordEmp){
		$this->$passwordEmp = $aPasswordEmp; }

	public function getName(){
		return $this->$nomEmp; }
	public function setName($aNomEmp){
		$this->$nomEmp = $aNomEmp; }

	public function getFirstName(){
		return $this->$prenomEmp; }
	public function setFirstName($aPrenomEmp){
		$this->$prenomEmp = $aPrenomEmp; }

	public function getDateEmbauche(){
		return $this->$dateEmbaucheEmp; }
	public function setDate($aDateEmbaucheEmp){
		$this->$dateEmbaucheEmp = $aDateEmbaucheEmp; }

	public function getTel(){
		return $this->$telEmp; }
	public function setTel($aTelEmp){
		$this->$telEmp = $aTelEmp; }

	public function getNumService(){
		return $this->$numService; }
	public function setNumService($aNumService){
		$this->$prenomEmp = $aNumService; }

	public function getnumTypeLogin(){
		return $this->$numTypeLogin; }
	public function setnumTypeLogin($aNumTypeLogin){
		$this->$numTypeLogin = $aNumTypeLogin; }
}


class Intervention{

	private $numIntervention;
	private $dateIntervention;
	private $descriptionIntervention;
	private $numDemande;
	function __construct($aNumIntervention, $aDateIntervention, $aDescriptionIntervention , $aNumDemande){
		$this->$numIntervention          = $aNumIntervention;
		$this->$dateIntervention         = $aDateIntervention;
		$this->$descriptionIntervention  = $aDescriptionIntervention;
		$this->$numDemande               = $aNumDemande;	
	}

	public function getNumIntervention(){
		return $this->$numIntervention; }
	public function setNumIntervention($aNumIntervention){
		$this->$numIntervention = $aNumIntervention; }

	public function getDateIntervention(){
		return $this->$dateIntervention; }
	public function setDateIntervention($aDateIntervention){
		$this->$dateIntervention = $aDateIntervention; }

	public function getDescriptionIntervention(){
		return $this->$descriptionIntervention; }
	public function setDescriptionIntervention($aDescriptionIntervention){
		$this->$descriptionIntervention = $aDescriptionIntervention; }

	public function getNumDemande(){
		return $this->$numDemande; }
	public function setNumDemande($aNumDemande){
		$this->$numDemande = $aNumDemande; }
}


class Marque{

	private $numMarque;
	private $nomMarque;
	function __construct($aNumMarque, $aNomMarque){
		$this->$numMarque  = $aNumMarque;
		$this->$nomMarque  = $aNomMarque;
	}

	public function getNumMarque(){
		return $this->$numMarque; }
	public function setNumMarque($aNumMarque){
		$this->$numMarque = $aNumMarque; }

	public function getNomMarque(){
		return $this->$nomMarque; }
	public function setNomMarque($aNomMarque){
		$this->$nomMarque = $aNomMarque; }
}


class Materiel {

	private $refMat;
	private $nomModeleMat;
	private $caracteristiquesMat;
	private $dateAchatMat;
	private $loginEmp;
	private $numTypeMat;
	private $numMarqueMat;
	function __construct($aRefMat, $aNomModeleMat, $aCaracteristiquesMat, $aDateAchatMat, $aLoginEmp, $aNumTypeMat, $aNumMarqueMat){
		$this->$refMat         				= $aRefMat;
		$this->$nomModeleMat    			= $aNomModeleMat;
		$this->$caracteristiquesMat         = $aCaracteristiquesMat;
		$this->$dateAchatMat		        = $aDateAchatMat;
		$this->$loginEmp 					= $aLoginEmp;
		$this->$numTypeMat       			= $aNumTypeMat;
		$this->$numMarqueMat     			= $aNumMarqueMat;
	}

	public function getRefMat(){
		return $this->$refMat; }
	public function setRefMat($aRefMat){
		$this->$refMat = $aRefMat; }

	public function getModel(){
		return $this->$nomModeleMat; }
	public function setModel($aNomModeleMat){
		$this->$nomModeleMat = $aNomModeleMat; }

	public function getCaracteristiques(){
		return $this->$caracteristiquesMat; }
	public function setName($aCaracteristiquesMat){
		$this->$caracteristiquesMat = $aCaracteristiquesMat; }

	public function getDateAchat(){
		return $this->$dateAchatMat; }
	public function setDateAchat($aDateAchatMat){
		$this->$dateAchatMat = $aDateAchatMat; }

	public function getLogin(){
		return $this->$loginEmp; }
	public function setLogin($aLoginEmp){
		$this->$loginEmp = $aLoginEmp; }

	public function getNumTypeMat(){
		return $this->$numTypeMat; }
	public function setNumTypeMat($aNumTypeMat){
		$this->$numTypeMat = $aNumTypeMat; }

	public function getNumMarqueMat(){
		return $this->$numMarqueMat; }
	public function setNumMarqueMat($aNumMarqueMat){
		$this->$numMarqueMat = $aNumMarqueMat; }
}


class Service{

	private $numService;
	private $nomService;
	function __construct($aNumService, $aNomService){
		$this->$numService       = $aNumService;
		$this->$nomService       = $aNomService;
	}

	public function getNumDemande(){
		return $this->$numService; }
	public function setNumDemande($aNumService){
		$this->$numService = $aNumService; }

	public function getPassword(){
		return $this->$nomService; }
	public function setPassword($aNomService){
		$this->$nomService = $aNomService; }
}


class TypeLogin{

	private $numTypeLogin;
	private $nomTypeLogin;
	function __construct($aNumTypeLogin, $aNomTypeLogin){
		$this->$numTypeLogin  = $aNumTypeLogin;
		$this->$nomTypeLogin  = $aNomTypeLogin;
	}

	public function getNumTypeLogin(){
		return $this->$numTypeLogin; }
	public function setNumTypeLogin($aNumTypeLogin){
		$this->$numTypeLogin = $aNumTypeLogin; }

	public function getNomTypeLogin(){
		return $this->$nomTypeLogin; }
	public function setNomTypeLogin($aNomTypeLogin){
		$this->$nomTypeLogin = $aNomTypeLogin; }
}


class TypeMat{

	private $numTypeMat;
	private $nomTypeMat;
	function __construct($aNumTypeMat, $aNomTypeMat){
		$this->$numTypeMat       = $aNumTypeMat;
		$this->$nomTypeMat       = $aNomTypeMat;
	}

	public function getNumTypeMat(){
		return $this->$numTypeMat; }
	public function setNumTypeMat($aNumTypeMat){
		$this->$numTypeMat = $aNumTypeMat; }

	public function getNomTypeMaT(){
		return $this->$nomTypeMat; }
	public function setNomTypeMaT($aNomTypeMat){
		$this->$nomTypeMat = $aNomTypeMat; }
}
?>