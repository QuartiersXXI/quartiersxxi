;(function($){
	$(function(){
		// Ajouter un bouton de menu pour les mobiles
		$('.header .container').append(
			$('<a class="menus-toggle" href="#firstnav">Menu</a>')
				.click(function(){
					$('.access, .firstnav').slideToggle();
					return false;
				})
		);
		
		// Ouvrir les spip_out en externe
		$('a.spip_out').on('click', function() {
			window.open(this.href);
			return false;
		});
	});
})(jQuery);
