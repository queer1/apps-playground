$(document).ready(function() {
	$('#moviescontainer').masonry({
		itemselector: '.movie',
	});
});

$(document).ready(function() {
	$('.movie').click(function() {
		videoViewer.file = $(this).data('name');
		videoViewer.dir = $(this).data('dir');
		videoViewer.location = videoViewer.getMediaUrl($(this).data('name'));
		videoViewer.mime = $(this).data('mime');

		OC.addScript('files_videoviewer','mediaelement-and-player', function(){
			OC.addScript('files_videoviewer','mep-extra', videoViewer.showPlayer);
		});
	});
});