<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Resources';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-resources">
	<div class="container container-padding">
		<h1><?= Html::encode($this->title) ?></h1>
		<div class="content-resources">
		<input type="text" class="searchQuery" placeholder="Video keywords... (ex: music, science etc.)" />
			<button onclick="getAllClips()"  class="btn btn-primary" waves-effect waves-light orange>Get clips</button>

			<h4>TED</h4>
                        <div id="tedVideoResults" class="tedVideoResults">
                            <p>Nothing yet :(</p> 
				<div class="resultsWrapper"></div>
			</div>
                        <div class="youtubeVideoModal"></div>
		

			<br>
			
                        <h4>VSauce</h4>
			<div id="vsauce" class="tedVideoResults">
                            <p>Nothing yet :(</p>
				<div class="resultsWrapper"></div>
			</div>
                        <div class="youtubeVideoModal"></div>
                        
                        <br>
			
                        <h4>Veritasium</h4>
			<div id="veritasium" class="tedVideoResults">
                            <p>Nothing yet :(</p>
				<div class="resultsWrapper"></div>
			</div>
                        <div class="youtubeVideoModal"></div>
                        
                        
                            <br>
			
                        <h4>C.G.P. Grey</h4>
			<div id="cgp" class="tedVideoResults">
                            <p>Nothing yet :(</p>
				<div class="resultsWrapper"></div>
			</div>
                        <div class="youtubeVideoModal"></div>
                        
                        
                        
                                <br>
			
                        <h4>Smarter Everyday</h4>
			<div id="smarter" class="tedVideoResults">
                            <p>Nothing yet :(</p>
                            <div class="resultsWrapper">
                                
                            </div>
			</div>
                        <div class="youtubeVideoModal"></div>
                        
                        
		</div>

                
               

	</div>
</div>



<script src="js/youtubeVideos.js"></script>
<script src="https://apis.google.com/js/client.js?onload=init"></script>
