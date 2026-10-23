<?php

$hero = site_url('images/youtube-master-ai-16x9.png');
$playlist = 'https://www.youtube.com/watch?v=UjeNA_JtXME&list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p&index=1';
$book = site_url('book');
?>
<main id="main" class="page home" tabindex="-1">
<div class="hero">
<img src="<?= site_h($hero) ?>" width="420" height="236" alt="Becoming a master programmer using AI — course promotional artwork" loading="lazy">
</div>
<div class="banner">
<h1>Python for Everybody (AI)</h1>
<p>Python for Everybody with guidance on learning alongside AI tools</p>
</div>
<p class="notice"><strong>Under construction.</strong> Content and features on this site are still being prepared.</p>
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
<?php } else { ?>
<p>
Free
<a href="<?= site_h(site_url('lessons')) ?>">lessons</a>,
<a href="<?= site_h($playlist) ?>" target="_blank" rel="noopener noreferrer">lecture videos</a>,
<a href="<?= site_h($book) ?>">book</a>,
and autograded assignments to learn Python — with guidance on using AI tools responsibly as you study.
</p>
<p>
<a href="<?= site_h(site_url('login')) ?>">Log in</a>
for a grade book, discussions, badges, and full access to autograders. You can also take the course on
<a href="https://www.coursera.org/specializations/python" target="_blank" rel="noopener noreferrer">Coursera</a>,
<a href="https://www.edx.org/bio/charles-severance" target="_blank" rel="noopener noreferrer">edX</a>,
and other platforms listed on the main PY4E site.
</p>
<?php } ?>
<div class="card-grid">
<div class="card"><h2><a href="<?= site_h(site_url('lessons')) ?>">Lessons</a></h2><p>Lectures, slides, discussions, quizzes, and autograders in module order.</p></div>
<div class="card"><h2><a href="<?= site_h(site_url('assignments')) ?>">Assignments</a></h2><p>See scores and completion status across graded activities.</p></div>
<div class="card"><h2><a href="<?= site_h($book) ?>">Book</a></h2><p>Python for Everybody textbook (CC BY).</p></div>
</div>
<p>We take your privacy seriously on this site; see our <a href="<?= site_h(site_url('privacy')) ?>">Privacy Policy</a>.</p>
<p>This site runs on <a href="https://www.tsugi.org" target="_blank" rel="noopener noreferrer">Tsugi</a>. Course content and autograders are open source on <a href="https://github.com/csev/py4e" target="_blank" rel="noopener noreferrer">GitHub</a>.</p>
</main>
