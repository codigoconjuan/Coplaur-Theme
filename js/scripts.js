var proximos;
var realizados;
(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('input.search-input').attr('placeholder','');
		
				$('.bxslider').bxSlider({
                   controls : false,
                   auto:true,
                   mode: 'fade'
                   
                });
                
               $('.bxRealizados').bxSlider({
                    controls:false,
                    auto:true,
                    pagerCustom: '#paginadorRealizados',
                    mode: 'fade'
                });
                
     
                
               proximos = $('.bxProximos').bxSlider({
                    controls:false,
                    auto:true,
                    pagerCustom: '#paginadorProximos',
                    mode: 'fade'
                });
                
        
                
                smoothScroll.init({
                    speed: 200, // Integer. How fast to complete the scroll in milliseconds
                    easing: 'easeInQuad',
                    updateURL: false,
                    
                });
                
                startMap();

				$('ul#paginadorRealizados li:even').addClass('gris');
				$('ul#paginadorProximos li:even').addClass('gris');
                $('ul#reglamentos li:even').addClass('gris');
                $('.em-calendar-wrapper').addClass('col-sm-6')
                $('#post-13 form').addClass('form-horizontal');
                $('textarea').attr('placeholder', 'Escribe aquí');
	});
	
})(jQuery, this);


function startMap() {
    var latlng = new google.maps.LatLng(20.656032, -103.392056); 
    var myOptions = {zoom: 15, center: latlng, mapTypeId: google.maps.MapTypeId.ROADMAP}; 

  var map = new google.maps.Map(document.getElementById('mapa'),myOptions); 

  var contentString = '<div id="content">'+
          
            '<p>Av. De las Rosas No. 1297</p>'+
            '<p>Col. Jardines del Bosque, C.P. 44510</p>'+
            '<p>Guadalajara, Jalisco.</p>'+
            
       '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

    var marker = new google.maps.Marker({
        position: latlng, 
        map: map,
        title:"Office Location"
    }); 
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);