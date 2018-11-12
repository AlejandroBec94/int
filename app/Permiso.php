<?php

namespace Intranet;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_permisos';
    protected $fillable =
        [
            'Camara_Per',
            'Camara_Col',
            'Camara_Mex',
            'Camara_Pan',
            'Camara_Ecu',
            'Camara_Gtm',
            'Camara_Cri',
            'Camara_Slv',
            'Recordatorios',
            'Noticias',
            'Usuarios',
            'Politicas',
            'Webex',
            'Informes',
            'Camaras',
            'Administracion',
            'Reporte',
            'Sap',
            'Resguardos',
            'Notificaciones',
            'SeminarioReporte',
            'saldos_acum',
            'env_check',
            'Update_Sales',
            'Extra_Country',
            'Cuadre_Volumen',
            'intra_permiso',
            'up_birthday',
            'solicitudes',
            'Change_Control',
            'compra_empleado_gestion',
            'compra_empleado_reporte',
        ];
}
