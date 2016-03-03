function resetVideoHeight() {
    $(".video").css("height", $("#results").width() * 9/16);
}


function getTedYoutubeVideos() {
    console.log('getting clips...');
    var searchQuery = $('.searchQuery').val(); 
    console.log(searchQuery);
    var request = gapi.client.youtube.search.list({
            part: "snippet",
            type: "video",
            q: encodeURIComponent(searchQuery),
            maxResults: 50,
            // channelId: 'UCAuUUnT6oDeKwE6v1NGQxug',
            order: "viewCount"
       }); 
    request.execute(function(response) {
          var results = response.result;
          var thumbnailWidth = 269;
          $('#tedVideoResults .resultsWrapper').empty('');
          results.items.forEach(function(result) {
             var thumbnail = '<img src="http://img.youtube.com/vi/' + result.id.videoId + '/0.jpg" onclick="openVideo(\'' + result.id.videoId + '\',\'' + result.snippet.title + '\')" />';
             var titleTemplate = '<span class="title">' + result.snippet.title + '</span>';
             var videoTemplate = '<div class="youtubeResult">' + thumbnail + titleTemplate + '</div>' 
             $('#tedVideoResults .resultsWrapper').append(videoTemplate);
          });
          
          $('#tedVideoResults .resultsWrapper').width(thumbnailWidth * (results.items.length) - 37);
           
       });
}

function saveToDropbox(id, title) {
  var url = "http://www.youtubeinmp3.com/fetch/?video=https://www.youtube.com/watch?v="+ id;
  console.log(url);
  var filename = title;

  var options = {
    files: [
        // You can specify up to 100 files.
        {'url': url, 'filename': filename + '.mp3'},
    ],

    // Success is called once all files have been successfully added to the user's
    // Dropbox, although they may not have synced to the user's devices yet.
    success: function () {
        // Indicate to the user that the files have been saved.
        alert("Success! Files saved to your Dropbox.");
    },

    // Progress is called periodically to update the application on the progress
    // of the user's downloads. The value passed to this callback is a float
    // between 0 and 1. The progress callback is guaranteed to be called at least
    // once with the value 1.
    progress: function (progress) {},

    // Cancel is called if the user presses the Cancel button or closes the Saver.
    cancel: function () {},

    // Error is called in the event of an unexpected response from the server
    // hosting the files, such as not being able to find a file. This callback is
    // also called if there is an error on Dropbox or if the user is over quota.
    error: function (errorMessage) {}
};

  Dropbox.save(options);
}

function openVideo(id, title) {
    console.log(id, title);
    var playerTemplate = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + id + '" frameborder="0" allowfullscreen></iframe><br>';
    var controllButtons = '<a href=\'http://www.youtubeinmp3.com/fetch/?video=https://www.youtube.com/watch?v='+ id + '\'><button onclick=""  class="btn btn-primary" waves-effect waves-light orange>Download MP3</button></a>';
    var dropboxButton = '<a onclick="saveToDropbox(\'' + id + '\',\'' + title + '\')" class="btn btn-primary" waves-effect waves-light orange>Save MP3 to Dropbox</a>';
    var emailButton = '<a class="btn btn-primary" waves-effect waves-light orange>Send Email with MP3</button></a>';
    $('.youtubeVideoModal').empty();
    $('.youtubeVideoModal').append(playerTemplate).append(controllButtons).append(dropboxButton).append(emailButton);
    $('.youtubeVideoModal').show();
    
}



function getAllClips() {
  getTedYoutubeVideos();

}

function init() {
    console.log('works')
    gapi.client.setApiKey("AIzaSyAt8-mFm8xbhHO1oAsZwH0qAljV9gi8UU4");
    gapi.client.load("youtube", "v3", function() {
        getTedYoutubeVideos();

    });
}


