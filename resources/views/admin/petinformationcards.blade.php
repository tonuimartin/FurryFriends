<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="{{asset('css/homepagecards.css')}}">

</head>
<section class="dark">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle"> Pet Information </h1>
        @foreach ($petinformations as $petinformation)
		<article class="postcard light red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{ $petinformation->pet_information_image ? asset('storage/' . $petinformation->pet_information_image) : asset('images/no-image.jpg') }}"alt="Pet Information Image" style="height: 230px;" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#"> {{ $petinformation->title }}</a></h1> 
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i> {{ $petinformation->created_at }}
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"> {{ $petinformation->info_description }}</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"> <a href="">Edit</a></li>
                    <form method="POST" action="">
                     @csrf
                     @method('DELETE')
                     <li class="tag__item"><button onclick="return confirm('Are you sure you want to delete this pet record?')"
                        class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button></li>
                    </form>
					<!-- <i class="fas fa-clock mr-2"></i>55 mins. -->
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i></a>
					</li>
				</ul>
			</div>
		</article>
        @endforeach
</section>
</html>