<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="{{asset('css/homepagecards.css')}}">

</head>
<section class="light">
	<div class="container py-4">
		<h1 class="h1 text-center text-dark" id="pageHeaderTitle">My Pets</h1>
        @foreach ($pets as $pet)
		<article class="postcard light red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{ $pet->pet_image ? asset('storage/' . $pet->pet_image) : asset('images/no-image.jpg') }}"alt="Pet Image" style="height: 230px;" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title blue"><a href="#"> {{ $pet->pet_name }}</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i> {{ $pet->created_at }}
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"> {{ $pet->description }}</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"> <a href="/pet/{{ $pet->pet_id }}/edit">Edit</a></li>
                    <form method="POST" action="/pet/{{ $pet->pet_id }}/delete">
                     @csrf
                     @method('DELETE')
                     <li class="tag__item"><button onclick="return confirm('Are you sure you want to delete this pet record?')"
                        class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button></li>
                    </form>
					<!-- <i class="fas fa-clock mr-2"></i>55 mins. -->
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>{{ $pet->breed }}</a>
					</li>
				</ul>
			</div>
		</article>
        @endforeach
</section>
</html>