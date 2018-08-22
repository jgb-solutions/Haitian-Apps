<footer class="black darken-4 white-text no-mb">
	<div class="container">
		<div class="row no-mb">
			<div class="col m6 s12">
				<p class="grey-text hide-on-small-only">
					&copy; {{ date('Y') }} {{ config('app.name') }} <br>
					<img src="/images/{{config('site.logo')}}" width="155">
				</p>
				<p class="center-align hide-on-med-and-up grey-text">
					&copy; {{ date('Y') }} {{ config('app.name') }}<br>
					<img src="/images/{{config('site.logo')}}" width="155">
				</p>
			</div>
			<div class="col m6 s12">
				<p class="right-align grey-text hide-on-small-only">
					Follow Us on Social Media &nbsp;
					<a
						href="{{ config('site.social.github') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-github fa-fw"></i>
					</a>
					&nbsp;
					<a
						href="{{ config('site.social.facebook') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-facebook fa-fw"></i>
					</a>
				</p>
				<p class="center-align grey-text hide-on-med-and-up">
					Follow Us on Social Media <br>
					<a
						href="{{ config('site.social.github') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-github fa-fw"></i>
					</a>
					&nbsp;
					<a
						href="{{ config('site.social.facebook') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-facebook fa-fw"></i>
					</a>
				</p>
			</div>
			<div class="col m12 s12">
				<p class="center-align grey-text">
					<small class="uppercase-text">A product by </small><br>
						<a href="https://jgb.solutions" class="orange-text" target="_blank">
							<img src="/images/jgb-solutions-logo-500x110.png" class="responsive-img" width="150">
						</a>
				</p>
			</div>
		</div>
	</div>
</footer>