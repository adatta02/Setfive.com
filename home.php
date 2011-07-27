<h1 class="blue-banner">No "bs." Just results.</h1>

<div class="sep-body">

	<div class="home-middle">
        We build <a href="/consulting/web-application">web applications</a>, 
            <a href="/consulting/startup">help start ups</a>, and
            love <a href="/consulting/symfony">Symfony (PHP)</a>         
	</div>

	<div class="home-blog">
  	
  	<div class="alpha grid_8">
    
        <div class="centered">
                <h3>Our clients have been featured on</h3>
                <div class="sep"><img src="/images/logo-splash-homepage.png"></div>
        </div>
        
        <div class="huge-sep">
    
	  	    <h3>Recent blog posts (via <a href="http://shout.setfive.com">shout.setfive.com</a>)</h3>
	          
	          <div class="blogroll">
	  		    <?php
	  		    $rss = @ simplexml_load_file('http://shout.setfive.com/feed/') or false;
	  			
	  		    if($rss): $post=$rss->channel->item[0]; ?>
	  	        <ul class="listless">
	  		       <li><h3><a href="<? echo $post->link;?>" class="title_link"><?php echo $post->title ?></a></h3></li>
	  		       <li><p><?php echo $post->description ?> - <a href="<? echo $post->link;?>">Continue Reading</a></p></li>
	  		    </ul>
	              <ul class="listless">
	  				<?php $post=$rss->channel->item[1];?>
	  		        <li><h3><a href="<? echo $post->link;?>" class="title_link"><?php echo $post->title ?></a></h3></li>
	  		        <li><p><?php echo $post->description ?> - <a href="<? echo $post->link;?>">Continue Reading</a></p></li>
	  		    </ul>
	  		    <?php endif; ?>
	          </div>
          
          </div>
          
  	</div>  	
	
		<div class="omega grid_4">
			<h3>via <a target="_blank" href="http://www.twitter.com/setfive">@setfive</a></h3>

<div class="big-sep">
      <script src="http://widgets.twimg.com/j/2/widget.js"></script>
      <script>
      new TWTR.Widget({
        version: 2,
        type: 'profile',
        rpp: 4,
        interval: 6000,
        width: 250,
        height: 300,
        theme: {
          shell: {
            background: '#333333',
            color: '#ffffff'
          },
          tweets: {
            background: '#000000',
            color: '#ffffff',
            links: '#ffee00'
          }
        },
        features: {
          scrollbar: false,
          loop: false,
          live: false,
          hashtags: true,
          timestamp: true,
          avatars: false,
          behavior: 'all'
        }
      }).render().setUser('setfive').start();
      </script>
	</div>

		</div>
	
		<div class="clearfix"></div>
		
	</div>
	
</div>