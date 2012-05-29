<h1 class='title'>
	<a href="/consulting">Consulting</a>
	<?php if( $subkey ): ?>
		> <?php echo $SUBKEY_TITLES[ $subkey ]; ?>
	<?php endif; ?>
</h1>

<div class="main-body">

<div class="grid_4 alpha">
<ul class="sidebar listless">
	<li><a href="/consulting/web-application">Web Application Development</a></li>
	<li><a href="/consulting/startup">Startup</a></li>
	<li><a href="/consulting/symfony">Symfony</a></li>
	<li><a href="/consulting/performance">Performance</a></li>
	<li><a href="/consulting/salesforce">Salesforce</a></li>
  <li><a href="/consulting/metatrader-4-integrations">MetaTrader4</a></li>
</ul>
</div>
<div class="grid_8 omega">
	
	<?php switch( $subkey ):
default: 
case "":
	?>
			<p>At our core, we're a technology consulting company focused on
helping clients tackle their problems. The combination of our diverse
skillset and experience allows us to analyze your problems and tailor
solutions to fit your needs. We also pride ourselves on being different
in that we speak our minds and don't believe that the "customer is
always right".</p>

<p>If you're looking for something that isn't explicitly listed don't
fret - drop us a line and we'll see if we can help you out. Our
developers and consultants have extremely varied backgrounds so there is
a good chance someone will be able to work with you or point you in the
right direction.</p>
<?php break; ?>
<?php case "metatrader-4-integrations":?>
<p>We've been doing custom integrations for MetaTrader4 (MT4) for several years.  Whether you need to integrate it into your SalesForce or your custom CRM we can help out.  Please visit our <a href="http://getmetaforce.com" target="_blank">MetaForce product information page</a> for more information.</p>

<?php break;?>
<?php case "web-application": ?>
	
	<p>Web apps are our jam - every one we do comes with an extra large can
of whoop ass. Our teams go the extra mile to make sure that your
application is awesome. They'll work with you and your spec to make sure
that you end up with the best possible product. Our guys will give you
feedback and act as a sounding board for new ideas and features.</p>

<p>Generally, we develop the majority of our applications on the LAMP
stack using the Symfony framework. Our reasoning is simple: LAMP is open
source, easy to scale, and is battle tested. Developing with Symfony is
an easy choice; it reduces development time and helps us produce secure,
solid code.</p>

<p>So if you need a social network, search engine, or anything in
between, drop us a line.</p>
	
<?php break; ?>

<?php case "startup": ?>
	<p>We work with entrepreneurs and early stage companies to plan, build,
launch, and iterate on their products. Often, the hardest part in
launching a new venture is getting the initial product launched.</p>

<p>Our role is to make sure this doesn't happen to you. We'll take your
product from a loose set of ideas, to a functional spec, and finally to
a delivered product. At this point, we'll work with you to successfully
launch your new product and build a company around it.</p>

<p>We'd love to hear from you regardless of what you're trying to build
or where you are in the process.</p> 
<?php break; ?>

<?php case "symfony": ?>
	<p>We do Symfony projects. We build 'em, customize 'em, and optimize
'em.</p>

<p>We've spent hours arguing about the merits of using components versus
partials, the best way to validate Symfony forms, and our favorite
Symfony plugins. Between them, our team has architected, built, and
launched over a dozen Symfony applications. If you have an existing
Symfony project, our guys will be able to figure it out.</p>

<p>If your original development team disappeared, we'll be able to take
an existing Symfony application and add features or fix bugs. Just
remember, you aren't alone in holding an application that no one
understands.</p>

<p>We really like to hold Symfony boot camps. We'll take a team of PHP
developers and bring them up to speed on Symfony. Your guys will get
exposed to Symfony's core strengths as well as some of its more advanced
features. Additionally, our team will share some war stories and
personal anecdotes about Symfony's quirks and gotchas. We can also work
up a presentation to convince the "suits" that Symfony is the right tool
for the job.</p>
<?php break; ?>

<?php case "performance": ?>
<p>Slow website giving you the blues? We'll analyze your architecture
and identify key trouble areas for your site's performance.</p>

<p>Slow websites suck. Google has published a report that a 500ms
increase in load time caused a 20% drop in searches and revenue.
Additionally, Amazon has reported a strong correlation between decreased
load times and increased sales.</p>

<p>Websites can run slowly for several reasons. Slow database queries,
slow external JavaScript loads, and network issues are just a few
aspects of your site that we'll analyze. Our guys use tools like Firebug
with YSlow to try and determine why an individual page is loading
slowly. They'll also take a look through your MySQL slow_query log to
spot SQL queries that are cramping your style. We also use curl-loader
to analyze how your site will respond to a dramatic increase in
visitors, like a Slashdotting.</p>

<p>In addition to performance tests, we can also analyze how well an
application will scale. We'll take your application and put it through
its paces to see how to provision resources to make it scale. We can
also do "scaling fire drills" where we see how long it would take to
begin supporting additional users.</p>

<p>At the end of the day we make things run fast, so if you need a speed
boost, drop us a line.</p>

<?php
    break;
    ?>

<?php case "salesforce": ?>
	<p>Having an awesome CRM is great - except for when it doesn't fit into
your workflow. That's where we come in.</p>

<p>We'll take a look at your current software and workflows and see if
it can be integrated with your Salesforce. This will allow you to
streamline your workflow and make converting leads to sales easier.</p>

<p>Currently, we have packaged integrations for MetaTrader4 and
Salesforce.com</p>
	
<?php break; ?>

<?php
endswitch
; ?>

	</div>

<div class="clear"></div>
</div>