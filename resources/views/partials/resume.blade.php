<header>
    <h2 class="h2 article-title">Resume</h2>
</header>
<section class="timeline">
    <div class="title-wrapper">
        <div class="icon-box">
            <ion-icon name="book-outline"></ion-icon>
        </div>
        <h3 class="h3">Education</h3>
    </div>
    <ol class="timeline-list">
        <li class="timeline-item">
            <h4 class="h4 timeline-item-title">Diponegoro University - Computer Engineering Bachelor's degree</h4>
            <span>2020 - 2024</span>
            <p class="timeline-text">
                Coding, Electric, Embeded, and Organization.
            </p>
        </li>
        <li class="timeline-item">
            <h4 class="h4 timeline-item-title">SMA N 1 Kramat Tegal - Mathematic and Science</h4>
            <span>2017 - 2020</span>
            <p class="timeline-text">
                Ratione voluptatem sequi nesciunt, facere quisquams facere menda ossimus, omnis voluptas assumenda
                est
                omnis..
            </p>
        </li>
    </ol>
</section>
<section class="timeline">
    <div class="title-wrapper">
        <div class="icon-box">
            <ion-icon name="book-outline"></ion-icon>
        </div>
        <h3 class="h3">Experience</h3>
    </div>
    <ol class="timeline-list">
        @foreach ($experiences as $experience)
            <li class="timeline-item">
                <h4 class="h4 timeline-item-title">{{ $experience->job_title }}</h4>
                <h4 class="h5 timeline-item-title" style="font-weight: 100;">{{ $experience->company_name }}</h4>
                <span>{{ $experience->start_date }} - {{ $experience->end_date }}</span>
                <p class="timeline-text">
                <ol style="color: rgb(190, 189, 189);">
                    @foreach ($experience->description as $index => $desc)
                        <li>{{ $loop->iteration . ". " . $desc }}</li>
                    @endforeach
                </ol>
                </p>
            </li>
        @endforeach
    </ol>
</section>
<section class="skill">
    <h3 class="h3 skills-title">My skills</h3>
    <ul class="skills-list content-card">
        <li class="skills-item">
            <div class="title-wrapper">
                <h5 class="h5">Javascript, PHP, Laravel, React, Bootstrap, Tailwind, MySQL, & Postman</h5>
            </div>
        </li>
    </ul>
</section>