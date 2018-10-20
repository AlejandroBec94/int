<template>

    <!--<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="far fa-hand-spock pull-left "
                                       style="color: white;margin-right: 5px;background-color: #7DC356 ;border-radius: 50%;border: 1x solid grey;padding:3px;"></i>
                Conoce Nuestra Filosof&iacute;a</h3>
        </div>
        <div class="panel-body">
            <input type="file" id="">
        </div>
    </div>-->

    <div class="row">

        <!-- Filosofy -->
        <div class="col-md-12">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="far fa-hand-spock pull-left "
                                             style="color: white;margin-right: 5px;background-color: #7DC356 ;border-radius: 50%;border: 1x solid grey;padding:3px;"></i>
                        Conoce Nuestra Filosof&iacute;a</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <input type="file" class="hidden" id="Filosofy"
                           @change="manage_content($event,'FilosofyInput','Filosofy')">
                    <div class="input-group col-xs-12">

                        <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                        <input type="text" id="FilosofyInput" class="form-control input-lg" disabled
                               placeholder="Subir Archivo">
                        <span class="input-group-btn">
                            <button id="FilosofyButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- End Filosofy -->

        <!-- Organizational Structure -->
        <div class="col-md-12">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-sitemap pull-left "
                                             style="margin-right: 5px;"></i>
                        Estructura Organizacional</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <!-- Latinoam&eacute;rica -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><img class=" pull-left " src="/img/latinoamericawico.png"
                                                           style="width:25px;color: white;margin-right: 5px;background-color: #0d6aad ;border-radius: 50%;border: 1x solid grey;padding:3px;"></img>
                                    Latinoam&eacute;rica</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Latam"
                                       @change="manage_content($event,'OS_LatamInput','OS_Latam')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_LatamInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_LatamButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-mx pull-left "
                                                         style="margin-right: 5px;"></i>
                                    M&eacute;xico</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Mex"
                                       @change="manage_content($event,'OS_MexInput','OS_Mex')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_MexInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_MexButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-co pull-left "
                                                         style="margin-right: 5px;"></i>
                                    Colombia</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Col"
                                       @change="manage_content($event,'OS_ColInput','OS_Col')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_ColInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_ColButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-ec pull-left "
                                                         style="margin-right: 5px;"></i>
                                    Ecuador</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Ecu"
                                       @change="manage_content($event,'OS_EcuInput','OS_Ecu')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_EcuInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_EcuButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-gt pull-left "
                                                         style="margin-right: 5px;"></i>
                                    Guatemala</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Gtm"
                                       @change="manage_content($event,'OS_GtmInput','OS_Gtm')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_GtmInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_GtmButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-pa pull-left "
                                                         style="margin-right: 5px;"></i>
                                    Panam&aacute;</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Pan"
                                       @change="manage_content($event,'OS_PanInput','OS_Pan')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_PanInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_PanButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-sv pull-left "
                                                         style="margin-right: 5px;"></i>
                                    El Salvador</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Sal"
                                       @change="manage_content($event,'OS_SalInput','OS_Sal')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_SalInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_SalButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-cr pull-left "
                                                         style="margin-right: 5px;"></i>
                                    Costa Rica</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Cri"
                                       @change="manage_content($event,'OS_CriInput','OS_Cri')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_CriInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_CriButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-pe pull-left "
                                                         style="margin-right: 5px;"></i>
                                    Per&uacute;</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <input type="file" class="hidden" id="OS_Per"
                                       @change="manage_content($event,'OS_PerInput','OS_Per')">
                                <div class="input-group col-xs-12">

                                    <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                    <input type="text" id="OS_PerInput" class="form-control input-lg" disabled
                                           placeholder="Subir Archivo">
                                    <span class="input-group-btn">
                            <button id="OS_PerButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- End Organizational Structure -->

        <!-- Extensions -->
        <div class="col-md-12">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-phone-volume pull-left "
                                             style="margin-right: 8px;"></i>
                        Extensiones/Anexos Telef&oacute;nicos</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <input type="file" class="hidden" id="EA_Phones"
                           @change="manage_content($event,'EA_PhonesInput','EA_Phones')">
                    <div class="input-group col-xs-12">

                        <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                        <input type="text" id="EA_PhonesInput" class="form-control input-lg" disabled
                               placeholder="Subir Archivo">
                        <span class="input-group-btn">
                            <button id="EA_PhonesButton" class="browse btn btn-primary input-lg"
                                    style="background-color: #7DC356;" type="button">
                                <i class="glyphicon glyphicon-search"></i> Buscar</button>
                        </span>

                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- End Extensions -->

        <!-- Procesos Locales -->
        <div class="col-md-12">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-exchange-alt pull-left "
                                             style="margin-right: 8px;"></i>
                        Procesos Locales</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <!-- Mexico -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-mx pull-left "
                                                         style="margin-right: 8px;"></i>
                                    Formatos ABI M&eacute;xico</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <!--v_rma-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="far fa-envelope pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Validación RMA</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="V_RMA"
                                                   @change="manage_content($event,'V_RMAInput','V_RMA')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="V_RMAInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="V_RMAButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--SN-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-briefcase pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Sesi&oacute;n de Negocios</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="SN"
                                                   @change="manage_content($event,'SNInput','SN')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="SNInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="SNButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--C_AS-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-atlas pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Clausulas Autochip</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="C_AS"
                                                   @change="manage_content($event,'C_ASInput','C_AS')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="C_ASInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="C_ASButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--C_CI-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-file-signature pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Contrato C.I</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="C_CI"
                                                   @change="manage_content($event,'C_CIInput','C_CI')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="C_CIInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="C_CIButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--C_CB-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-file-signature pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Contrato C.B</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="C_CB"
                                                   @change="manage_content($event,'C_CBInput','C_CB')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="C_CBInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="C_CBButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--F_9052-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fab fa-wpforms pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Formato 9052</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="F_9052"
                                                   @change="manage_content($event,'F_9052Input','F_9052')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="F_9052Input" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="F_9052Button" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--FG-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fab fa-wpforms pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Formato Garant&iacute;a</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="FG"
                                                   @change="manage_content($event,'FGInput','FG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="FGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="FGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--FS-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fab fa-wpforms pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Formato Siminarios</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="FS"
                                                   @change="manage_content($event,'FSInput','FS')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="FSInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="FSButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--FF-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fab fa-wpforms pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Formato Fiscal</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="FF"
                                                   @change="manage_content($event,'FFInput','FF')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="FFInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="FFButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--IA-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-magic pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Inscrpci&oacute;n Autoship</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="IA"
                                                   @change="manage_content($event,'IAInput','IA')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="IAInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="IAButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--I_SMS-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="far fa-comments pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Inscrpci&oacute;n SMS</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="I_SMS"
                                                   @change="manage_content($event,'I_SMSInput','I_SMS')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="I_SMSInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="I_SMSButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--MR-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-book pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Manual Repuestos</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MR"
                                                   @change="manage_content($event,'MRInput','MR')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MRInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MRButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--OU-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Orden Unificada</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="OU"
                                                   @change="manage_content($event,'OUInput','OU')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="OUInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="OUButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>



                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- End Extensions -->

        <!-- Jobs -->
        <div class="col-md-12">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fas fa-user-astronaut pull-left "
                                             style="color: white;margin-right: 5px;background-color: #189644 ;border-radius: 50%;border: 1x solid grey;padding:3px;"></i>
                        Descripci&oacute;n de Puestos</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <!-- Ecuador -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-ec"></i>
                                    Ecuador</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <!--Gerente General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente General</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="EGGeneal"
                                                   @change="manage_content($event,'EGGenealInput','EGGeneal')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="EGGenealInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="EGGenealButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente C.F.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente C.F.</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="GCF"
                                                   @change="manage_content($event,'GCFInput','GCF')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="GCFInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="GCFButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador S.C.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador S.C.</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CSC"
                                                   @change="manage_content($event,'CSCInput','CSC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CSCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CSCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Servicio al Cliente P.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Servicio al Cliente P.</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="SCP"
                                                   @change="manage_content($event,'SCPInput','SCP')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="SCPInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="SCPButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Servicio al Cliente C.C.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Servicio al Cliente C.C.</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="SCCC"
                                                   @change="manage_content($event,'SCCCInput','SCCC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="SCCCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="SCCCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador L.C.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador L.C.</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="ECLC"
                                                   @change="manage_content($event,'ECLCInput','ECLC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="ECLCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="ECLCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Analista C.G.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Analista C.G.</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="EACG"
                                                   @change="manage_content($event,'EACGInput','EACG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="EACGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="EACGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Analista C.I.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Analista C.I.</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="EACI"
                                                   @change="manage_content($event,'EACIInput','EACI')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="EACIInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="EACIButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Analista C.C.P.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Analista C.C.P.</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="EACCP"
                                                   @change="manage_content($event,'EACCPInput','EACCP')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="EACCPInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="EACCPButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- Colombia -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-co"></i>
                                    Colombia</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <!--Comercial-->

                                <!--Gerente General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente General(Comercial)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CGGeneal"
                                                   @change="manage_content($event,'CGGenealInput','CGGeneal')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CGGenealInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CGGenealButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente Comercial E.C.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente Comercial E.C.(Comercial)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CGCEC"
                                                   @change="manage_content($event,'CGCECInput','CGCEC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CGCECInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CGCECButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente Comercial N.Oc.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente Comercial N.Oc.(Comercial)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CGCNOc"
                                                   @change="manage_content($event,'CGCNOcInput','CGCNOc')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CGCNOcInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CGCNOcButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente Comercial N.Or.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente Comercial N.Or.(Comercial)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CGCNOr"
                                                   @change="manage_content($event,'CGCNOrInput','CGCNOr')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CGCNOrInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CGCNOrButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente Comercial O.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente Comercial O.(Comercial)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CGCO"
                                                   @change="manage_content($event,'CGCOInput','CGCO')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CGCOInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CGCOButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente Comercial S.O.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente Comercial S.O.(Comercial)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CGCSO"
                                                   @change="manage_content($event,'CGCSOInput','CGCSO')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CGCSOInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CGCSOButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--Finanzas-->

                                <!--Contrador-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Contrador(Finanzas y Administraci&oacute;n)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CC"
                                                   @change="manage_content($event,'CCInput','CC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Contador General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Contador General(Finanzas y Administraci&oacute;n)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CCG"
                                                   @change="manage_content($event,'CCGInput','CCG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CCGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CCGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador Contable Bonif-Audit-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador Contable Bonif-Audit(Finanzas y Administraci&oacute;n)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CCCBA"
                                                   @change="manage_content($event,'CCCBAInput','CCCBA')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CCCBAInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CCCBAButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Asistente Tesorer&iacute;a-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Asistente Tesorer&iacute;a(Finanzas y Administraci&oacute;n)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CAT"
                                                   @change="manage_content($event,'CATInput','CAT')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CATInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CATButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Asistente Contable-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Asistente Contable(Finanzas y Administraci&oacute;n)(Finanzas y Administraci&oacute;n)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CAC"
                                                   @change="manage_content($event,'CACInput','CAC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CACInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CACButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--Log&iacute;stica-->

                                <!--Analista de Comercio Exterior-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Analista Comercio Exterior(Log&iacute;stica)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CACE"
                                                   @change="manage_content($event,'CACEInput','CACE')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CACEInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CACEButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador Operativo-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador Operativo(Log&iacute;stica)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CCO"
                                                   @change="manage_content($event,'CCOInput','CCO')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CCOInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CCOButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--Almacen-->

                                <!--Analista de Comercio Exterior-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Analista de Comercio Exterior(Almacen)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CAACE"
                                                   @change="manage_content($event,'CAACEInput','CAACE')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CAACEInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CAACEButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador Operativo-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador Operativo(Almacen)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CACO"
                                                   @change="manage_content($event,'CACOInput','CACO')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CACOInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CACOButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Auxiliar Bodega-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Auxiliar Bodega(Almacen)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="CAAB"
                                                   @change="manage_content($event,'CAABInput','CAAB')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="CAABInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="CAABButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- El Salvador -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-sv"></i>
                                    El Salvador</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <!--Gerente-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="ESG"
                                                   @change="manage_content($event,'ESGInput','ESG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="ESGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="ESGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Contador General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Contador General</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="ESCG"
                                                   @change="manage_content($event,'ESCGInput','ESCG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="ESCGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="ESCGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Servicio al Cliente-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Servicio al Cliente</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="ESSC"
                                                   @change="manage_content($event,'ESSCInput','ESSC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="ESSCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="ESSCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Servicios Generales-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Servicios Generales</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="ESSG"
                                                   @change="manage_content($event,'ESSGInput','ESSG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="ESSGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="ESSGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- Guatemala -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-gt"></i>
                                    Guatemala</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <!--Gerente-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="GG"
                                                   @change="manage_content($event,'GGInput','GG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="GGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="GGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Contador General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Contador General</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="GCG"
                                                   @change="manage_content($event,'GCGInput','GCG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="GCGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="GCGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Servicio al Cliente-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Servicio al Cliente</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="GSC"
                                                   @change="manage_content($event,'GSCInput','GSC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="GSCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="GSCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Servicios Generales-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Servicios Generales</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="GSG"
                                                   @change="manage_content($event,'GSGInput','GSG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="GSGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="GSGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>


                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- M&eacute;xico -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-mx"></i>
                                    M&eacute;xico</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <!--Analista Contable de Ingresos-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Analista Contable de Ingresos</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MACI"
                                                   @change="manage_content($event,'MACIInput','MACI')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MACIInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MACIButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Auxiliar de Almacen Cuamatla-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Auxiliar de Almacen Cuamatla</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MAAC"
                                                   @change="manage_content($event,'MAACInput','MAAC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MAACInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MAACButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Auxiliar Contable-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Auxiliar Contable</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MAC"
                                                   @change="manage_content($event,'MACInput','MAC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MACInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MACButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Contador General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Contador General</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MCG"
                                                   @change="manage_content($event,'MCGInput','MCG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MCGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MCGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador de Comercio Ext. y Compras Locales-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador de Comercio Ext. y Compras Locales</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MCCECL"
                                                   @change="manage_content($event,'MCCECLInput','MCCECL')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MCCECLInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MCCECLButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador de Bonificaciones y Tesorer&iacute;a-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador de Bonificaciones y Tesorer&iacute;a</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MCBT"
                                                   @change="manage_content($event,'MCBTInput','MCBT')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MCBTInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MCBTButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador de Impuestos y N&oacute;mina-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador de Impuestos y N&oacute;mina</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MCIN"
                                                   @change="manage_content($event,'MCINInput','MCIN')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MCINInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MCINButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente de Administraci&oacute;n y Finanzas-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente de Administraci&oacute;n y Finanzas</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MGAF"
                                                   @change="manage_content($event,'MGAFInput','MGAF')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MGAFInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MGAFButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Servicio al Cliente y Comercial-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Servicio al Cliente y Comercial</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MSCC"
                                                   @change="manage_content($event,'MSCCInput','MSCC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MSCCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MSCCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Tecnolog&iacute;as de la Informaci&oacute;n-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Tecnolog&iacute;as de la Informaci&oacute;n</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="MTI"
                                                   @change="manage_content($event,'MTIInput','MTI')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="MTIInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="MTIButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- Panam&aacute; -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-pa"></i>
                                    Panam&aacute;</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <!--Gerente General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente General</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PaGG"
                                                   @change="manage_content($event,'PaGGInput','PaGG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PaGGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PaGGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Contador General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Contador General</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PaCG"
                                                   @change="manage_content($event,'PaCGInput','PaCG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PaCGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PaCGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador Log&iacute;stica Comercial-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador Log&iacute;stica Comercial</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PaCLC"
                                                   @change="manage_content($event,'PaCLCInput','PaCLC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PaCLCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PaCLCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Ejecutivo Servicio al Cliente-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Ejecutivo Servicio al Cliente</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PaESC"
                                                   @change="manage_content($event,'PaESCInput','PaESC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PaESCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PaESCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Servicios Generales-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Servicios Generales</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PaSG"
                                                   @change="manage_content($event,'PaSGInput','PaSG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PaSGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PaSGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- Per&uacute; -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="flag-icon flag-icon-pe"></i>
                                    Per&uacute;</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <!--Gerente General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente General</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PeGG"
                                                   @change="manage_content($event,'PeGGInput','PeGG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PeGGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PeGGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente Finanzas y Administraci&oacute;n-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente Finanzas y Administraci&oacute;n</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PaGFA"
                                                   @change="manage_content($event,'PaGFAInput','PaGFA')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PaGFAInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PaGFAButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Auxiliar Contable-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Auxiliar Contable</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PeAC"
                                                   @change="manage_content($event,'PeACInput','PeAC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PeACInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PeACButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Jefe de Servicio al Cliente-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Jefe de Servicio al Cliente</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PeJSC"
                                                   @change="manage_content($event,'PeJSCInput','PeJSC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PeJSCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PeJSCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Ejecutivo de Servicio al Cliente-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Ejecutivo de Servicio al Cliente</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PeESC"
                                                   @change="manage_content($event,'PeESCInput','PeESC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PeESCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PeESCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Coordinador Log&iacute;stico-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Coordinador Log&iacute;stico</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PeCL"
                                                   @change="manage_content($event,'PeCLInput','PeCL')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PeCLInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PeCLButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Auxiliar de Bodega-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Auxiliar de Bodega</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="PeAB"
                                                   @change="manage_content($event,'PeABInput','PeAB')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="PeABInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="PeABButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- Regional -->
                    <div class="col-md-12">
                        <div class="box box-default collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><img src="/img/latinoamericawico.png" style="width:20px;background-color: #2e7d32;border-radius:50%;"></img>&nbsp;
                                    Regional</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <!--Grupo Directivo-->

                                <!--Direcci&oacute;n General-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Direcci&oacute;n General(Grupo Directivo)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegDG"
                                                   @change="manage_content($event,'RegDGInput','RegDG')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegDGInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegDGButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Direcci&oacute;n Finanzas-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Direcci&oacute;n Finanzas(Grupo Directivo)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegDF"
                                                   @change="manage_content($event,'RegDFInput','RegDF')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegDFInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegDFButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Direcci&oacute;n Comercial-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Direcci&oacute;n Comercial(Grupo Directivo)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegDC"
                                                   @change="manage_content($event,'RegDCInput','RegDC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegDCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegDCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                                <!--Regional-->

                                <!--Auditor Interno-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Auditor Interno(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegAI"
                                                   @change="manage_content($event,'RegAIInput','RegAI')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegAIInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegAIButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente de Capital Humano-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente de Capital Humano(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegGCH"
                                                   @change="manage_content($event,'RegGCHInput','RegGCH')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegGCHInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegGCHButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Directora Seminario Plata-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Directora Seminario Plata(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegDSP"
                                                   @change="manage_content($event,'RegDSPInput','RegDSP')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegDSPInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegDSPButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerencia de Operaciones y Planeaci&oacute;n de la Demanda-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerencia de Operaciones y Planeaci&oacute;n de la Demanda(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegGOPD"
                                                   @change="manage_content($event,'RegGOPDInput','RegGOPD')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegGOPDInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegGOPDButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente de Planeaci&oacute;n-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente de Planeaci&oacute;n(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegGP"
                                                   @change="manage_content($event,'RegGPInput','RegGP')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegGPInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegGPButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente de Compras-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente de Compras(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegGC"
                                                   @change="manage_content($event,'RegGCInput','RegGC')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegGCInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegGCButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente de Mercadotecnia-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente de Mercadotecnia(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegGM"
                                                   @change="manage_content($event,'RegGMInput','RegGM')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegGMInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegGMButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Encargado de Comunicaciones-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Encargado de Comunicaciones(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegECom"
                                                   @change="manage_content($event,'RegEComInput','RegECom')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegEComInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegEComButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Gerente de Tec. Informaci&oacute;n-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Gerente de Tec. Informaci&oacute;n(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegGTI"
                                                   @change="manage_content($event,'RegGTIInput','RegGTI')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegGTIInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegGTIButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Supervisor de Soporte T.I.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Supervisor de Soporte T.I.(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegSSTI"
                                                   @change="manage_content($event,'RegSSTIInput','RegSSTI')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegSSTIInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegSSTIButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--Supervisor de An&aacute;lisis y Desarrollo en T.I.-->
                                <div class="col-md-12">
                                    <div class="box box-default collapsed-box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fas fa-clipboard-list pull-left "
                                                                     style="margin-right: 5px;"></i>
                                                Supervisor de An&aacute;lisis y Desarrollo en T.I.(Regional)</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">

                                            <input type="file" class="hidden" id="RegSADTI"
                                                   @change="manage_content($event,'RegSADTIInput','RegSADTI')">
                                            <div class="input-group col-xs-12">

                                                <span class="input-group-addon"><i class="fas fa-file-pdf"></i></span>
                                                <input type="text" id="RegSADTIInput" class="form-control input-lg"
                                                       disabled
                                                       placeholder="Subir Archivo">
                                                <span class="input-group-btn">
                                                    <button id="RegSADTIButton" class="browse btn btn-primary input-lg"
                                                            style="background-color: #7DC356;" type="button">
                                                        <i class="glyphicon glyphicon-search"></i> Buscar</button>
                                                </span>

                                            </div>

                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- End Jobs -->


    </div>

</template>

<script>

    export default {
        name: "ManagerContentComponent",
        props: [
            'token'
        ],
        methods: {
            manage_content: function (e, input, id) {


                var file = e.target.files[0],
                    imageType = /image.*/;

                $('#' + input).attr("value", file['name']);

                var file_data = $('#' + id).prop('files')[0];

                /*
                console.log(file_data);
                return false;*/

                var form_data = new FormData();

                form_data.append('FileName', file_data);
                form_data.append('FileID', id);

                $.ajax({

                    url: "/manager_content/edit",
                    headers: {'X-CSRF-TOKEN': this.token},
                    type: 'POST',

                    data: form_data,
                    contentType: false,
                    processData: false,

                    beforeSend: function () {

                    },
                    success: function (response) {

                        console.log(response)

                    }

                });

            }
        }
    }
    $(document).ready(function () {

        {
            $("#FilosofyButton").on("click", function () {
                $("#Filosofy").trigger("click");
            });

            $("#OS_LatamButton").on("click", function () {
                $("#OS_Latam").trigger("click");
            });

            $("#OS_MexButton").on("click", function () {
                $("#OS_Mex").trigger("click");
            });

            $("#OS_ColButton").on("click", function () {
                $("#OS_Col").trigger("click");
            });

            $("#OS_EcuButton").on("click", function () {
                $("#OS_Ecu").trigger("click");
            });

            $("#OS_GtmButton").on("click", function () {
                $("#OS_Gtm").trigger("click");
            });

            $("#OS_PanButton").on("click", function () {
                $("#OS_Pan").trigger("click");
            });

            $("#OS_SalButton").on("click", function () {
                $("#OS_Sal").trigger("click");
            });

            $("#OS_CriButton").on("click", function () {
                $("#OS_Cri").trigger("click");
            });

            $("#OS_PerButton").on("click", function () {
                $("#OS_Per").trigger("click");
            });

            $("#EA_PhonesButton").on("click", function () {
                $("#EA_Phones").trigger("click");
            });

            $("#V_RMAButton").on("click", function () {
                $("#V_RMA").trigger("click");
            });

            $("#SNButton").on("click", function () {
                $("#SN").trigger("click");
            });

            $("#C_ASButton").on("click", function () {
                $("#C_AS").trigger("click");
            });

            $("#C_CIButton").on("click", function () {
                $("#C_CI").trigger("click");
            });

            $("#C_CBButton").on("click", function () {
                $("#C_CB").trigger("click");
            });

            $("#F_9052Button").on("click", function () {
                $("#F_9052").trigger("click");
            });

            $("#FGButton").on("click", function () {
                $("#FG").trigger("click");
            });

            $("#FSButton").on("click", function () {
                $("#FS").trigger("click");
            });

            $("#FFButton").on("click", function () {
                $("#FF").trigger("click");
            });

            $("#IAButton").on("click", function () {
                $("#IA").trigger("click");
            });

            $("#I_SMSButton").on("click", function () {
                $("#I_SMS").trigger("click");
            });

            $("#MRButton").on("click", function () {
                $("#MR").trigger("click");
            });

            $("#OUButton").on("click", function () {
                $("#OU").trigger("click");
            });

        }
        /*Jobs*/
        /*Ecuador*/
        {
            $("#EGGenealButton").on("click", function () {
                $("#EGGeneal").trigger("click");
            });
            $("#GCFButton").on("click", function () {
                $("#GCF").trigger("click");
            });
            ;
            $("#CSCButton").on("click", function () {
                $("#CSC").trigger("click");
            });
            $("#SCPButton").on("click", function () {
                $("#SCP").trigger("click");
            });
            $("#SCCCButton").on("click", function () {
                $("#SCCC").trigger("click");
            });
            $("#ECLCButton").on("click", function () {
                $("#ECLC").trigger("click");
            });
            $("#EACGButton").on("click", function () {
                $("#EACG").trigger("click");
            });
            $("#EACIButton").on("click", function () {
                $("#EACI").trigger("click");
            });
            $("#EACCPButton").on("click", function () {
                $("#EACCP").trigger("click");
            });
        }
        /*Colombia*/
        {
            /*Comercial*/
            $("#CGGenealButton").on("click", function () {
                $("#CGGeneal").trigger("click");
            });
            $("#CGCECButton").on("click", function () {
                $("#CGCEC").trigger("click");
            });
            $("#CGCNOcButton").on("click", function () {
                $("#CGCNOc").trigger("click");
            });
            $("#CGCNOrButton").on("click", function () {
                $("#CGCNOr").trigger("click");
            });
            $("#CGCOButton").on("click", function () {
                $("#CGCO").trigger("click");
            });
            $("#CGCSOButton").on("click", function () {
                $("#CGCSO").trigger("click");
            });
            /*Finanzas*/
            $("#CCButton").on("click", function () {
                $("#CC").trigger("click");
            });
            $("#CCGButton").on("click", function () {
                $("#CCG").trigger("click");
            });
            $("#CCCBAButton").on("click", function () {
                $("#CCCBA").trigger("click");
            });
            $("#CATButton").on("click", function () {
                $("#CAT").trigger("click");
            });
            $("#CACButton").on("click", function () {
                $("#CAC").trigger("click");
            });
            /*Logistica*/
            $("#CACEButton").on("click", function () {
                $("#CACE").trigger("click");
            });
            $("#CCOButton").on("click", function () {
                $("#CCO").trigger("click");
            });
            /*Almacen*/
            $("#CAACEButton").on("click", function () {
                $("#CAACE").trigger("click");
            });
            $("#CACOButton").on("click", function () {
                $("#CACO").trigger("click");
            });
            $("#CAABButton").on("click", function () {
                $("#CAAB").trigger("click");
            });

        }
        /*El Salvador*/
        {
            $("#ESGButton").on("click", function () {
                $("#ESG").trigger("click");
            });
            $("#ESCGButton").on("click", function () {
                $("#ESCG").trigger("click");
            });
            $("#ESSCButton").on("click", function () {
                $("#ESSC").trigger("click");
            });
            $("#ESSGButton").on("click", function () {
                $("#ESSG").trigger("click");
            });
        }
        /*Guatemala*/
        {
            $("#GGButton").on("click", function () {
                $("#GG").trigger("click");
            });
            $("#GCGButton").on("click", function () {
                $("#GCG").trigger("click");
            });
            $("#GSCButton").on("click", function () {
                $("#GSC").trigger("click");
            });
            $("#GSGButton").on("click", function () {
                $("#GSG").trigger("click");
            });
        }
        /*Mexico*/
        {
            $("#MACIButton").on("click", function () {
                $("#MACI").trigger("click");
            });
            $("#MAACButton").on("click", function () {
                $("#MAAC").trigger("click");
            });
            $("#MACButton").on("click", function () {
                $("#MAC").trigger("click");
            });
            $("#MCGButton").on("click", function () {
                $("#MCG").trigger("click");
            });
            $("#MCCECLButton").on("click", function () {
                $("#MCCECL").trigger("click");
            });
            $("#MCBTButton").on("click", function () {
                $("#MCBT").trigger("click");
            });
            $("#MCINButton").on("click", function () {
                $("#MCIN").trigger("click");
            });
            $("#MGAFButton").on("click", function () {
                $("#MGAF").trigger("click");
            });
            $("#MSCCButton").on("click", function () {
                $("#MSCC").trigger("click");
            });
            $("#MTIButton").on("click", function () {
                $("#MTI").trigger("click");
            });
        }
        /*Panama*/
        {
            $("#PaGGButton").on("click", function () {
                $("#PaGG").trigger("click");
            });
            $("#PaCGButton").on("click", function () {
                $("#PaCG").trigger("click");
            });
            $("#PaCLCButton").on("click", function () {
                $("#PaCLC").trigger("click");
            });
            $("#PaESCButton").on("click", function () {
                $("#PaESC").trigger("click");
            });
            $("#PaSGButton").on("click", function () {
                $("#PaSG").trigger("click");
            });
        }
        /*Peru*/
        {
            $("#PeGGButton").on("click", function () {
                $("#PeGG").trigger("click");
            });
            $("#PaGFAButton").on("click", function () {
                $("#PaGFA").trigger("click");
            });
            $("#PeACButton").on("click", function () {
                $("#PeAC").trigger("click");
            });
            $("#PeJSCButton").on("click", function () {
                $("#PeJSC").trigger("click");
            });
            $("#PeESCButton").on("click", function () {
                $("#PeESC").trigger("click");
            });
            $("#PeCLButton").on("click", function () {
                $("#PeCL").trigger("click");
            });
            $("#PeABButton").on("click", function () {
                $("#PeAB").trigger("click");
            });
        }
        /*Regional*/
        {
            $("#RegDGButton").on("click", function () {
                $("#RegDG").trigger("click");
            });
            $("#RegDFButton").on("click", function () {
                $("#RegDF").trigger("click");
            });
            $("#RegDCButton").on("click", function () {
                $("#RegDC").trigger("click");
            });
            $("#RegAIButton").on("click", function () {
                $("#RegAI").trigger("click");
            });
            $("#RegGCHButton").on("click", function () {
                $("#RegGCH").trigger("click");
            });
            $("#RegDSPButton").on("click", function () {
                $("#RegDSP").trigger("click");
            });
            $("#RegGOPDButton").on("click", function () {
                $("#RegGOPD").trigger("click");
            });
            $("#RegGPButton").on("click", function () {
                $("#RegGP").trigger("click");
            });
            $("#RegGCButton").on("click", function () {
                $("#RegGC").trigger("click");
            });
            $("#RegGMButton").on("click", function () {
                $("#RegGM").trigger("click");
            });
            $("#RegEComButton").on("click", function () {
                $("#RegECom").trigger("click");
            });
            $("#RegGTIButton").on("click", function () {
                $("#RegGTI").trigger("click");
            });
            $("#RegSSTIButton").on("click", function () {
                $("#RegSSTI").trigger("click");
            });
            $("#RegSADTIButton").on("click", function () {
                $("#RegSADTI").trigger("click");
            });
        }

    });

</script>

<style scoped>

</style>