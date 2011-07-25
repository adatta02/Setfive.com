<h1 class='title'><a href="/ventures">Ventures</a>
	<?php if( $subkey ): ?>
		> <?php echo $SUBKEY_TITLES[ $subkey ]; ?>
	<?php endif; ?>
</h1>

<div class="main-body">

<div class="grid_4 alpha">
<ul class="sidebar listless">
	<li><a href="/ventures/forex-tv">ForexTV</a></li>
	<li><a href="/ventures/wegov">WeGov</a></li>
	<li><a href="/ventures/truly">tru.ly</a></li>
</ul>

</div>

<div class="grid_8 omega">

<?php switch( $subkey ):
default: 
case "":
	?>
	<p>We occasionally make small (less than $50,000) investments in
promising technology companies that we believe in. We are also open to a
mix of cash and equity in terms of compensation.</p>

<p>Shoot us an email if you have an investment opportunity you'd like to
discuss: <a href="mailto: contact@setfive.com">contact@setfive.com</a></p>
  
<?php break; ?>
	    
<?php case "forex-tv": ?>
	    <div class="grid_5 alpha">
<p>ForexTV provides forex market news, trading resources, market data
and charts. Additionally, ForexTV provides daily live video feeds filmed
in their New York City offices.</p>
</div>
<div class="grid_3 centered omega">
<ul class="listless">
	<li><img src="/images/forextvlogo.png"></li>
	<li>Industry: finance, forex</li>
	<li>Url: <a href="http://www.forextv.com" target="_blank">www.forextv.com</a></li>
</ul>
</div>
<div class="clear"></div>
<?php break; ?>

<?php case "wegov": ?>
	<div class="grid_5 alpha">

<p>WeGov's goal is to deliver affordable advocacy tools to organizations
and provide them with the services and support they need to effectively
execute their technology projects.</p>

<p>WeGov's SaaS and custom development capabilities allow advocacy
organizations to easily get started on the WeGov platform while still
giving them the flexibility to deal with a single vendor for additional
customizations.</p>

</div>
<div class="grid_3 centered omega">
<ul class="listless">
	<li><img src="/images/wegovlogo.png"></li>
	<li>Industry: online advocacy</li>
	<li>Url: <a href="http://www.wegov.com" target="_blank">www.wegov.com</a></li>
</ul>
</div>
<div class="clear"></div>
<?php break; ?>

<?php case "truly": ?>
	<div class="grid_5 alpha">
		
		<p>tru.ly is the internet's first free user verification platform. 
			tru.ly facilitates a better, safter, Internet experience by allowing users to assert that they are using their true identity.
		</p>
		
		<p>With an OpenID based API launching in the summer 2011, tru.ly is poised to revolutionize industries like eCommerce and online dating.</p>
		
		<h3>Links:</h3>
		
		<div class="sep">
  		<ul class="listless">
  			<li>
  				<a target="_blank" href="http://thenextweb.com/socialmedia/2011/02/24/tru-ly-launches-as-your-internet-id-for-the-future-free-beta-invites/" target="_blank">
  					Tru.ly launches as your Internet ID for the future</a></li>
  			<li>
  				<a target="_blank" href="http://boston.cbslocal.com/2011/04/07/online-verification-system-helps-id-facebook-fraud/">
  					Online Verification System Helps ID Facebook Fraud
  				</a>
  			</li>
  		</ul>
		</div>
		
	</div>
	<div class="grid_3 centered omega">
    <ul class="listless">
    	<li><img src="/images/trulylogo.png"></li>
    	<li>Industry: identity</li>
    	<li>Url: <a href="https://www.tru.ly" target="_blank">www.tru.ly</a></li>
    </ul>
	</div>
	<div class="clear"></div>
<?php break; ?>

<?php endswitch; ?>
</div>

<div class="clear"></div>

</div>