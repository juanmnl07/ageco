jQuery(document).ready(function(){ 
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
    /*Agregado por Juan Martines: agregar un target blank a los siguientes enlaces:*/
    jQuery(".page-node-283 #node-283 .field-name-field-archivos .file a").attr("target","_blank");
});
