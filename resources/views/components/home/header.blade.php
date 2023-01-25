<header class="{{ $class }}">

    <a href="{{ $hrefHomeButton }}">
        <button>Animal Adoption</button>
    </a>

    @auth('institution')
        <div class="{{ $containerAccount }}">
            <a href="/institution/dashboard">
                <button type="button">
                    {{ auth('institution')->user()->name }}
                </button>
            </a>
        </div>
    @endauth

    @auth()
        <div class="{{ $containerAccount }}">
            <a href="/user/dashboard">
                <button type="button">
                    {{ auth()->user()->name }}
                </button>
            </a>
        </div>
    @endauth
</header>
