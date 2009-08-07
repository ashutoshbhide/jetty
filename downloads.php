<?php  																														
    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Jetty - Downloads";
	$pageKeywords	= "Jetty, Servlets, Async, Web Server, Web Client, Eclipse RT, Eclipse Runtime, Eclipse Jetty downloads";
	$pageAuthor		= "jmcconnell";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>Downloads</h1>
		<div class="homeitem3col">	
			<h2>Jetty Distributions from Eclipse</h2>
            <p>
                The Jetty@eclipse project is unable to make full distributions of Jetty available for download from the Eclipse servers until all our dependencies (e.g., JSP) have been put through the Eclipse IP process.
            </p>            
            <p>
            	Jetty 7 JARs which have been through the Eclipse JAR conditioning process are available from the Jetty Eclipse OSGi update site:
            </p>
            <p>
            	<a href=" http://download.eclipse.org/jetty/stable-7/update/">http://download.eclipse.org/jetty/stable-7/update/</a>
            </p>
			<p>
				The unconditioned Jetty 7 JARs and Maven artifacts are also available from the central Maven repository:
			</p>
			<p>
				 <a href="http://repo2.maven.org/maven2/org/eclipse/jetty/">http://repo2.maven.org/maven2/org/eclipse/jetty/</a>
			</p>
		</div>
		<div class="homeitem3col">
			<h2>Jetty Distributions from codehaus</h2>
			<p>
				A Jetty distribution that combines the Jetty@eclipse JARs with additional components (JSP, JTA, etc.) is available via:
				<ul>
					<li><a href="http://dist.codehaus.org/jetty/">Jetty@codehaus project</a></li>
					<li><a href="http://repo2.maven.org/maven2/org/mortbay/jetty/jetty-distribution/">Maven central repository</a></li>
				</ul>
			</p>		  
			<p>
				This distribution may include artifacts that are not covered by the terms and conditions of the Eclipse Foundation Software User Agreement. For details, please read the NOTICES file included in the distribution.
			</p>		  
		</div>
		<h2>Frequently Asked Questions</h2>
		<div id="install">
		<p>
            <b>How do I unpack and install Jetty?</b>
		</p>
		<p>
            To get started quickly:
            <ol>
                <li><a href="http://dist.codehaus.org/jetty/">Download from codehaus</li>
                <li>Install <a href="http://docs.codehaus.org/display/JETTY/Installing+Jetty-6.1.x">Jetty 6</a> or <a href="http://wiki.eclipse.org/Jetty/Howto/Install_Jetty/Bundle">Jetty 7</a></li>
                <li>Run <a href="http://docs.codehaus.org/display/JETTY/Running+Jetty-6.1.x">Jetty 6</a> or <a href="http://wiki.eclipse.org/Jetty/Howto/Run_Jetty">Jetty 7</a></li>
            </ol>
		</p>
		</div>
		<div id="jetty6to7">
		<p>
            <b>I have been using previous versions of Jetty from the Jetty 6 line, is this a drop in replacement?</b>
		</p>
		<p>
			No, while Jetty 7 has very much the same architecture as Jetty 6, there are packaging changes and other minor tweaks between the versions.  Also, the Jetty 7 milestones are not as full featured as Jetty 6 in terms of 3rd party integrations being available by default with the distribution bundle.
		</p>
		</div>
		<div id="maven">
		<p>
		    <b>Are Maven2 artifacts still available?</b>
		</p>
		<p>
			Yes, Jetty still supports our Maven based users to the same degree as previously. The location of artifacts has changed though.
			<ul>
			  <li><a href="http://repo2.maven.org/maven2/org/eclipse/jetty">http://repo2.maven.org/maven2/org/eclipse/jetty</a></li>
			</ul>
		</p>
		</div>
		<br/>
		<br/>
	</div>	

	<div id="rightcolumn">
        $sidebar		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
