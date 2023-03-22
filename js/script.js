function searchFilm(){
	$('#film-list').html('');
	$.ajax({
		url: 'http://localhost/film_rest/rest/data',
		type: 'get',
		dataType:'json',
		data: {
			'var' : $('#search-input').val()
		},
		success: function (search) {

			if (search.status === 'true'){
				let film = search.result;
				$.each(film, function (i, data)
				{
					$(document).ready(function() {
						$('#film-list').append(`<div class="col-md-3 col-4 mb-3">
							<a href="home/detail/` + data.id_video + `/` + data.nama_kategori + `" class="text-dark" style="text-decoration: none;">
							<div class="card poster">
							<img src="http://localhost/rest_film/assets/gambar/thumbnail/` + data.gambar + `" class="card-img-top poster" alt="Film Poster">
							<div class="fs-9 fot-poster-1" style="background-image: linear-gradient(transparent,cadetblue);">
							<b>` + data.nama_kategori + `</b> 
							</div>
							</div>
							<div class="text-center">
							<h6 class="card-title mt-2 fs-12">`+ data.judul_video +`</h6>
							<h6 class="card-subtitle fs-12 text-orange">`+ data.tahun +`</h6>
							</div>
							</a>
							</div>`);
					});
				});
				$('#search-input').val('');
			} else {
				$('#film-list').html(`<div class="col">
					<h6 class="text-center text-danger">`+ search.message +`</h6>
					</div>`);
			}

		}
	});
}


$('#search-button').on('click', function() {
	searchFilm();
});

$('#search-input').on('keyup', function(e) {
	if (e.keyCode === 13){
		searchFilm();
	}
});