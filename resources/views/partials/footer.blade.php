<footer class="black darken-4 white-text no-mb">
	<div class="container">
		<div class="row no-mb">
			<div class="col s12">
				<p class="center-align grey-text">
					Let's connect \_(0_o)_/ <br><br>
					<a
						href="https://github.com/{{ config('site.github') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-github fa-fw"></i>
					</a>
					&nbsp;
					<a
						href="https://twitter.com/{{ config('site.twitter') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-twitter fa-fw"></i>
					</a>
					&nbsp;
					<a
						href="https://facebook.com/{{ config('site.facebook') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-facebook fa-fw"></i>
					</a>
				</p>
				<p class="center-align grey-text">
					&copy; {{ date('Y') }} {{ config('site.name') }}<br>
				</p>
			</div>
		</div>
	</div>
</footer>