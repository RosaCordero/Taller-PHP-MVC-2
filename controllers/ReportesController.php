<?php
require_once '../helper/Generic/date.php';
require_once '../dao/repositories/AccountRepository.php';
class ReportesController extends BaseController
{

    public function getTimestamps(){
        if (isset($_POST['fecha_ini']) && isset($_POST['fecha_fin'])) {
            $fecha_ini = $_POST['fecha_ini'];
            $fecha_fin = $_POST['fecha_fin'];
            $date = new date();
            if ($date->validated_date($fecha_ini) && $date->validated_date($fecha_fin)) {
                $fecha_inicio = $date->reformat_date($fecha_ini);
                $fecha_fin = $date->reformat_date($fecha_fin);
                $acount = new AccountRepository();
                $reportes = $acount->getByDate($fecha_inicio, $fecha_fin);
                echo $this->response($reportes);
                return;
            } else {
                echo $this->response('Las fechas no son válidas, debe de tener el formate dd/mm/aaaa', 400);
                return;
            }
        } else {
            echo $this->response('No se han enviado las fechas', 400);
            return;
        }
    }
}