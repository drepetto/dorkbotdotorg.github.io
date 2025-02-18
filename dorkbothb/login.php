      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

    <!-- Meta Data -->
    <meta name="generator" content="Simple PHP Blog" />
    <link rel="alternate" type="application/rss+xml" title="Get RSS 2.0 Feed" href="rss.php" />
    <link rel="alternate" type="application/rdf+xml" title="Get RDF 1.0 Feed" href="rdf.php" />
    <link rel="alternate" type="application/atom+xml" title="Get Atom 0.3 Feed" href="atom.php" />

    <!-- Meta Data -->
    <!-- http://dublincore.org/documents/dces/ -->
    <meta name="dc.title"       content="Dorkbot HB" />
    <meta name="author"         content="Milena Reichel" />
    <meta name="dc.creator"     content="Milena Reichel" />
    <meta name="dc.subject"     content="" />
    <meta name="keywords"       content="" />
    <meta name="dc.description" content="" />
    <meta name="description"    content="" />
    <meta name="dc.type"        content="weblog" />
    <meta name="dc.type"        content="blog" />
    <meta name="resource-type"  content="document" />
    <meta name="dc.format"      scheme="IMT" content="text/html" />
    <meta name="dc.source"      scheme="URI" content="http://dorkbot.org/dorkbothb/index.php" />
    <meta name="dc.language"    scheme="RFC1766" content="Array" />
    <meta name="dc.coverage"    content="global" />
    <meta name="distribution"   content="GLOBAL" />
    <meta name="dc.rights"      content="" />
    <meta name="copyright"      content="" />

    <!-- Robots -->
    <meta name="robots" content="ALL,INDEX,FOLLOW,ARCHIVE" />
    <meta name="revisit-after" content="7 days" />

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="interface/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="themes/default/style.css" />

    
<script type="text/javascript">
	<!--
	// BLOG SETTINGS
	var blogSettings = Array();
	blogSettings['theme'] = 'default';
	blogSettings['img_path'] = 'themes/default/images/';
	blogSettings['content_width'] = 550;
	blogSettings['menu_width'] = 200;
	-->
</script>
    <script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>

      <style type="text/css">
  body {
    background-color: #E6BDD4;
    color: #854F8E;
  }

  hr  
  {
    color: #D9D9D9;
    background-color: #D9D9D9;
  }

  #header_image {
    border-color: #5C4050;
  }

  #header {
    border-color: #5C4050;
    color: #FFFFFF;
    background-color: #1C0C15;
  }

  #footer {
    color: #666666;
    background: #EEEEEE;
    border-top: 1px solid #5C4050;
  }

  h1, h2, h3, h4, h5, h6 {
    color: #4C2154;
  }

  #maincontent .blog_subject {
    color: #4C2154;
  }

  #maincontent .blog_date {
    color: #999999;
  }

  #maincontent .blog_categories {
    color: #999999;
  }

  #maincontent .blog_body_solid  {
    color: #ff0000;
    background-color: #E6BDD4;
    border-color: #ff0000;
  }
  
  #sidebar .menu_body {
    border-color: #D9D9D9;
  }

  a:link, a:visited {
    color: #71224F;
  }

  a:hover {
    color: #511A39;
  }

  a:active {
    color: #903368;
  }
  
  pre {
    width: 512px;
    border-color: #D9D9D9;
  }
</style>
  
  <script type="text/javascript">
  <!--
  function validate(theform) {
    if (theform.user.value=="" || theform.pass.value=="") {
      alert("Please complete the Username and Password fields.");
      return false;
    } else {
      return true;
    }
  }
  //-->
  </script>
  <title>Dorkbot HB - Login</title>
