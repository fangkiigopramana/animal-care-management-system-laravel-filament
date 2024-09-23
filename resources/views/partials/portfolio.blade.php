<header>
    <h2 class="h2 article-title">Portfolio</h2>
</header>
<section class="projects">
    <ul class="filter-list">
        <li class="filter-item list-style-none">
            <button class="active" data-filter-btn>All</button>
        </li>
        <li class="filter-item list-style-none">
            <button data-filter-btn>API</button>
        </li>
        <li class="filter-item list-style-none">
            <button data-filter-btn>Web</button>
        </li>
    </ul>
    <div class="filter-select-box">
        <button class="filter-select" data-select>
            <div class="select-value" data-selecct-value>Select category</div>
            <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
            </div>
        </button>
        <ul class="select-list">
            <li class="select-item list-style-none">
                <button data-select-item>All</button>
            </li>
            <li class="select-item list-style-none">
                <button data-select-item>API</button>
            </li>
            <li class="select-item list-style-none">
                <button data-select-item>Web</button>
            </li>
        </ul>
    </div>
    <ul class="project-list">
        @foreach ($projects as $project)
            <li class="project-item  active" data-filter-item data-category="{{ $project->category }}">
                <a href="https://{{ $project->demo_url }}" target="_blank">
                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                        <img src="{{ asset("/storage" . str_replace('public', '', $project->thumbnail_image)) }}"
                            alt="{{ $project->name . " Image" }}" loading="lazy">
                    </figure>
                    <h3 class="project-title">{{ $project->name }}</h3>
                    <p class="project-category" style="color: rgb(241, 186, 35);">{{ $project->tech_stack }}</p>
                    <p class="project-category">{{ $project->category }}</p>
                </a>
            </li>
        @endforeach
    </ul>
</section>
