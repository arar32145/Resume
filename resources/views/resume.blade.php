<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Professional resume of Jkie F. Lacague, Computer Science graduate and aspiring software developer.">
  <title>Jkie F. Lacague | Computer Science Graduate</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="page-shell">
    <aside class="sidebar">
      <div class="sidebar-top">
        <a class="monogram" href="#top" aria-label="Back to top">JL<span>.</span></a>
        <p class="availability"><span class="status-dot"></span> Open to opportunities</p>
      </div>

      <div class="sidebar-bottom">
        <p class="sidebar-label">Based in</p>
        <p class="sidebar-value">Victorias City,<br>Negros Occidental</p>
        <nav class="side-nav" aria-label="Page sections">
          <a href="#profile">Profile <span>01</span></a>
          <a href="#experience">Experience <span>02</span></a>
          <a href="#education">Education <span>03</span></a>
          <a href="#research">Research <span>04</span></a>
        </nav>
        <p class="copyright">Resume / 2026</p>
      </div>
    </aside>

    <main id="top" class="content">
      <header class="hero" id="profile">
        <div class="eyebrow"><span class="eyebrow-line"></span> Computer Science Graduate</div>
        <h1>Jkie F.<br><em>Lacague</em></h1>
        <div class="hero-footer">
          <p class="intro">A curious and detail-oriented graduate building practical solutions through code, data, and thoughtful problem solving.</p>
          <a class="text-link" href="#contact">Get in touch <span>↘</span></a>
        </div>
      </header>

      <section class="section about-grid" aria-labelledby="about-heading">
        <div class="section-index">01 / About</div>
        <div>
          <h2 id="about-heading">Turning ideas into<br><span>useful systems.</span></h2>
          <p class="body-copy">I am a Computer Science graduate with a foundation in software development, databases, and data operations. I enjoy learning how systems work and making them more reliable, efficient, and useful for real people.</p>
        </div>
      </section>

      <section class="section" id="experience" aria-labelledby="experience-heading">
        <div class="section-heading">
          <div class="section-index">02 / Experience</div>
          <h2 id="experience-heading">Experience</h2>
        </div>
        <article class="timeline-item">
          <div class="timeline-date">OJT / Internship</div>
          <div class="timeline-main">
            <div class="role-row"><h3>Data Entry Assistant</h3><span class="role-mark">↗</span></div>
            <p class="company">Victorias City Water District</p>
            <p class="body-copy">Supported day-to-day data entry operations by organizing information accurately, maintaining records, and helping keep administrative data consistent and accessible.</p>
            <div class="tag-list"><span>Data entry</span><span>Records management</span><span>Accuracy</span></div>
          </div>
        </article>
      </section>

      <section class="section split-section" id="education" aria-labelledby="education-heading">
        <div class="section-heading">
          <div class="section-index">03 / Education</div>
          <h2 id="education-heading">Education</h2>
        </div>
        <div class="education-block">
          <p class="education-year">Bachelor's degree</p>
          <h3>Bachelor of Science<br>in Computer Science</h3>
          <p class="company">Colegio de Sta. Ana de Victorias</p>
          <div class="education-rule"></div>
          <p class="education-note">A foundation in programming, software logic, data management, and the systems thinking needed to build dependable digital tools.</p>
        </div>
      </section>

      <section class="section skills-section" aria-labelledby="skills-heading">
        <div class="section-heading">
          <div class="section-index">04 / Toolkit</div>
          <h2 id="skills-heading">Technical toolkit</h2>
        </div>
        <div class="skills-grid">
          <div class="skill-card"><span class="skill-number">01</span><h3>PHP / Laravel</h3><p>Web applications & back-end logic</p></div>
          <div class="skill-card"><span class="skill-number">02</span><h3>Java & C++</h3><p>Object-oriented programming</p></div>
          <div class="skill-card"><span class="skill-number">03</span><h3>MySQL</h3><p>Relational data management</p></div>
          <div class="skill-card"><span class="skill-number">04</span><h3>MongoDB</h3><p>Flexible document databases</p></div>
          <div class="skill-card"><span class="skill-number">05</span><h3>Data Entry</h3><p>Accurate, organized operations</p></div>
          <div class="skill-card"><span class="skill-number">06</span><h3>Docker</h3><p>Containerized development & deployment</p></div>
          <div class="skill-card"><span class="skill-number">07</span><h3>API / AI Integration</h3><p>Connected services and intelligent features</p></div>
          <div class="skill-card"><span class="skill-number">08</span><h3>n8n Automation</h3><p>Workflow orchestration and connected processes</p></div>
        </div>
      </section>

      <section class="research-panel" id="research" aria-labelledby="research-heading">
        <div class="research-topline"><span>Published research</span><span>2026 / Selected work</span></div>
        <div class="research-content">
          <div class="section-index">05 / Research</div>
          <div>
            <h2 id="research-heading">AI Enhanced<br><em>Career Guidance System</em></h2>
            <p class="research-description">A research project exploring how artificial intelligence can help make career guidance more personalized, informed, and accessible to students.</p>
            <a class="outline-link" href="{{ route('publication') }}">View publication <span>↗</span></a>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div><span class="footer-mark">JL.</span><p>Ready to learn, contribute,<br>and build what matters.</p></div>
        <a class="email-link" id="contact" href="#top">Contact available on request <span>↗</span></a>
      </footer>
    </main>
  </div>
  <script src="/js/script.js"></script>
</body>
</html>
