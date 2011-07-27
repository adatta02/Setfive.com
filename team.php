<h1 class='title'><a href="/team">Team</a>
	<?php if( $subkey ): ?>
		> <?php echo $SUBKEY_TITLES[ $subkey ]; ?>
	<?php endif; ?>
</h1>

<div class="main-body">

<div class="grid_4 alpha">
<ul class="sidebar listless">
	<li><a href="/team/matt-daum">Matt Daum - CEO</a></li>
	<li><a href="/team/ashish-datta">Ashish Datta - Partner</a></li>
</ul>
</div>

<div class="grid_8 omega">

	<?php switch( $subkey ):
default: 
case "":
	?>

<p>Our story isn't completely written yet, so bear with us. Setfive
Consulting was born out of frustration. Our core team was frustrated by
incompetent managers forcing them to use the "new sexy" tool, not the
right tool. The team was fed up by being treated like a bunch of
replaceable cogs. But above all, they were infuriated by decisions that
everyone knew negatively affected the client or customer. With these
problems in mind, Setfive's core set out to craft something different -
something better.</p>

<p>We pride ourself on being different. First, the way we run projects
is different. Our technical teams are always self managing and agile. A
lead developer, also acting as a project manager, has full control over
what his team uses and how the project is scheduled. As a result, our
developers are happy, motivated, and productive. It is no secret that
happy developers produce great code, so we try and keep our guys happy.
What truly sets us apart from other development firms is that we will
never let our customers "fly blind." If our guys have a brilliant idea
or see an issue in your product, they'll let you know. We strongly
believe that this helps produce both great products and lasting
relationships.</p>

<?php break; ?>

<?php case "ashish-datta": ?>
	<p>Ashish is a seasoned software developer. He has written software
targeting both the desktop and internet and hopes to make an impact in
the mobile space. Recently, the majority of Ashish's experience has been
focused on creating feature rich web applications. His tools of choice
are PHP and jQuery along with a healthy serving of whoop ass.
Additionally, Ashish is a bit of a geek - he'll talk till he is blue in
the face about the merits of AJAX over Flash or how PHP's lack of
closures is a killer.</p>

<p>Away from the office, Ashish is a sometimes avid runner (hey, Boston
is cold) and gym rat. He'll also join you for a single malt at the drop
of a hat.</p>

<p>Ashish can be reached at <a href="mailto: ashish@setfive.com">ashish@setfive.com</a></p>

<ul class="listless inline">
	<li><a target="_blank"
		href="http://www.linkedin.com/in/ashishdattasetfive"><img
		src="/images/linkedin.png"></a></li>
	<li><a target="_blank"
		href="http://news.ycombinator.com/user?id=adatta02"><img
		src="/images/hn.png"></a></li>
	<li><a target="_blank" href="https://tru.ly/ashish"><img
		src="/images/truly.png"></a></li>
</ul>

<?php break; ?>

<?php case "matt-daum":
    ?>
<p>Matt has spent several years doing web development and system
administration. His web development experience ranges from the
architecture, design, and development of sites large and small. With
respect to system administration, he has set up and maintained Windows
and Linux servers and used tools such as Nagios to monitor the machines.
</p>

<p>In addition, Matt is a certified scuba diver, experienced mountain
climber, and capable equestrian, should your project demand these skill
sets. Matt also enjoys brewing his own beer, as well as relaxing with
some of his product.</p>

<p>Matt can be reached at <a href="mailto: matt@setfive.com">matt@setfive.com</a></p>

<ul class="listless inline">
	<li><a target="_blank"
		href="http://www.linkedin.com/in/mattdaum"><img
		src="/images/linkedin.png"></a></li>
	<li><a target="_blank"
		href="http://news.ycombinator.com/user?id=matttah"><img
		src="/images/hn.png"></a></li>
	<li><a target="_blank" href="https://tru.ly/daum"><img
		src="/images/truly.png"></a></li>
</ul>

<?php break; ?>

<?php endswitch; ?>
</div>

<div class="clear"></div>

</div>