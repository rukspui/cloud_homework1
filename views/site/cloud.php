<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;

$this->title = 'Cloud Homework 1';
$this->params['breadcrumbs'][] = $this->title;
?>



<script src="js/apis.js"></script>
<script src="https://apis.google.com/js/client.js?onload=init"></script>
<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="8s44awotke7s1rq"></script>


<div class="site-cloud">
	<div class="container container-padding">
		<h1><?= Html::encode($this->title) ?></h1>
		<div class="content-resources">
		<input type="text" class="searchQuery" placeholder="Video keywords..." />
			<button onclick="getAllClips()"  class="btn btn-primary" waves-effect waves-light orange>Get clips</button>

			<h4>Find your favourite music!</h4>
                        <div id="tedVideoResults" class="tedVideoResults"> 
				<div class="resultsWrapper"></div>
			</div>
                        <div class="youtubeVideoModal"></div>
                        <br> <br>


<br><br><br>

                </div>
    </div>



</div>

