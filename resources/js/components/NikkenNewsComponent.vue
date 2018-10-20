<template>

    <div class="row">
        <div class="col-md-12"
             style="height:40px;margin-bottom: 30px;margin-top: -20px;background-color: #fff ;width: 100%; position: fixed;z-index: 100;">
            <input type="button" class="btn btn-primary pull-right" style="" value="Agregar"
                   v-on:click.prevent="addElement()">
        </div>
        <br>
        <br>
        <div class="col-sm-12 col-md-12" v-for="(n,key) in news" :id="'Card_'+key">
            <div class="thumbnail">

                <!--<img v-if="n.FileType == 'file'" src="../../../../public/{{ n.FileUrl }}" alt="...">
                {{ n.FileUrl }}-->
                <!--<iframe v-if="n.FileType == 'Url'" style="width: 100%; max-height:300px;" src="{{ n.FileUrl }}">
                </iframe>-->
                <div class="caption">
                    <h3>{{ n.NewName }}</h3>

                    <p>
                        <strong>Caduca: </strong><i>{{ n.ExpireDate  | moment("dddd, MMMM Do YYYY") }} </i>

                        <span class="btn btn-danger fa fa-trash pull-right" v-on:click.prevent="removeElement(key)"
                              style="display:inline-block;"></span>
                        <span class="btn btn-primary fa fa-edit pull-right" style="display:inline-block;"
                              v-on:click.prevent="editElement(key)"></span>
                    </p>
                    <div class=" form-group row" :id="key" style="display:none;">

                        <input type="text" class="hidden" :id="'NewID_'+key" :value="n.NewID">

                        <div class="col-md-4">
                            <label>Caducidad:</label>
                        </div>

                        <div class="col-md-4">
                            <label>T&iacute;tulo Noticia:</label>
                        </div>

                        <div class="col-md-4">
                            <label>Visible para:</label>
                        </div>

                        <div class="col-md-4">

                            <datepicker v-bind:id="'ExpireDate_'+key" placeholder="Seleccione una fecha" v-model="n.ExpireDate" :disabledDates="{ to: new Date(Date.now() - 8640000) }" :lang="es"></datepicker>

                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" v-bind:id="'NewName_'+key" v-model="n.NewName">
                        </div>

                        <div class="col-md-4 ">
                            <select class="form-control select2" v-model="n.CountriesView" :id="'CountriesView_'+key">
                                <option value="regional" :selected="n.CountriesView == 'regional'">Regional</option>
                                <option value="mexico" :selected="n.CountriesView == 'mexico'">M&eacute;xico</option>
                                <option value="colombia" :selected="n.CountriesView == 'colombia'">Colombia</option>
                                <option value="ecuador" :selected="n.CountriesView == 'ecuador'">Ecuador</option>
                                <option value="el salvador" :selected="n.CountriesView == 'el salvador'">El Salvador
                                </option>
                                <option value="guatemala" :selected="n.CountriesView == 'guatemala'">Guatemala</option>
                                <option value="costa rica" :selected="n.CountriesView == 'costa rica'">Costa Rica
                                </option>
                                <option value="peru" :selected="n.CountriesView == 'peru'">Per&uacute;</option>
                                <option value="panama" :selected="n.CountriesView == 'panama'">Panam&aacute;</option>
                            </select>
                        </div>

                        <div class="clearfix"></div>

                        <!--Second -->

                        <div class="col-md-6">
                            <label>Tipo de noticia:</label>
                        </div>

                        <!--<div v-bind:class="{'clearfix':('n.FileType' != 'Info')}" v-if="n.FileType == 'Info'"></div>-->

                        <div class="col-md-6" v-if="n.FileType != 'Info'">
                            <label>{{ n.FileType }}</label>
                        </div>
                        <div class="col-md-3" v-if="n.FileType == 'Info'">
                            <label>Fondo</label>
                        </div>
                        <div class="col-md-3" v-if="n.FileType == 'Info'">
                            <label>Texto</label>
                        </div>

                        <div class="col-md-6 pull-left">
                            <select class="form-control" v-model="n.FileType" :id="'FileType_'+key">
                                <option value="Url" :selected="n.FileType == 'Url'">Url(video)</option>
                                <option value="Archivo" :selected="n.FileType == 'Archivo'">Archivo(imagen)</option>
                                <option value="Info" :selected="n.FileType == 'Info'">Info</option>
                            </select>
                        </div>

                        <div v-if="n.FileType == 'Url'" class="col-md-6 ">
                            <input type="text" class="form-control" placeholder="https://getbootstrap.com"
                                   :id="'FileTypeU_'+key" :value="n.FileUrl">
                        </div>

                        <div v-if="n.FileType == 'Archivo'" class="col-md-6 ">
                            <input type="file" class="form-control" :id="'FileTypeF_'+key">
                        </div>

                        <!---->
                        <div v-if="n.FileType == 'Info'" class="col-md-3" :id="'Background_'+key">

                            <swatches
                                    v-model="background"

                                    show-fallback

                                    popover-to="left"
                            ></swatches>

                        </div>

                        <div v-if="n.FileType == 'Info'" class="col-md-3" :id="'ColorWord_'+key">

                            <swatches
                                    v-model="color"

                                    show-fallback

                                    popover-to="left"
                            ></swatches>

                        </div>

                        <div v-if="n.FileType == 'Info'" class="col-md-11 text-center"
                             v-bind:style="{'color':color, 'line-height':'normal','vertical-align':'middle','background': background,'height':'320px','margin-left':'5%','margin-right':'6%','margin-bottom':'5%','margin-top':'5%'}">

                            <p v-bind:style="{'position': 'absolute','left': '50%','top': '50%','transform': 'translate(-50%, -50%)'}">
                                {{ message }}</p>


                        </div>

                        <div class="col-md-12">
                            <label>Descripci&oacute;n de Noticia</label>
                        </div>

                        <div class="col-md-12">

                            <textarea :id="'NewDescription_'+key" class="form-control" v-model="message"></textarea>

                        </div>

                        <br>
                        <div class="col-md-3 pull-right" style="margin-top: 10px;">

                            <input type="button" class="btn btn-primary btn-block" value="Aceptar"
                                   v-on:click.prevent="editNew(key)">

                        </div>



                    </div>

                    <!---->
                </div>
            </div>
        </div>


    </div>

