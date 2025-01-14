<div class="modal fade bd-example-modal-lg" id="ModalCargaMasiva" name="ModalCargaMasiva" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header colorMorado">
                <h5 class="modal-title" id="staticBackdropLabel">{{ __('messages.carga_masiva_title') }}</h5>
                <button type="button" class="btn-close" id="close" name="close"></button>
            </div>
            <form action="{{ route('load_data_plantilla') }}" id="Formmodal" method="POST"
            {{-- <form  id="Formmodal"  --}}
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group">
                                <label for="Instrucciones">
                                    <span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><b>Lea
                                                las instrucciones para asegurar el funcionamiento correcto del
                                                proceso:</b> </span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="descripcion">
                                    <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">
                                            <b>Asegurese de usar la plantilla </b> para el correcto funcionamiento de la
                                            carga masiva</span></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <a href="{{ route('getplantilla') }}" type="button" class="btn colorMorado"
                                    id="downloadbtn" name="downloadbtn">
                                    <i class="fa fa-download" style="color: #dfdfdf"></i>
                                    {{ __('messages.descargar_plantilla') }}</a>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            @if (Auth::user()->id_grupo==5 )

                            <div class="form-group">
                                <label for="instruccion 2">
                                    <span style="vertical-align: inherit;"><span
                                            style="vertical-align: inherit;">Las metas que hayas registrado  <b>seran borradas</b></span></span>
                                </label>
                            </div>
                            @endif

                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="instruccion 2">
                                        <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Si selecciona carga completa los registros
                                            guardados no confirmados <b>seran
                                                    borrados</b></span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            @if(Auth::user()->id_grupo==4)
                            <div class="form-group">
                                <a href="{{ route('getManualCMC') }}" type="button" class="btn btn-success"
                                    id="downloadbtn" name="downloadbtn">
                                    <i class="fa fa-download" style="color: #dfdfdf"></i>
                                    {{ __('messages.descargar_manual') }}</a>

                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="instruccion 3">
                                    <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Los
                                            valores no especificados o con celdas vacias <b> quedáran en
                                                0</b></span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="instruccion 4">
                                    <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">El
                                        archivo cargado debe ser un documento <b>.xlsx</b></span></span>
                                    </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" style="font-weight: bold;">Atención se borraran los registros no confirmados</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <button style="width: 20%; border: 1px solid #555;" type="button"
                                    class="btn colorMorado"
                                    onclick="document.getElementById('file').click()">Seleccionar archivo</button>
                                <input type="file" id="file" name="file" style="display:none"
                                    accept=" .xlsx ">
                                <input id="file_label" style="width: 70%" type="text" readonly
                                    value="Sin archivos seleccionados">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group d-flex justify-content-around">
                        <div  class="form-check form-check-inline">
                            <input class="form-check-input " value="0" type="radio" name="tipo" id="parcial"
                                checked>
                            <label class="form-check-label " for="tipo">
                                Carga parcial
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="1" type="radio" name="tipo"
                                id="completa">
                            <label class="form-check-label" for="tipo">
                                Carga completa
                            </label>
                        </div> 
                    </div>
                </div>
                <div class="modal-footer-carga">
                    <button type="button" onclick="document.getElementById('close').click()" class="btn btn-secondary "
                        data-bs-dismiss="modal">{{ __('messages.cancelar') }}</button>
{{--                     <button type="button" name="aceptar" id="aceptar" class="btn colorMorado">
                        <i class="fa fa-upload" style="color: #dfdfdf"></i>
                        {{ __('messages.cargar_archivo') }}</button> --}}
                        <button type="submit" name="aceptar" id="aceptar" class="btn colorMorado">
                            <i class="fa fa-upload" style="color: #dfdfdf"></i>
                            {{ __('messages.cargar_archivo') }}</button>
                    </div>
        </div>
        </form>
    </div>
</div>




<script type="text/javascript">
    $(document).on("ajaxStart", function() {
        $("#loading").show();
    });

    //mostrar campos una vez selecionado el municipio
    $('#file').change(function(e) {
        e.preventDefault();
        $("#ModalCargaMasiva").find("#file_label").val($('#file')[0].files[0].name)
    });
/* 
    $('#aceptar').click(function(e) {
        e.preventDefault();
       var form = $('#ModalCargaMasiva').find("#Formmodal");
        var formData = new FormData(form[0]);
        Swal.fire({
            title: '{{ __('messages.msg_cargando_datos') }}',
            html: ' <b></b>',
            allowOutsideClick: false,
            timer: 3000000,
            timer: 500,

            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
            }

        }).then(()=>{
            $.ajax({
                    url: "{{ route('load_data_plantilla') }}",
                    type: 'POST',
                    data:formData,
                    global: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.close();
                        $("#ModalCargaMasiva").find("#file").val(null);
                        $("#ModalCargaMasiva").find("#file_label").val('Seleccionar archivo');
                        $('#ModalCargaMasiva').modal('hide');
                    }
                });
            });
    }); */

    $('#aceptar').click(function(e) {
        e.preventDefault();
        Swal.fire({
            title: '{{ __('messages.msg_cargando_datos') }}',
            html: ' <b></b>',
            allowOutsideClick: false,
            timer: 3000000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();

            },

        })
        form.submit();

    });

    $(document).delegate("#close", "click", function(event){
        $("#ModalCargaMasiva").find("#file_label").val('Seleccionar archivo');
        $("#ModalCargaMasiva").find("#file").val(null);
        $('#ModalCargaMasiva').modal('hide');
    });
</script>



