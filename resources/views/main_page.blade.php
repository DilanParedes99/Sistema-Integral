<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIAPP</title>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">          
        <div class="container-portrait">
            
            <div class="bar">
                <div class="escudo" style="background-image: url('../img/gobierno_mich.png');">
                </div>
                <h1 class="name">Sistema Integral de Análisis Programático Presupuestal</h1>
            </div>
            <nav class="menu">
                <a href="#" id="epp" class="menu-item"> <!--SAPP--><i class="fa fa-book"></i></a>
                <a href="{{url('login')}}" id="cap" class="menu-item"> <!--SIAPP--><i class="fa fa-calendar"></i> </a> 
                <a href="#" id="siapp" class="menu-item"> <!--SAPP--><i class="fa fa-bar-chart"></i></a>
                <a href="http://10.8.7.95/" id="mir" class="menu-item"> <!--MML--><i class="fa fa-pie-chart"></i> </a>
                <!--<a href="#" id="app" class="menu-item"><i class="fa fa-envelope"></i> </a>-->
            </nav>
            
            <div class="circle"></div>
            <div class="circle-rosa"></div>
            <div id="uno" class="cal">
                <h1 id="_mir" class="title ">MML - Metodología de Marco Lógico</h1>
            </div>

            <div id="dos" class="cal">
                <h1 id="_cap" class="title">CAP - Calendarización y Asignación de Presupuesto</h1>
            </div>

            <div id="tres" class="cal">
                <h1 id="_sapp" class="title">SAPP - Sistema de Análisis Programático Presupuestal</h1>

            </div>

            <div id="cuatro" class="cal">
                <h1 id="_epp" class="title">EPP - Estructura Programática Presupuestal</h1>

            </div>

            <div class="cal">
                <h1 id="anteproyecto">Anteproyecto</h1>

            </div>

            <div class="cal">
                <h1 id="siap">SIAPP</h1>
            </div>

            <div class="text-center page-content">
                <label class="footerClassMain" style="background-image: url('../img/footer.jpg');">
                    <div >
                        © {{date("Y")}} Dirección General de Gobierno Digital | Secretaría de Finanzas y Administración |
                        <a class="customFooterA" href="https://www.michoacan.gob.mx">
                            Gobierno del Estado de Michoacán
                        </a>
                    </div>
                   
                </label>
            </div>
        </div>
    </body>
    <script src="/js/utilerias.js"></script>
    <script>
        $(document).ready(function() {
            _gen.block();
            /*$(".menu-item").hover(function(){
                $(".cal").addClass("div-content");
            });*/

            $("#mir").hover(function(){
                $("#uno").addClass("div-content");
            });
            
            $("#cap").hover(function(){
                $("#dos").addClass("div-content");
            });

            $("#siapp").hover(function(){
                $("#tres").addClass("div-content");
            });

            $("#epp").hover(function(){
                $("#cuatro").addClass("div-content");
            });

            $("#calendarizacion").hover(function(){
                $("#dos").addClass("div-content");
            });

           
            
            $(".menu-item").on( "mouseout", function() {
                $(".cal").removeClass("div-content");
            } );
            /*.on('hover', function(){
                console.log("entra");
                
            });*/
            var formData = new FormData();
	        var csrf_tpken = $("input[name='_token']").val();
            formData.append("_token",csrf_tpken);
            
            $.ajax({
                url:"/get-links",
                type: "GET",
                dataType: 'json',
                processData: false,
                contentType: false,
                success:function(response){
                    try {
                        response = response.dataSet;
                        //console.log(response.valor);
                        var json = JSON.parse(response.valor);
                        $("#mir").attr("href",json.mml);
                        $("#siapp").attr("href",json.siapp);
                        $("#cap").attr("href",json.cap);
                        $("#epp").attr("href",json.epp);
                    } catch (error) {
                        
                    }

                },
                error: function(response) {
                    var mensaje="";
                    $.each(response.responseJSON.errors, function( key, value ) {
                        mensaje += value+"\n";
                    });
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: mensaje,
                        confirmButtonText: "Aceptar",
                    });
                    //$('#errorModal').modal('show');
                    console.log('Error: ' +  JSON.stringify(response.responseJSON));
                }
            });

        });
    </script>
</html>