</template>


<script>
    import Swatches from 'vue-swatches';
    import Datepicker from 'vuejs-datepicker';
    import {en, es} from 'vuejs-datepicker/dist/locale';

    const moment = require('moment')
    require('moment/locale/es')
    // Vue.use(require('vue-moment'));


    Vue.use(require('vue-moment'), {
        moment
    })
    // import VueFilterDateFormat from 'vue-filter-date-format';

    // Vue.use(VueFilterDateFormat);

    export default {
        name: "NikkenNewsComponent",
        props: [
            'news',
            'token'
        ],
        data() {

            return {

                news: [],
                background: '#27af60',
                color: '#fff',
                exceptions: ['#FFFFFF', '#000000'],
                message: 'Comentario',
                /*Date*/
                es: es,
                /*Moment*/

            };
        },

        components: {
            Swatches,
            Datepicker
        },
        created() {
            // this.news = JSON.parse(this.news);
            this.news = $.map(JSON.parse(this.news), function (value, index) {
                return [value];
            });

            console.log(this.news)

        },

        methods: {
            addElement: function (index) {
                //add element and edit id new
                var random = Math.random().toString(36).replace('0.', '');

                this.news.push({
                    NewID: random,
                    NewName: 'Noticia Nueva',
                    FileType: "Url",
                    FileuRL: "https://www.youtube.com/watch?v=AiJwBIYzVyM",
                    CountriesView: "mexico"
                });

                var form_data = [];

                form_data = {
                    'NewID': random,
                    'NewName': 'Noticia Nueva',
                    'CountriesView': 'mexico',
                    'FileType': 'Url',
                    'FileTypeU': 'https://www.youtube.com/watch?v=AiJwBIYzVyM',
                    'ExpireDate':  moment(new Date()).local().format('YY-MM-DD'),
                }

                $.ajax({

                    url: "/news/create",
                    headers: {'X-CSRF-TOKEN': this.token},

                    data: form_data,
                    type: 'post',

                    beforeSend: function () {
                    },
                    success: function (response) {
                        console.log(response)
                        // $("#" + index).fadeToggle();

                    }

                });

            },
            removeElement: function (index) {


                $("#Card_" + index).fadeOut();

                var form_data = [];

                form_data = {
                    'NewID': $("#NewID_" + index).val(),
                }

                $.ajax({

                    url: "/news/delete",
                    headers: {'X-CSRF-TOKEN': this.token},

                    data: form_data,
                    type: 'post',

                    beforeSend: function () {
                    },
                    success: function (response) {
                        console.log(response)
                        $("#" + index).fadeToggle();

                    }

                });

            },
            editElement: function (index) {
                $("#" + index).fadeToggle();
            },
            editNew: function (index) {

                var form_data = [];

                if ($("#FileType_" + index).val() == "Archivo") {
                    var file_data = $('#FileTypeF_' + index).prop('files')[0];
                    var form_data = new FormData();

                    form_data.append('FileTypeF', file_data);
                    form_data.append('NewID', $("#NewID_" + index).val());
                    form_data.append('NewName', $("#NewName_" + index).val());
                    form_data.append('CountriesView', $("#CountriesView_" + index).val());
                    form_data.append('FileType', $("#FileType_" + index).val());
                    form_data.append('ExpireDate', moment($("#ExpireDate_0").val()).local().format('YY-MM-DD'));
                }
                else if ($("#FileType_" + index).val() == "Info") {


                    var form_data = new FormData();

                    var FileContent = {
                        "Description": $("#NewDescription_" + index).val(),
                        "Background": this.background,
                        "ColorWord": this.color,
                    };

                    form_data.append('FileContent', JSON.stringify(FileContent));
                    form_data.append('NewID', $("#NewID_" + index).val());
                    form_data.append('NewName', $("#NewName_" + index).val());
                    form_data.append('CountriesView', $("#CountriesView_" + index).val());
                    form_data.append('FileType', $("#FileType_" + index).val());
                    form_data.append('ExpireDate', moment($("#ExpireDate_0").val()).local().format('YY-MM-DD'));

                }
                else {

                    var form_data = new FormData();

                    form_data.append('FileTypeF', file_data);
                    form_data.append('FileTypeU', $("#FileTypeU_" + index).val());
                    form_data.append('NewID', $("#NewID_" + index).val());
                    form_data.append('NewName', $("#NewName_" + index).val());
                    form_data.append('CountriesView', $("#CountriesView_" + index).val());
                    form_data.append('FileType', $("#FileType_" + index).val());
                    form_data.append('ExpireDate', moment($("#ExpireDate_0").val()).local().format('YY-MM-DD'));

                }

                $.ajax({

                    url: "/news/edit",
                    headers: {'X-CSRF-TOKEN': this.token},

                    data: form_data,
                    type: 'post',
                    contentType: false,
                    processData: false,

                    beforeSend: function () {
                    },
                    success: function (response) {
                        console.log(response)
                        $("#" + index).fadeToggle();

                    }

                });

            }
        }

    }


</script>

<style>

    input,
    select {
        padding: 0.75em 0.5em;
        font-size: 100%;
        border: 1px solid #ccc;
        width: 100%;
        height: 35px;
    }
    /*.vdp-datepicker__calendar{    position: fixed;}*/



</style>
