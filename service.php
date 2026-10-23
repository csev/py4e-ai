<?php

use \Tsugi\Core\LTIX;

if ( ! defined('COOKIE_SESSION') ) {
    define('COOKIE_SESSION', true);
}

if ( ! isset($CFG) ) {
    require_once __DIR__ . '/tsugi/config.php';
}
if ( session_id() == "" ) {
    $LAUNCH = LTIX::session_start();
}

require __DIR__ . '/includes/site.php';

$OUTPUT->header();
$OUTPUT->bodyStart();
$OUTPUT->topNav();
$OUTPUT->flashMessages();
?>
<h2>Terms of Service</h2>
<p>This is a highly reliable scalable and secure cloud-based service, but outages may occur. But since there are no fees for this service, there is no formal service level agreement for this service. If you are having issues with the performance or reliability of this site, please contact us.</p>
<p>This site cares greatly about protecting the anyone who uses these servers.  Please review our
<a href="<?= site_h(site_url('privacy')) ?>">Privacy Policy</a> for more details.
</p>
<p><strong>Notifications</strong> </p>
<p>In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur: We will notify you via email</p>
<pre><code>Python for Everybody (py4e.com)
c/o Learning Experiences (learnxp.com)
2190 Aurelius Rd. Unit 175
Holt MI 48842-9998
United States</code></pre>
<p>Last edited: 22-Nov-2020</p>
<?php
$foot = '
<p style="font-size: 0.875rem; color: #333; margin-top: 5em;">
PY4E with AI &mdash; Copyright Creative Commons Attribution 4.0 - Charles R. Severance
</p>';
$OUTPUT->setAppFooter($foot);
$OUTPUT->footer();
