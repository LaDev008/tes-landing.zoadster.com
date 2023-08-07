<div class="text-light rounded-2 d-flex flex-column position-relative card-wrapper bg-black py-4 text-center">
	<h2 style="z-index:99">PREDIKSI {{ $item->name }}</h2>
	<label class="fs-1 text-warning fw-bold" style="z-index:99">
		{{ $item->updated_at->addDays(1)->isoFormat('dddd, D MMMM Y') }}
	</label>
	<a href="{{ '/prediksi/' . $item->slug }}" style="z-index:99">
		<button class="btn">PREDIKSI LENGKAP</button>
	</a>
	<img src="{{ asset($item->image) }}" class="card-image">
</div>
