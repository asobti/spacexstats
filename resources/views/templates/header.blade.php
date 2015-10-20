<div id="flash-message-container">
    @if (Session::has('flashMessage'))
        <p class="flash-message {{ Session::get('flashMessage.type') }}">{{ Session::get('flashMessage.contents') }}</p>
    @endif
</div>

<div class="header-wrapper {{ $class or null }}" style="background-image:url({{ $backgroundImage or null }})">
	<header class="text-center">
			<i class="fa fa-navicon toggleMobileNavigation gridle-show-small"></i>
			<span id="logo"><a href="/">SpaceX Stats</a></span>
			<nav>		
				<ul>
                    <li class="gr-1on8 gr-small-12">
                        <a href="/live">Live</a>
                    </li>
					<li class="gr-1on8 gr-small-12">
                        <a href="/missions/past">Past Missions</a>
						<ul class="nav-second-tier wide">
							@foreach ($nearbyMissions['past'] as $pastMission)
							<li><a href="/missions/{{ $pastMission->slug }}">{{ $pastMission->name }}</a></li>
							@endforeach
						</ul>
					</li>
					<li class="gr-1on8 gr-small-12">
                        <a href="/missions/future">Future Missions</a>
						<ul class="nav-second-tier wide">
							@foreach ($nearbyMissions['future'] as $futureMission)
							<li><a href="/missions/{{ $futureMission->slug }}">{{ $futureMission->name }}</a></li>
							@endforeach
						</ul>
					</li>
					<li class="gr-1on8 gr-small-12">
						More...
						<ul class="nav-second-tier wide">
                            <li><a href="/locations">Locations</a></li>
							<li><a href="/newssummaries">News Summaries</a></li>
							<li><a href="/faq">Frequently Asked Questions</a></li>
							<li>RSS Updates</li>
                            <li>Community</li>
							<li>About</li>
							<li>Contact</li>
						</ul>
					</li>
					<li class="gr-1on8 gr-small-12 push-3">
                        <a href="/missioncontrol">Mission Control</a>
						<ul class="nav-second-tier">
							@if (Auth::isSubscriber())
								<li><a href="/missioncontrol/create">Upload</a></li>
                                <li>Collections</li>
								<li>Leaderboards</li>
							@else 	
							    <li><a href="/missioncontrol/buy">Buy</a></li>
							@endif
							<li><a href="/docs#missioncontrol">Docs</a></li>
                            @if (Auth::isAdmin())
                                <li><a href="/missioncontrol/review">Review</a></li>
                            @endif
						</ul>
					</li>
					<li class="gr-1on8 gr-small-12 push-3">
						@if (Auth::check())
                            <a href="/users/{{ Auth::user()->username }}">{{ Auth::user()->username }}</a>
							<ul class="nav-second-tier">
                                @if (Auth::isAdmin())
                                    <li><a href="/admin">Admin</a></li>
                                @endif
								<li>
									<form method="post" action="/auth/logout">
                                        {!! csrf_field() !!}
										<input type="submit" value="Logout" />
									</form>
								</li>		
							</ul>				
						@else
							My Account
							<ul class="nav-second-tier">
                                <li><a href="/auth/login">Log In</a></li>
                                <li><a href="/auth/signup">Sign Up</a></li>
							</ul>
						@endif
						</ul>
					</li>
				</ul>	
			</nav>		
	</header>
</div>
