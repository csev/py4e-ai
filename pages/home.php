<?php

$book = site_url('book');
$register = 'https://python.dr-chuck.com/?utm=py4e-ai';
$podcast = 'https://ai.dr-chuck.com/';
?>
<main id="main" class="page home" tabindex="-1">
<div class="hero">
<div
  class="hero-swap"
  tabindex="0"
  role="button"
  aria-label="Switch the course image"
  data-hero-swap>
<img src="<?= site_h(site_url('images/python-with-ai-code.jpg')) ?>" width="1024" height="576" alt="Python with AI code artwork">
<img class="hero-fade" src="<?= site_h(site_url('images/python-without-ai.jpg')) ?>" alt="Python without AI artwork">
<img class="hero-fade" src="<?= site_h(site_url('images/python-with-ai.jpg')) ?>" alt="Python with AI artwork">
<img class="hero-fade" src="<?= site_h(site_url('images/python-master-programmer.jpg')) ?>" alt="Becoming a Master Programmer using AI artwork">
</div>
<p class="hero-hint">Click the image to switch it.</p>
</div>
<div class="banner">
<h1><a href="<?= site_h($register) ?>" target="_blank" rel="noopener noreferrer">Python for Everybody (AI)</a></h1>
<p>Python for Everybody with guidance on learning alongside AI tools</p>
</div>
<div class="home-register">
<p>
<a href="<?= site_h($register) ?>" target="_blank" rel="noopener noreferrer">Register now for the online course starting January 1, 2027.</a>
</p>
</div>
<div class="home-placeholder">
<p>
<strong>Under Construction.</strong> This site has placeholder materials which will be replaced as the new course content is developed for the course launch on January 1, 2027.
</p>
</div>
<p>
While you wait, you can watch Dr. Chuck build the course materials and software used for the course at his
<a href="<?= site_h($podcast) ?>" target="_blank" rel="noopener noreferrer">“AI Coding with Dr. Chuck”</a>
podcast.
</p>
<div class="callout">
<p><strong>Learning Python with AI</strong> — This site is Python for Everybody. AI assistants can help you read code, debug, and study — but the goal is for <em>you</em> to understand programming. Use AI to explain, not to skip the work of thinking and practicing.</p>
</div>
<?php if ( isset($_SESSION['id']) ) { ?>
<p>
Welcome. You are logged in with access to lessons, autograders, assignments, and badges.
</p>
<ul>
<li>Work through the <a href="<?= site_h(site_url('lessons')) ?>">Lessons</a>
 — videos, readings, and autograders in module order.</li>
<li>Track progress on the <a href="<?= site_h(site_url('assignments')) ?>">Assignments</a>
 page and earn <a href="<?= site_h(site_url('badges')) ?>">Badges</a>.</li>
<li>Read the free <a href="<?= site_h($book) ?>">textbook</a>.</li>
</ul>
<?php } ?>
<div class="card-grid">
<div class="card"><h2><a href="<?= site_h(site_url('lessons')) ?>">Lessons</a></h2><p>Lectures, slides, discussions, quizzes, and autograders in module order.</p></div>
<div class="card"><h2><a href="<?= site_h(site_url('assignments')) ?>">Assignments</a></h2><p>See scores and completion status across graded activities.</p></div>
<div class="card"><h2><a href="<?= site_h($book) ?>">Book</a></h2><p>Python for Everybody textbook (CC BY).</p></div>
</div>
<p>We take your privacy seriously on this site; see our <a href="<?= site_h(site_url('privacy')) ?>">Privacy Policy</a>.</p>
<p>This site runs on <a href="https://www.tsugi.org" target="_blank" rel="noopener noreferrer">Tsugi</a>. Course content and autograders are open source on <a href="https://github.com/csev/py4e" target="_blank" rel="noopener noreferrer">GitHub</a>.</p>
<script src="<?= site_h(site_url('js/hero.js')) ?>"></script>
</main>
