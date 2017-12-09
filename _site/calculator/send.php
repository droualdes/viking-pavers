<?
$email = $_POST["email"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$paving_type = $_POST["paving-type"];
$paving_cost = $_POST["paving-cost"];
$square_feet = $_POST["square_feet"];

$to = "&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#118;&#105;&#107;&#105;&#110;&#103;&#112;&#097;&#118;&#101;&#114;&#115;&#046;&#099;&#111;&#109;";
$header = "from: noreply@vikingpavers.com";
$subject = "Paver Calculator | $name";
$body = "Jorge/Mauro,
\r
This person used the paver calculator and wants to be contacted asap.
\r
Name: $name
Email: $email
Phone: $phone
\r
This is the last calculation made.
\r
Square Feet: $square_feet
Paving Type: $paving_type
Paving Cost: $paving_cost";

$result = mail($to, $subject, $body, $header);

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- MetaTags BEGIN -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="Viking Pavers specializes in the design and installation of interlocking pavers, segmental retaining walls, synthetic grass, outdoor kitchens, and landscape lighting.">
		<meta name="keywords" content="Pavers, Retaining Walls, Paver Stones, Drainage, Interlock Pavers, Driveways, Paver Installation, Patio, Landscaping, Hardscapes, Landscape Design, Interlocking Concrete Pavers, Paving Stones, Interlocking Pavers, Natural Stone Pavers, Oldcastle, Belgard, Hardscaping, Belgard Walls, Celtik Walls, Install Pavers, Concrete Pavers, Patios, Belgard Pavers, Patio Pavers, Walkways, Driveway Pavers, Walkway Pavers, Pool Decks, Interlocking Concrete Pavers, Brick Pavers, Sidewalks, Hardscapes, Landscape Contractor, Landscape Installation, Segmental Retaining Walls, Block Walls, Custom Stone, Boulders, Outdoor Kitchens, BBQ's, Outdoor Grills, Fire Pit, Outdoor Fireplaces, Artificial Turf, Synthetic Turf Grass, Landscape Lighting, Outdoor Lighting, Paving Contractor.">
		
		<meta name="robots" content="index,follow"><!-- MetaTags END -->
		<title>
			Interlocking Paving Stone Estimator | Viking Pavers
		</title>
		<link href="/css/screen.css" rel="stylesheet" type="text/css"><!-- Calculator BEGIN -->
		<link rel="Stylesheet" href="stylesheets/style.css" type="text/css" media="screen">
		<script type="text/javascript" src="http://www.google.com/jsapi">
</script>
		<script type="text/javascript">
// You may specify partial version numbers, such as "1" or "1.3",
				  //  with the same result. Doing so will automatically load the 
				  //  latest version matching that partial revision pattern 
				  //  (e.g. 1.3 would load 1.3.2 today and 1 would load 1.4.4).
				  google.load("jquery", "1.4.4");

				  google.setOnLoadCallback(function() {
					// Place init code here instead of $(document).ready()
				  });
		</script>
		<script src="javascripts/application.js" type="text/javascript">
</script>
		<script src="javascripts/jquery.simplemodal.js" type="text/javascript">
</script><!-- Calculator END -->
		<!-- TypeKit Fonts BEGIN -->

		<script type="text/javascript" src="http://use.typekit.com/pfb3khs.js">
</script>
		<script type="text/javascript">
try{Typekit.load();}catch(e){}
		</script><!-- TypeKit Fonts END -->
		<!-- Validate Form BEGIN -->

		<script type="text/javascript">
function validateForm()
				{
				var x=document.forms["estimate_form"]["square_feet"].value;
				if (x<1000)
				{
				   alert("There is a 1000 square foot minimum on paver projects. Enter a number ≥ 1000.");
				   return false;
				}
				var x=document.forms["estimate_form"]["name"].value;
				if (x==null || x=="")
				  {
				  alert("First name must be filled in");
				  return false;
				  }
				var x=document.forms["estimate_form"]["phone"].value;
				if (x==null || x=="")
				  {
				  alert("Phone must be must be filled in");
				  return false;
				  }
				var x=document.forms["estimate_form"]["email"].value;
				if (x==null || x=="")
				  {
				  alert("Email must be filled in");
				  return false;
				  }
				var x=document.forms["estimate_form"]["email"].value;
				var atpos=x.indexOf("@");
				var dotpos=x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
				  {
				  alert("Not a valid e-mail address");
				  return false;
				  }
				}
		</script><!-- Validate Form END -->
	</head>
	<body>
		<div id="header">
			<h1>
				<a href="/calculator/">Viking Pavers Interlocking Paving Stone Estimator</a>
			</h1>
		</div><!-- header -->
		<div id="wrapper">
			<div id="main-column">
				<a href="/promotions/"><div id="side-select-1"></div></a>
				<a href="/calculator/"><div id="side-select-2"></div></a>
				<a href="http://youtu.be/Ts4HZQQFJu0?rel=0" target="_blank" title="Viking Pavers' Intro Video"><div id="side-select-3">
				</div></a>
				<div class="logo"></div>
				<div class="slogan">
					<ul id="nav">
						<li id="nav-1">
							<a href="/" title="Home" class="current"><span>Home</span></a>
						</li>
						<li id="nav-2">
							<a href="#" title="Services"><span>Services</span></a>
							<ul>
								<li>
									<a href="/services/driveways/" title="Driveways">Driveways</a>
								</li>
								<li>
									<a href="/services/firepits/" title="Fire Pits">Fire Pits</a>
								</li>
								<li>
									<a href="/services/lighting/" title="Landscape Lighting">Landscape Lighting</a>
								</li>
								<li>
									<a href="/services/kitchens/" title="Outdoor Kitchens &amp; BBQ Islands">Outdoor Kitchens &amp; BBQ Islands</a>
								</li>
								<li>
									<a href="/services/patios/" title="Patios">Patios</a>
								</li>
								<li>
									<a href="/services/pooldecks/" title="Pool Decks">Pool Decks</a>
								</li>
								<li>
									<a href="/services/walls/" title="Walls">Walls</a>
								</li>
								<li>
									<a href="/services/steps/" title="Steps">Steps</a>
								</li>
								<li>
									<a href="/services/turf/" title="Synthetic Turf Lawns">Synthetic Turf</a>
								</li>
								<li>
									<a href="/services/walkways/" title="Walkways">Walkways</a>
								</li>
								<li>
									<a href="/services/ancillary/" title="Demolition, Excavation, &amp; Removal">Demolition, Excavation, &amp; Removal</a>
								</li>
							</ul>
						</li>
						<li id="nav-3">
							<a href="#" title="Great Deals"><span>Great Deals</span></a>
							<ul>
								<li>
									<a href="/promotions/" title="Viking Pavers Promotions">Promotions</a>
								</li>
								<li>
									<a href="/rebates/" title="Viking Pavers Rebates">Rebates</a>
								</li>
								<li>
									<a href="/paymentoptions/" title="Viking Pavers Payment Options">Payment Options</a>
								</li>
							</ul>
						</li>
						<li id="nav-4">
							<a href="#" title="Superiority"><span>Superiority</span></a>
							<ul>
								<li>
									<a href="http://youtu.be/Ts4HZQQFJu0?rel=0" target="_blank" title="Viking Pavers' Intro Video">Watch Intro Video</a>
								</li>
								<li>
									<a href="/promotions/" title="Viking Pavers Promotions">Promotions</a>
								</li>
								<li>
									<a href="/rebates/" title="Viking Pavers Rebates">Rebates</a>
								</li>
								<li>
									<a href="/paymentoptions/" title="Viking Pavers Payment Options">Payment Options</a>
								</li>
								<li>
									<a href="/warranty/" title="Viking Pavers Warranty">Materials &amp; Installation Warranty</a>
								</li>
								
								<li>
									<a href="/qualityspecifications/" title="Viking Pavers Installation Quality Specifications">Installation Quality Specifications</a>
								</li>
							</ul>
						</li>
						<li id="nav-5">
							<a href="#" title="Gallery"><span>Gallery</span></a>
							<ul>
<li>
									<a href="/products/belgard/pavers/" title="Belgard Pavers available from Viking Pavers">Belgard Pavers</a>
								</li>
								<li>
									<a href="/products/mcnear/pavers/" title="McNear Pavers available from Viking Pavers">McNear Pavers</a>
								</li>								<li>
									<a href="/products/calstone/pavers/" title="Calstone Pavers available from Viking Pavers">Calstone Pavers</a>
								</li>
								<li>
									<a href="/products/synlawn/" title="Synlawn Synthetic Grass available from Viking Pavers">Synlawn Synthetic Grass</a>
								</li>
								<li>
									<a href="/photogallery/" title="Viking Pavers Installations Photo Gallery">Installations Photo Gallery</a>
								</li>
							</ul>
						</li>
						<li id="nav-6">
							<a href="#" title="Acclamations"><span>Acclamations</span></a>
							<ul>
								<li>
									<a href="/customercomments/" title="Viking Pavers Customer Comments">Customer Comments</a>
								</li>
								<li>
									<a href="/thankyouletters/" title="Viking Pavers Thank You Letters">Thank You Letters</a>
								</li>
								<li>
									<a href="/reviews/" title="Independent Reviews">Independent Reviews</a>
								</li>
							</ul>
						</li>
						</ul><!-- nav -->
					</div>
					<div class="free-consultation">
						Free In-Home Consultation &amp; Price Quote
					</div>
					<div class="phone">
						800-941-1014
					</div>


					<h2>Got it!</h2>

						<div class = "container">

							<div class = "email_form">

						       <p>We've been emailed of your request to be contacted. A representative will call you at <strong><? echo "$phone"; ?></strong>. If we cannot get through to you via phone, we will contact you via email at <strong><? echo "$email"; ?></strong>.</p>
						

												<div id="Footer">
													<div class="FooterLogos">
														<a href="http://www.diamondcertified.org/report/viking-pavers" title="Diamond Certified Website" target="_blank"><img src="/images/footer-logo-1.png" width="150" height="100" alt="Diamond Certified"></a><a href="http://www.bbb.org/greater-san-francisco/business-reviews/concrete-contractors/viking-pavers-in-lafayette-ca-304543" title="BBB | Better Business Bureau Website" target="_blank"><img src="/images/footer-logo-2.png" width="150" height="100" alt="Better Business Bureau"></a><a href="http://www.icpi.org/" title="ICPI | Interlocking Concrete Pavement Institute Website" target="_blank"><img src="/images/footer-logo-3.png" width="150" height="100" alt="ICPI"></a><a href="http://www.ncma.org/" title="NCMA | National Concrete Masonry Association Website" target="_blank"><img src="/images/footer-logo-4.png" width="150" height="100" alt="SRW"></a>
													</div><!-- FooterLogos END  -->
													<p class="left">
														Toll Free: <strong>800-941-1014</strong> | <a href="mailto:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#118;&#105;&#107;&#105;&#110;&#103;&#112;&#097;&#118;&#101;&#114;&#115;&#046;&#099;&#111;&#109;" title="Email Viking Pavers">Email Us</a> | <a href="/downloads/VikingPavers.vcf" title="Download Viking Pavers' vCard">Download vCard</a> | <a href="https://www2.cslb.ca.gov/onlineservices/checklicenseII/LicenseDetail.aspx?LicNum=970281" title="Verify License" target="_blank">License #970281</a><br>
														Viking Pavers, Inc. 3609 Florida Ave, Richmond, CA 94804
													</p>
													<p class="right">
														<a href="/employment/" title="Jobs at Viking Pavers">Employment</a> | <a href="/terms/" title="Terms &amp; Conditions of Use">Terms</a> | <a href="/privacy/" title="Privacy Policy">Privacy Policy</a><br>
														© 2012 Viking Pavers, Inc.
													</p>
												</div><!-- Footer END  -->
											</div><!-- main-column -->
											</div><!-- wrapper -->
										</body>
									</html>