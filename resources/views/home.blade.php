<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f8fb">
    <meta name="description" content="Portfolio of Julian Duwi Prasetya, Information Technology graduate focused on data analytics, business intelligence, web development, and UI/UX design.">
    <title>Julian Duwi Prasetya | Data, Web &amp; Design</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script src="{{ asset('js/portfolio.js') }}" defer></script>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>
    <header class="site-header">
        <nav class="nav-shell" aria-label="Main navigation">
            <a class="brand" href="#home" aria-label="Julian Duwi Prasetya home"><span class="brand-mark">JD</span><span>Julian Duwi Prasetya</span></a>
            <button class="menu-toggle" type="button" aria-label="Open navigation menu" aria-expanded="false" aria-controls="primary-navigation"><span></span><span></span></button>
            <div class="nav-links" id="primary-navigation">
                <a href="#home">Home</a><a href="#about">About</a><a href="#skills">Skills</a><a href="#experience">Experience</a><a href="#projects">Projects</a><a href="#organization">Organization</a><a href="#achievements">Achievements</a><a href="#education">Education</a><a href="#activities">Other Activities</a><a href="#contact">Contact</a>
            </div>
        </nav>
    </header>

    <main id="main">
        <section class="hero page-width" id="home" aria-labelledby="hero-title">
            <div class="hero-copy reveal">
                <p class="eyebrow"><span class="status-dot"></span> OPEN TO OPPORTUNITIES</p>
                <h1 id="hero-title">Julian Duwi<br><span>Prasetya.</span></h1>
                <p class="hero-roles">Business Intelligence Analyst <i></i> Data Engineer <i></i> Web Developer <i></i> Full Stack Developer <i></i> UI/UX Designer</p>
                <p class="hero-description">Information Technology graduate with a practical interest in turning data into useful insight and building web experiences around real user needs.</p>
                <div class="hero-actions"><a class="button button-primary" href="#projects">View My Projects <span aria-hidden="true">↗</span></a><a class="button button-quiet" href="#contact">Contact Me <span aria-hidden="true">→</span></a></div>
                <div class="hero-footnote"><span>BASED IN TANGERANG, BANTEN, INDONESIA</span><span>DATA · WEB · PRODUCT DESIGN</span></div>
            </div>
            <div class="hero-visual reveal" aria-label="Profile photo placeholder">
                <div class="portrait-frame">
                    <div class="portrait-placeholder">
                        @if (file_exists(public_path('images/profile.jpeg')))
                            <img class="profile-image" src="{{ asset('images/profile.jpeg') }}" alt="Portrait of Julian Duwi Prasetya">
                        @else
                            <span class="portrait-cross portrait-cross-one"></span><span class="portrait-cross portrait-cross-two"></span><span class="portrait-initials">JD</span><span class="portrait-caption">PROFILE PHOTO<br>PLACEHOLDER</span>
                        @endif
                    </div>
                    <span class="portrait-index">01 / PROFILE</span>
                </div>
                <div class="hero-note"><span class="note-line"></span><p>Curious by nature.<br><strong>Focused on useful work.</strong></p></div>
            </div>
            <a class="scroll-cue" href="#about" aria-label="Scroll to About">SCROLL TO EXPLORE <span>↓</span></a>
        </section>

        <section class="section page-width" id="about" aria-labelledby="about-title">
            <div class="section-heading reveal"><p class="section-kicker">01 / ABOUT</p><h2 id="about-title">A little about<br><em>how I work.</em></h2></div>
            <div class="about-panel reveal">
                <div class="about-lead"><p class="large-copy">I’m an Information Technology graduate from Universitas 'Aisyiyah Yogyakarta, graduating with a <strong>3.83 / 4.00 GPA</strong> and <strong>Cum Laude</strong> honors.</p><p>I enjoy connecting analytical thinking with thoughtful implementation, whether that means preparing a dataset, exploring a model, or shaping an interface that feels clear to use.</p></div>
                <div class="about-focus"><p class="mini-label">AREAS I’M EXPLORING</p><div class="focus-list"><span>Business Intelligence</span><span>Data Analytics &amp; Machine Learning</span><span>Full Stack Web Development</span><span>UI/UX Design</span><span>User-centered systems</span></div><div class="about-stamp"><span>IT</span><small>GRADUATE<br>2026</small></div></div>
            </div>
        </section>

        <section class="section page-width" id="skills" aria-labelledby="skills-title">
            <div class="section-heading section-heading-row reveal"><div><p class="section-kicker">02 / TOOLKIT</p><h2 id="skills-title">Skills &amp; tools</h2></div><p class="section-intro">A practical toolkit across data, engineering, and design. No inflated scores, just areas I’ve worked with.</p></div>
            <div class="skills-grid">
                @php
                    $skillGroups = [
                        ['01', 'Data & Analytics', ['Python', 'SQL', 'Data Cleaning', 'Data Preprocessing', 'Exploratory Data Analysis', 'Data Visualization', 'Business Intelligence']],
                        ['02', 'Machine Learning', ['Scikit-learn', 'Classification', 'Clustering', 'Model Evaluation']],
                        ['03', 'Web Development', ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Flask', 'WordPress']],
                        ['04', 'Database', ['MySQL']],
                        ['05', 'UI/UX Design', ['Figma', 'Wireframing', 'Prototyping', 'User Interface Design', 'User Experience Design']],
                        ['06', 'Tools & Technologies', ['Git', 'GitHub', 'OpenCV', 'TensorFlow / Keras', 'Microsoft Excel', 'Power BI']],
                    ];
                @endphp
                @foreach ($skillGroups as [$number, $title, $skills])
                    <article class="skill-card reveal"><div class="skill-card-top"><span>{{ $number }}</span><span class="card-arrow" aria-hidden="true">↗</span></div><h3>{{ $title }}</h3><div class="tag-list">@foreach ($skills as $skill)<span class="tag">{{ $skill }}</span>@endforeach</div></article>
                @endforeach
            </div>
        </section>

        <section class="section page-width" id="experience" aria-labelledby="experience-title">
            <div class="section-heading section-heading-row reveal"><div><p class="section-kicker">03 / EXPERIENCE</p><h2 id="experience-title">Where I contributed</h2></div><p class="section-intro">Hands-on project work and team support, with room to add verified dates and locations.</p></div>
            <div class="experience-list">
                <article class="experience-item reveal"><div class="experience-marker">01</div><div class="experience-main"><div class="experience-meta"><span>INTERNSHIP</span><span>DATE / DURATION: <b>October 9, 2024 - February 9, 2025</b></span><span>LOCATION: <b>Yogyakarta City, Special Region of Yogyakarta</b></span></div><h3>IT SUPPORT, UI/UX Designer &amp; Full Stack Developer</h3><p class="organization-name">PT SaranaInsan MudaSelaras</p><ul><li>Developing a CCTV monitoring website for the Special Region of Yogyakarta.</li><li>Creating a landing page for Cleon Coin Wi-Fi.</li><li>Building a streaming test website.</li><li>Developing a web-based facial recognition attendance system.</li><li>Creating a landing page for Cleon Coin Wi-Fi.</li><li>Creating a weather widget for the Special Region of Yogyakarta for use in local YouTube streams.</li><li>Redesigning the website for JDN (Jaringan Data Nasional), a subsidiary of SIMS.</li><li>Conducting routine WiFi network checks, performing device and network maintenance, and installing WiFi at new locations.</li><li>Introducing the work environment and operational activities of the company to vocational high school students visiting the office for an industry visit.</li></ul></div><span class="experience-mark" aria-hidden="true">↗</span></article>
                <article class="experience-item reveal"><div class="experience-marker">02</div><div class="experience-main"><div class="experience-meta"><span>PROJECT SUPPORT</span><span>DATE / DURATION: <b>September 2023 - September 2026</b></span><span>LOCATION: <b>Sleman, Special Region of Yogyakarta</b></span></div><h3>Accreditation Team</h3><p class="organization-name">Information Technology Program, UNISA Yogyakarta</p><ul><li>Organized and prepared program accreditation documents.</li><li>Helped structure records so they were easier to navigate and trace.</li><li>Coordinated with the team during accreditation preparation.</li></ul></div><span class="experience-mark" aria-hidden="true">↗</span></article>
            </div>
        </section>

        <section class="section projects-section" id="projects" aria-labelledby="projects-title">
            <div class="page-width">
                <div class="section-heading section-heading-row reveal"><div><p class="section-kicker">04 / SELECTED WORK</p><h2 id="projects-title">Projects with purpose.</h2></div><p class="section-intro">A collection spanning analytics, applications, and user experience. Select a project for more context.</p></div>
                <div class="project-toolbar reveal"><div class="filter-list" role="group" aria-label="Filter projects"><button class="filter-button is-active" type="button" data-filter="all" aria-pressed="true">All <span>13</span></button><button class="filter-button" type="button" data-filter="data-science" aria-pressed="false">Data Science</button><button class="filter-button" type="button" data-filter="web-development" aria-pressed="false">Web Development</button><button class="filter-button" type="button" data-filter="ui-ux" aria-pressed="false">UI/UX Design</button><button class="filter-button" type="button" data-filter="game-development" aria-pressed="false">Game Development</button></div><span class="project-count"><b id="visible-count">13</b> PROJECTS</span></div>
                @php
                    $projects = [
                        ['LUNA – PMB FAQ Chatbot', 'A new-student admissions FAQ chatbot built to understand user questions and return helpful answers as part of a research project.', 'Data Science', 'data-science', 'NLP · LSTM', 'art-data-science', 'project-luna.png'],
                        ['LIFACE – Face Recognition Attendance System', 'A face-recognition attendance system for PT SaranaInsan MudaSelaras, with contributions to UI/UX and full stack development.', 'Web Development', 'web-development', 'UI/UX · Full Stack', 'art-web-development', 'project-liface.png'],
                        ['Netflix Customer Churn Decision Support System', 'A decision-support system for customer churn analysis, covering dataset preparation, preprocessing, modeling, programming, and interface design.', 'Data Science', 'data-science', 'Data Analysis · ML · UI/UX', 'art-data-science', 'project-netflix customer churn.png'],
                        ['Hypertension Risk Prediction System', 'A machine-learning risk prediction project presented through a Flask-based dashboard.', 'Data Science', 'data-science', 'Machine Learning · Flask', 'art-data-science', 'project-hypertensi.png'],
                        ['Stroke Prediction Using Random Forest and ADASYN', 'A stroke risk classification project using Random Forest and ADASYN to address class imbalance.', 'Data Science', 'data-science', 'Random Forest · ADASYN', 'art-data-science', 'project-stroke.png'],
                        ['SEENT', 'A C++ game about a nurse searching for patients in a hospital environment, focused on game logic and interactive search mechanics.', 'Game Development', 'game-development', 'C++ · Game logic · Patient search', 'art-game-development', 'project-seent.png'],
                        ['MeJo (Medical Journey)', 'MeJo is a website platform designed for international travelers who want to visit Indonesia while accessing medical treatment or care. It brings tourism and healthcare services together in one platform.', 'UI/UX Design & Web Development', 'ui-ux web-development', 'UI/UX · Website development · Medical tourism', 'art-ui-ux', 'project-mejo.png'],
                        ['Timor-Leste Midwifery Association Website', 'A WordPress website for the Timor-Leste Midwifery Association, serving as an information hub for the organization, its members, and its profile.', 'Web Development', 'web-development', 'WordPress · Content management · Web design', 'art-web-development', 'project-midwifery association website.png'],
                        ['Medical Record System', 'A Laravel medical record system with CRUD functionality for managing records.', 'Web Development', 'web-development', 'Laravel · MySQL', 'art-web-development', 'project-medical record system.png'],
                        ['Medical Record Desktop Application', 'UI/UX design and Java GUI implementation for a desktop medical record application.', 'Web Development', 'web-development', 'Java GUI · UI Design', 'art-web-development', 'project-medical record desktop application.png'],
                        ['Vehicle Counting System', 'A computer vision project that counts vehicles using OpenCV.', 'Data Science', 'data-science', 'Computer Vision · OpenCV', 'art-data-science', 'project-vehicle counting system.png'],
                        ['E-Library UNISA Yogyakarta', 'Figma-based UI/UX design for the Universitas Aisyiyah Yogyakarta library website.', 'UI/UX Design', 'ui-ux', 'Figma · UI/UX', 'art-ui-ux', 'project-e library.png'],
                        ['Health Tourism Website', 'Website interface design focused on information structure and user experience for health tourism.', 'UI/UX Design', 'ui-ux', 'UI/UX · Information Design', 'art-ui-ux', 'project-health tourism website.png'],
                    ];
                @endphp
                <div class="projects-grid" id="projects-grid">
                    @foreach ($projects as $index => [$title, $description, $category, $filter, $stack, $artTheme, $image])
                        <article class="project-card reveal" data-category="{{ $filter }}">
                            <button class="project-open" type="button" data-project-title="{{ $title }}" data-project-description="{{ $description }}" data-project-category="{{ $category }}" data-project-stack="{{ $stack }}" aria-label="View details for {{ $title }}">
                                <span class="project-art {{ $artTheme }}" aria-hidden="true"><img class="project-image" src="{{ asset('images/' . rawurlencode($image)) }}" alt="" loading="lazy" decoding="async"><span class="art-index">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span></span>
                                <span class="project-card-body"><span class="project-category">{{ $category }} <span>↗</span></span><strong>{{ $title }}</strong><span class="project-summary">{{ $description }}</span><span class="project-stack">{{ $stack }}</span><span class="project-details-link">View Details <span>→</span></span></span>
                            </button>
                        </article>
                    @endforeach
                </div>
                <p class="project-note reveal">Project links and supporting media can be added when verified materials are available.</p>
            </div>
        </section>

        <section class="section page-width" id="organization" aria-labelledby="organization-title">
            <div class="section-heading section-heading-row reveal"><div><p class="section-kicker">05 / LEADERSHIP</p><h2 id="organization-title">Organization</h2></div><p class="section-intro">Growing through collaboration, coordination, and shared responsibility.</p></div>
            <div class="organization-grid">
                <article class="organization-card reveal"><span class="org-number">01 / TA 2022/2023</span><div class="org-emblem">IT<span>ech</span></div><div><h3>Member of the Organization Division</h3><p class="organization-name">ITech UNISA Yogyakarta</p></div><ul><li>Supported organizational activities and administrative coordination.</li><li>Contributed to the preparation and execution of student programs.</li><li>Collaborated with team members to support shared objectives.</li></ul></article>
                <article class="organization-card organization-card-dark reveal"><span class="org-number">02 / TA 2023/2024</span><div class="org-emblem">IT<span>ech</span></div><div><h3>Head of the Organization Division</h3><p class="organization-name">ITech UNISA Yogyakarta</p></div><ul><li>Led the division in planning and executing organizational programs.</li><li>Coordinated team members and monitored task progress.</li><li>Supported internal coordination and the development of activities.</li></ul></article>
            </div>
        </section>

        <section class="section page-width" id="achievements" aria-labelledby="achievements-title">
            <div class="section-heading section-heading-row reveal"><div><p class="section-kicker">06 / RECOGNITION</p><h2 id="achievements-title">Achievements &amp; credentials</h2></div><p class="section-intro">Recognition for skills and applied work. Original certificate and award images can be placed in the framed areas.</p></div>
            <div class="achievement-grid">
                <article class="achievement-card reveal"><div class="achievement-visual cert-visual"><span class="visual-corner">CERTIFICATION</span><span class="seal">B</span><span class="visual-bottom">BNSP<br>COMPETENCY</span></div><div class="achievement-copy"><p class="section-kicker">PROFESSIONAL CERTIFICATION</p><h3>Digital Business Intelligence Analytics</h3><p>Professional competency certification demonstrating knowledge and skills in Business Intelligence Analytics.</p></div></article>
                <article class="achievement-card reveal"><div class="achievement-visual medal-visual"><span class="visual-corner">AST PTMA</span><span class="medal-number">02</span><span class="visual-bottom">SILVER<br>MEDAL</span></div><div class="achievement-copy"><p class="section-kicker">SOFTWARE APPLICATION DEVELOPMENT</p><h3>Silver Medal – AST PTMA</h3><p>Awarded a silver medal for application development in the Medical Tourism theme.</p></div></article>
            </div>
        </section>

        <section class="section page-width" id="education" aria-labelledby="education-title">
            <div class="section-heading reveal"><p class="section-kicker">07 / EDUCATION</p><h2 id="education-title">The foundation</h2></div>
            <article class="education-panel reveal"><div class="education-mark">UNISA<span>YOGYAKARTA</span></div><div class="education-main"><p class="section-kicker">BACHELOR’S DEGREE · INFORMATION TECHNOLOGY</p><h3>Universitas 'Aisyiyah Yogyakarta</h3><p class="education-period">October 3, 2022 <span>—</span> June 30, 2026</p><p class="education-note">During my Bachelor’s degree in Information Technology at Universitas ‘Aisyiyah Yogyakarta, I developed practical skills across software development, data analytics, machine learning, and UI/UX design. Throughout my studies, I worked on various academic and team-based projects, including web applications, medical information systems, a library website, a Face Recognition attendance system, and LUNA, a university admission chatbot using Natural Language Processing (NLP) and LSTM. I also gained experience in data preprocessing, data analysis, customer pattern analysis using Hadoop Hive, and developing machine learning-based prediction systems. In addition to technical skills, I developed experience in teamwork, project development, problem-solving, and turning ideas into functional digital solutions.</p></div><div class="education-results"><div><strong>3.83</strong><span>GPA / 4.00</span></div><span class="honors-badge">Cum Laude</span></div></article>
        </section>

        <section class="section page-width" id="activities" aria-labelledby="activities-title">
            <div class="section-heading section-heading-row reveal"><div><p class="section-kicker">08 / COMMUNITY</p><h2 id="activities-title">Other activities</h2></div><p class="section-intro">Learning beyond the classroom through outreach, education, and practical technology.</p></div>
            <div class="activity-list">
                <article class="activity-item reveal"><span class="activity-year">2022</span><div class="activity-art activity-health" aria-hidden="true"><span>UKS</span></div><div><p class="section-kicker">PKM KMM DIKTI</p><h3>Revitalizing Trias UKS at SMP Muhammadiyah 2 Godean</h3><p>Community education focused on stunting and anemia awareness.</p></div></article>
                <article class="activity-item reveal"><span class="activity-year">2024</span><div class="activity-art activity-network" aria-hidden="true"><span>VLAN</span></div><div><p class="section-kicker">PKM EDUCATION</p><h3>VLAN Education at SMK Ar-Rahmah</h3><p>An educational activity introducing VLAN concepts to students.</p></div></article>
                <article class="activity-item reveal"><span class="activity-year">2025</span><div class="activity-art activity-garden" aria-hidden="true"><span>IoT</span></div><div><p class="section-kicker">PKM INTERNAL GRANT</p><h3>IoT Smart Garden Training</h3><p>Practical IoT training at SMK Muhammadiyah 2 Yogyakarta.</p></div></article>
                <article class="activity-item reveal"><span class="activity-year">2025</span><div class="activity-art activity-garden" aria-hidden="true"><span>MATRAS</span></div><div><p class="section-kicker">PKM PM DIKTI</p><h3>Marning (Matras Proning)</h3><p>Implementation of the 'Marning' Innovation at the Baiturrahman Integrated Health Post for the Elderly.</p></div></article>
            </div>
        </section>

        <section class="contact-section" id="contact" aria-labelledby="contact-title">
            <div class="page-width contact-inner reveal"><div class="contact-copy"><p class="section-kicker">09 / SAY HELLO</p><h2 id="contact-title">Let’s make<br><em>something useful.</em></h2><p>Feel free to reach out for professional opportunities, collaborations, or project discussions.</p></div><div class="contact-links"><a href="https://wa.me/6285839343478" target="_blank" rel="noreferrer"><span class="contact-symbol">↗</span><span><small>WHATSAPP</small><strong>+6285839343478</strong></span><span class="contact-arrow">↗</span></a><a href="mailto:your.email@example.com"><span class="contact-symbol">@</span><span><small>EMAIL</small><strong>juliaandwiprasetya@gmail.com</strong></span><span class="contact-arrow">↗</span></a><a href="https://www.linkedin.com/in/julian-duwi-prasetya/" target="_blank" rel="noreferrer"><span class="contact-symbol">in</span><span><small>LINKEDIN</small><strong>https://www.linkedin.com/in/julian-duwi-prasetya/</strong></span><span class="contact-arrow">↗</span></a><p class="contact-placeholder-note">Replace the placeholder contact details and links with verified information.</p></div></div>
        </section>
    </main>

    <footer class="site-footer"><div class="page-width footer-top"><a class="brand footer-brand" href="#home"><span class="brand-mark">JD</span><span>Julian Duwi Prasetya</span></a><p>Information Technology · Data · Web · Design</p><div class="footer-social"><a href="mailto:your.email@example.com" aria-label="Email">@</a><a href="https://www.linkedin.com/" target="_blank" rel="noreferrer" aria-label="LinkedIn">in</a></div></div><div class="page-width footer-bottom"><span>© {{ date('Y') }} Julian Duwi Prasetya</span><nav aria-label="Footer navigation"><a href="#about">About</a><a href="#projects">Projects</a><a href="#education">Education</a><a href="#contact">Contact</a></nav><a class="back-top" href="#home">BACK TO TOP ↑</a></div></footer>

    <dialog class="project-dialog" id="project-dialog" aria-labelledby="dialog-title"><div class="dialog-panel"><button class="dialog-close" type="button" aria-label="Close project details">×</button><p class="section-kicker" id="dialog-category">PROJECT DETAILS</p><h2 id="dialog-title"></h2><p id="dialog-description"></p><div class="dialog-stack"><span>TOOLS &amp; FOCUS</span><strong id="dialog-stack"></strong></div><p class="dialog-note">Project links and supporting materials have not been provided.</p></div></dialog>
</body>
</html>