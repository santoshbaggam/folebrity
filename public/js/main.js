$.getJSON( "celebrities/lists", function( data ) {
    $('.typeahead').autocomplete({
        lookup: data,
        onSelect: function (data) {
            $('.typeahead').val('@' + data.handle);
            $('.hidden-q').val(data.handle);
        }
    });
});

function insertTweet(tweet) {
    // push to the dashboard
    // var template = Handlebars.compile($('#tweet-template').html());
    // $('#tweets-container').prepend(template(tweet));

    // push to the activity feed
    var template = Handlebars.compile($('#activity-template').html());
    $('.insta-list').prepend(template(tweet));
}

var pusher = new Pusher('7e6e35f6634ce20d4525');
var channel = pusher.subscribe('tweetChannel');

window.App = {};

App.Notifier = function() {
    this.notify = function(tweet) {
        insertTweet(tweet);
    }
}

channel.bind('newTweet', function(tweet) {
    (new App.Notifier).notify(tweet);
});