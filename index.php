<!-- saved from url=(0028)http://news.ycombinator.com/ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="./files/news.css">
		<link rel="shortcut icon" href="http://ycombinator.com/favicon.ico">
		<script type="text/javascript">
function byId(id) {
		return document.getElementById(id);
		}

		function vote(node) {
		var v = node.id.split(/_/);   // {'up', '123'}
		var item = v[1];

		// hide arrows
		byId('up_'   + item).style.visibility = 'hidden';
		byId('down_' + item).style.visibility = 'hidden';

		// ping server
		var ping = new Image();
		ping.src = node.href;

		return false; // cancel browser nav
		} 
		</script>
		<title>
			Hacker News
		</title>
	</head>
	<body>
		<center>
			<table border="0" cellpadding="0" cellspacing="0" width="85%" bgcolor="#F6F6EF">
				<tbody>
					<tr>
						<td bgcolor="#FF6600">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:2px">
								<tbody>
									<tr>
										<td style="width:18px;padding-right:4px">
											<a href="http://ycombinator.com/"><img src="./files/y18.gif" width="18" height="18" style="border:1px #ffffff solid;"></a>
										</td>
										<td style="line-height:12pt; height:10px;">
											<span class="pagetop"><b><a href="http://news.ycombinator.com/news">Hacker News</a></b><img src="./files/s.gif" height="1" width="10"><a href="http://news.ycombinator.com/newest">new</a> | <a href="http://news.ycombinator.com/newcomments">comments</a> | <a href="http://news.ycombinator.com/ask">ask</a> | <a href="http://news.ycombinator.com/jobs">jobs</a> | <a href="http://news.ycombinator.com/submit">submit</a></span>
										</td>
										<td style="text-align:right;padding-right:4px;">
											<span class="pagetop"><a href="http://news.ycombinator.com/newslogin?whence=%6e%65%77%73">login</a></span>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr style="height:10px">
						<td></td>
					</tr>
					<tr>
						<td>
							<table border="0" cellpadding="0" cellspacing="0">
								<tbody>

                  <?php include 'addmessages.php'; ?>

									
									<tr style="height:5px">
										<td></td>
									</tr>
									<tr style="height:10px">
										<td></td>
									</tr>
									<tr>
										<td colspan="2"></td>
										<td class="title">
											<a href="http://news.ycombinator.com/news2">More</a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td>
							<img src="./files/s.gif" height="10" width="0">
							<table width="100%" cellspacing="0" cellpadding="1">
								<tbody>
									<tr>
										<td bgcolor="#FF6600"></td>
									</tr>
								</tbody>
							</table><br>
							<center>
								<span class="yclinks"><a href="http://news.ycombinator.com/lists">Lists</a> | <a href="http://news.ycombinator.com/rss">RSS</a> | <a href="http://ycombinator.com/bookmarklet.html">Bookmarklet</a> | <a href="http://ycombinator.com/newsguidelines.html">Guidelines</a> | <a href="http://ycombinator.com/newsfaq.html">FAQ</a> | <a href="http://ycombinator.com/newsnews.html">News News</a> | <a href="http://news.ycombinator.com/item?id=363">Feature Requests</a> | <a href="http://ycombinator.com/">Y Combinator</a> | <a href="http://ycombinator.com/apply.html">Apply</a> | <a href="http://ycombinator.com/lib.html">Library</a></span><br>
								<br>
								<form method="get" action="http://www.hnsearch.com/search#request/all">
									Search: <input type="text" name="q" value="" size="17">
								</form><br>
							</center>
						</td>
					</tr>
				</tbody>
			</table>
		</center>
	</body>
</html>