</head>
      <body>
      <br />
      <table border="0" width="750" cellspacing="0" cellpadding="0" align="center" style="border: 1px solid #5C4050;">
        <tr align="left" valign="top">
          <td width="750" colspan="2" bgcolor="#1C0C15">
            <div id="header_image"><img src="themes/default/images/header750x100.jpg" alt="" border="0" /></div>

            <div id="header">Dorkbot HB</div>
            <div id="pagebody">
              <table border="0" width="750" cellspacing="0" cellpadding="0" align="left">
                <tr valign="top">
                                    <td width="550" bgcolor="#FFFFFF">
                    <div id="maincontent">
                      
<div class="blog_subject">Login<a name="">&nbsp;</a></div>
    
    
    Please enter your Username and Password below<p />
    
    <hr />
    
    <form action="login_cgi.php" method="post" onsubmit="return validate(this)">
      <label for="user">Username:</label><br />
      <input type="text" name="user" size="40"><p />
      
      <label for="pass">Password</label><br />
      <input type="password" name="pass" size="40"><p />
      
      <input type="submit" name="submit" value="&nbsp;Submit&nbsp;" />
    </form>
    
    
<hr />
                    </div>
                  </td>
                                    <td width="200" bgcolor="#F2F2F2" style="border-left: 1px solid #D9D9D9;">
                    <div id="sidebar">
                      
<!-- SIDEBAR MENU BEGIN -->

<!-- LINKS -->
<div class="menu_title">Links</div>
<div class="menu_body">
<a href="index.php">Home</a><br /><a href="contact.php">Contact Me</a><br /><a href="stats.php">Stats</a><br /><a href="static.php?page=static080119-165359">Imprint</a><br /><a href="static.php?page=static080203-084859">What is a dorkbot?</a><br /><hr /><a href="login.php">Login</a>
</div><br />

<!-- CALENDAR -->
<div class="menu_title"><a id="linkSidebarCalendar" href="javascript:toggleBlock('SidebarCalendar');"><img src="themes/default/images/minus.gif" name="twisty" alt="" /> Calendar</a></div>
<div id="toggleSidebarCalendar" class="menu_body">

			<table border="0" cellpadding="0" cellspacing="0" align="center" class="calendar">
			<tr>
			<td align="center"><a href="index.php?y=10&amp;m=11">&laquo;</a></td>
			<td align="center" colspan="5"><b>December 2010</b></td>
			<td align="center"></td>
			</tr>
			<tr><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td align="center">1</td><td align="center">2</td><td align="center">3</td><td align="center">4</td></tr><tr><td align="center">5</td><td align="center">6</td><td align="center">7</td><td align="center">8</td><td align="center">9</td><td align="center">10</td><td align="center">11</td></tr><tr><td align="center">12</td><td align="center">13</td><td align="center"><u>14</u></td><td align="center">15</td><td align="center">16</td><td align="center">17</td><td align="center">18</td></tr><tr><td align="center">19</td><td align="center">20</td><td align="center">21</td><td align="center">22</td><td align="center">23</td><td align="center">24</td><td align="center">25</td></tr><tr><td align="center">26</td><td align="center">27</td><td align="center">28</td><td align="center">29</td><td align="center">30</td><td align="center">31</td><td></td></tr><tr><td colspan="7" align="center"><a href="index.php?y=10&amp;m=12&amp;d=14">12/14/2010</a></td></tr></table>
</div><br />

<!-- RANDOM ENTRY -->
<div class="menu_title"><a id="linkSidebarRandomEntry" href="javascript:toggleBlock('SidebarRandomEntry');"><img src="themes/default/images/minus.gif" name="twisty" alt="" /> Random Entry</a></div>
<div id="toggleSidebarRandomEntry" class="menu_body">
<a href="index.php?entry=entry080519-100704">Dorkbot meeting - Marble Control</a><br /><a href="index.php?entry=entry080203-090652">First dorkbot hb meeting</a><br /><a href="index.php?entry=entry080306-120415">That was the first Dorkbothb</a><br />
</div><br />

