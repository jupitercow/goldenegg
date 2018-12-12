jQuery(document).ready(function($) {

	/**
	 * Open search panel and focus cursor
	 */
	$('.searchToggle').click(function(e) {
		e.preventDefault();
		var $this = $(this);
		$this.toggleClass('active');
		$('.searchForm').slideToggle(300);
		$('.searchField')[0].focus();
	});

});
