<div class="sidebar" data-background-color="black" data-active-color="warning">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a class="simple-text">
                {{ Auth::user()->fullname }}
            </a>
        </div>

        <ul class="nav">
            <li class="{{ $page == 'index' ? 'active' : ''}}">
                <a href="{{ url('coordinator/welcome') }}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ $page == 'profile' ? 'active' : ''}}">
                <a href="{{ url('coordinator/edit_profile') }}">
                    <i class="ti-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="{{ $page == 'gen_link' ? 'active' : ''}}">
                <a href="{{ url('coordinator/gen_link') }}">
                    <i class="ti-wand"></i>
                    <p>Generate Link</p>
                </a>
            </li>
            <li class="{{ $page == 'sponsors_investors' ? 'active' : ''}}">
                <a href="{{ url('coordinator/be_sponsors_investors') }}">
                    <i class="ti-world"></i>
                    <p>Sponsors and investors</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="{{ url('coordinator/logout') }}">
                    <i class="ti-export"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>