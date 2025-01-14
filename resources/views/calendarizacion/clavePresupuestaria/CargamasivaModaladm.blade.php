<div class="modal fade bd-example-modal-lg" id="Modal_admin" name="Modal_admin" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header colorMorado">
                <h5 class="modal-title" id="staticBackdropLabel">{{ __('messages.carga_masiva_title') }}</h5>
                <button type="button" class="btn-close" id="closeadm" name="closeadm"></button>
            </div>
            {{--             <form id="Form_Modal_Carga_Masiva" name="Form_Modal_Carga_Masiva" enctype="multipart/form-data">
 --}}
            <form action="{{ route('load_data_plantilla') }}" id="Form_Modal_Carga_Masiva" name="Form_Modal_Carga_Masiva" method="POST" enctype="multipart/form-data">
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
                                    id="downloadbtnadm" name="downloadbtnadm">
                                    <i class="fa fa-download" style="color: #dfdfdf"></i>
                                    {{ __('messages.descargar_plantilla') }}</a>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="instruccion 2">
                                    <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Si
                                            selecciona carga completa los registros
                                            guardados no confirmados <b>seran
                                                borrados</b></span></span>
                                </label>
                            </div>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <button style="width: 20%; border: 1px solid #555;" type="button"
                                    class="btn colorMorado"
                                    onclick="document.getElementById('file_adm').click()">Seleccionar archivo</button>
                                <input type="file" id="file_adm" name="file" style="display:none"
                                    class="file_adm" accept=".xlsx ">
                                <input id="fileadm_label" style="width: 70%" type="text" readonly
                                    value="Sin archivos seleccionados">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group d-flex justify-content-around">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input " value="0" type="radio" name="tipo_adm"
                                id="parcial_adm" checked>
                            <label class="form-check-label " for="tipo_adm">
                                Carga parcial
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="1" type="radio" name="tipo_adm"
                                id="completa_adm">
                            <label class="form-check-label" for="tipo_adm">
                                Carga completa
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer-carga">
                    <button type="button" onclick="document.getElementById('closeadm').click()"
                        class="btn btn-secondary " data-bs-dismiss="modal">{{ __('messages.cancelar') }}</button>
{{--                     <button type="button" name="aceptar_adm" id="aceptar_Adm" class="btn colorMorado">
                        <i class="fa fa-upload" style="color: #dfdfdf"></i>
                        {{ __('messages.cargar_archivo') }}</button> --}}
                        <button type="submit" name="aceptar_adm" id="aceptar_Adm" class="btn colorMorado">
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
    $('.file_adm').change(function(e) {
        e.preventDefault();
        document.querySelector("#Modal_admin #fileadm_label").value = document.querySelector("#file_adm").files[
            0].name;
    });

/*     $('#aceptar_Adm').click(function(e) {
        var form = $('#Modal_admin').find("#Form_Modal_Carga_Masiva");
        var formData = new FormData(form[0]);
        Swal.fire({
            title: '{{ __('messages.msg_cargando_datos') }}',
            html: ' <b></b>',
            allowOutsideClick: false,
            timer: 500,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
            }
        }).then(() => {
            $.ajax({
                url: "{{ route('load_data_plantilla') }}",
                type: 'POST',
                data: formData,
                global: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.close();
                    $("#Modal_admin").find("#file_adm").val(null);
                    $("#Modal_admin").find("#fileadm_label").val('Seleccionar archivo');
                    $('#Modal_admin').modal('hide');
                }
            });
        });
    }); */
    $('#aceptar_Adm').click(function(e) {
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

    $(document).delegate("#closeadm", "click", function(event) {
        $("#Modal_admin").find("#file_adm").val(null);
        $("#Modal_admin").find("#fileadm_label").val('Seleccionar archivo');
        $('#Modal_admin').modal('hide');
    });
</script>
