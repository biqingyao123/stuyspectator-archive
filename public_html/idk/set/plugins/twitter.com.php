<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2012 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
******************************************************************/

function preRequest() {
	global $toSet,$URL;
	if ($URL['host'] != 'mobile.twitter.com') {
		$URL['host'] = 'mobile.twitter.com';
		$URL['href'] = preg_replace('#^[a-z]+://[^/]+#i', 'http://mobile.twitter.com', $URL['href']);
	}
}
