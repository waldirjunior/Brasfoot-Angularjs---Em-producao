var $j = jQuery.noConflict();

$j(document).ready(function(){
	var active_popup = false;
	$j('.btn ').on('click', function() {
		if (active_popup == false) {
			$j('.popup ').addClass(' is-active ').css("display", "block");
			$j('.overlay ').addClass(' is-active ').css("display", "block");
			active_popup = true;
			return false;
		}
		else {
			$j('.popup ').removeClass(' is-active ').css("display", "none");
			$j('.overlay ').removeClass(' is-active ').css("display", "none");
			active_popup = false;
			return false;
		}
	});
	$j(' .popup__close, .overlay ').on('click', function() {
		$j('.popup ').removeClass(' is-active ').css("display", "none");
		$j('.overlay ').removeClass(' is-active ').css("display", "none");
		active_popup = false;
		return false;
	});
});