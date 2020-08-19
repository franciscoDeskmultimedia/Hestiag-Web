/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.hestiag = {
    attach: function (context, settings) {
      
      jQuery(".filtro-de-categoria a").click(function(e){
        e.preventDefault();
        jQuery(".filtro-de-categoria a").removeClass('active');
        jQuery(this).addClass('active');
        var elCambio = jQuery(".losfiltros select option:contains("+jQuery(this).text()+")").attr("value");
        console.log(elCambio);
        jQuery(".losfiltros select").val(elCambio);
        jQuery(".losfiltros button").click();
      });
      
      $(document).ajaxComplete(function(){
        console.log('se ejecuta');
        let catSelected = jQuery(".losfiltros select option[selected='selected']").text();
        console.log(catSelected);
        jQuery(".filtro-de-categoria a").removeClass('active');
        jQuery('.filtro-de-categoria a:contains('+catSelected+')').addClass('active');
      });
      

      $.instagramFeed({
        'username': 'hestiag.biotech',
        'container': "#theInstagramFeed",
        'display_profile': false,
        'display_biography': false,
        'display_gallery': true,
        'callback': null,
        'styling': true,
        'items': 6,
        'items_per_row': 3,
        'margin': 0
    });

    if( window.location.pathname == '/es/productos'){
      if(window.location.href.indexOf('=') >= 0 ){
        let catType = window.location.href.split('=')[1].substr(0,1).toUpperCase()+window.location.href.split('=')[1].substr(1);
      if( catType ){
        // jQuery(".filtro-de-categoria a").removeClass('active');
        jQuery(".filtro-de-categoria a:contains("+catType+")").click();
        // jQuery(".filtro-de-categoria a:contains("+catType+")").addClass('active');

      }
      }
      
    }



    }
  };

})(jQuery, Drupal);
