 <!-- Header -->
	<style>

	</style>
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navMenu" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('home') }}">Лого на фирмата</a>
				</div>
				<div class="collapse navbar-collapse" id="navMenu">
					<ul class="nav navbar-nav">
						<li>
							<a href="{{ route('property') }}" class="btn navbar-btn">
								Имоти
							</a>
						</li>
						<li>
							<a href="{{ route('lookers') }}" class="btn navbar-btn">
								Наематели
							</a>
						</li>
						<li>
							<form class="navbar-form" role="search">
								<div class="form-group">
									<input type="text" value="" name="searchedType" class="form-control" placeholder="Телефон..." required autocomplete="off"/>
								</div>
								<input type="submit" class="btn navbar-btn" value="Търси" />
							</form>
						</li>
					</ul>
				</div><!-- ./navbar-collapse -->
			</div><!-- ./container -->
		</nav><!-- ./navbar -->
	</header>
