/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(document).ready(function() {
    jQuery("#accordion").accordion({
        autoHeight: false
    });
    jQuery(function() {
        jQuery( "#tabs" ).tabs();
    });
    jQuery(".youtube").colorbox({
        iframe:true, 
        innerWidth:425, 
        innerHeight:344
    });
    jQuery(".views-field-field-cuadro .field-content .file a").html("DESCARGAR CUADRO »");
    jQuery(".views-field-field-archivo .field-content .file a").html("VER ARCHIVO »");
    jQuery(".banner-principal img:last").css("margin", 0);
    jQuery(".region-footer .contactenos-color #edit-name").watermark('Nombre Completo');
    jQuery(".region-footer .contactenos-color #edit-mail").watermark('Correo Electrónico');
    jQuery(".region-footer .contactenos-color #edit-subject").watermark('Asunto');
    jQuery(".region-footer .contactenos-color #edit-message").watermark('Mensaje');
});
