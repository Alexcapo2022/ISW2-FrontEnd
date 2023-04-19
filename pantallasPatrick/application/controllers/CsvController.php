<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class CsvController extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		// $this->load->model('CsvModel','csv');			
		
	}

	public function index(){
		
		$data = array(
			'js' => "assets/libs/selectize/js/standalone/selectize.min.js",
			'title' => "assets/libs/mohithg-switchery/switchery.min.js,assets/libs/multiselect/js/jquery.multi-select.js,assets/libs/select2/js/select2.min.js,assets/libs/jquery-mockjax/jquery.mockjax.min.js,assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js,assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js,assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js,assets/libs/flatpickr/flatpickr.min.js,assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js,assets/libs/parsleyjs/parsley.min.js?id=1,assets/js/funciones.js,assets/js/escuela.js?id=27,assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js",
		);

        $this->load->view('ActividadesBrindadasView',$data);
		
	}


    public function uploadCsv(){

    
      
        // Comprobar si se ha enviado el archivo
        if(isset($_FILES['csv_file'])){
        
            // Comprobar si el archivo fue subido correctamente
            if ($_FILES['csv_file']['error'] !== UPLOAD_ERR_OK) {
                // Mostrar un mensaje de error
                echo 'Error al subir archivo';
                return;
            }
        
            // Obtener la ruta temporal del archivo
            $tmp_file = $_FILES['csv_file']['tmp_name'];
        
            // Abrir el archivo CSV
            $csv_file = fopen($tmp_file, 'r');
        
            // Cerrar el archivo CSV
            fclose($csv_file);
        
            // Mostrar mensaje de éxito
            echo 'Su archivo ha sido subido con éxito.';
        }
      
        
}

}
?>