<!-- ARCHIVE TREE -->
<div class="menu_title"><a id="linkSidebarArchives" href="javascript:toggleBlock('SidebarArchives');"><img src="themes/default/images/minus.gif" name="twisty" alt="" /> Archives</a></div>
<div id="toggleSidebarArchives" class="menu_body">
<a href="archives.php">View Archives</a><br />
<div id="archive_tree_menu"><ul><li>
2008
<ul>
<li>
<a href="index.php?m=05&amp;y=08">May</a>
</li>
<li>
<a href="index.php?m=03&amp;y=08">March</a>
</li>
<li>
<a href="index.php?m=02&amp;y=08">February</a>
</li>

</ul>
</li>
</ul></div>
</div><br />

<!-- SEARCH -->
<div class="menu_title"><a id="linkSidebarSearch" href="javascript:toggleBlock('SidebarSearch');"><img src="themes/default/images/minus.gif" name="twisty" alt="" /> Search</a></div>
<div id="toggleSidebarSearch" class="menu_body">
<form method="get" action="search.php"><b>Search</b><input type="text" size="16" name="q" />&nbsp;<input type="submit" value="Go" /></form>
</div><br />

<!-- COUNTER -->
<div class="menu_title"><a id="linkSidebarCounter" href="javascript:toggleBlock('SidebarCounter');"><img src="themes/default/images/minus.gif" name="twisty" alt="" /> Counter Totals</a></div>
<div id="toggleSidebarCounter" class="menu_body">
Total: <b>10,983</b><br />Today: <b>19</b><br />Yesterday: <b>30</b><br />
</div><br />

<!-- RECENT ENTRIES -->
<div class="menu_title"><a id="linkSidebarRecentEntries" href="javascript:toggleBlock('SidebarRecentEntries');"><img src="themes/default/images/minus.gif" name="twisty" alt="" /> Most Recent Entries</a></div>
<div id="toggleSidebarRecentEntries" class="menu_body">
<a href="http://dorkbot.org/dorkbothb/index.php?entry=entry080519-100704">Dorkbot meeting - Marble Control</a><br /><a href="http://dorkbot.org/dorkbothb/index.php?entry=entry080306-120415">That was the first Dorkbothb</a><br /><a href="http://dorkbot.org/dorkbothb/index.php?entry=entry080203-090652">First dorkbot hb meeting</a><br />
</div><br />
<p /><div align="center"><a href="http://sourceforge.net/projects/sphpblog/"><img style="margin-bottom: 5px;" src="interface/button_sphpblog.png" alt="Powered by Simple PHP Blog" title="Powered by Simple PHP Blog" border="0" /></a> <a href="rss.php"><img style="margin-bottom: 5px;" src="interface/button_rss20.png" alt="Get RSS 2.0 Feed" title="Get RSS 2.0 Feed" border="0" /></a><br /><a href="http://php.net/"><img style="margin-bottom: 5px;" src="interface/button_php.png" alt="Powered by PHP 5.2.14" title="Powered by PHP 5.2.14" border="0" /></a> <a href="atom.php"><img style="margin-bottom: 5px;" src="interface/button_atom03.png" alt="Get Atom 0.3 Feed" title="Get Atom 0.3 Feed" border="0" /></a><br /><img style="margin-bottom: 5px;" src="interface/button_txt.png" alt="Powered by Plain text files" title="Powered by Plain text files" border="0" /> <a href="rdf.php"><img style="margin-bottom: 5px;" src="interface/button_rdf10.png" alt="Get RDF 1.0 Feed" title="Get RDF 1.0 Feed" border="0" /></a><br /></div>                    </div>
                  </td>
                                  </tr>
                <tr align="left" valign="top">
                  <td width="750" bgcolor="#EEEEEE" colspan="2">
                    <div id="footer"> - Page Generated in 0.0347 seconds&nbsp;|&nbsp;Site Views: 10983</div>
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>
      </table>
      <br />
    </body>
    </html>
