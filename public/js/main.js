// TWEETERS FOR INSTA-SEARCH
$.getJSON( "celebrities/lists", function( data ) {
    $('.typeahead').autocomplete({
        lookup: data,
        onSelect: function (data) {
            $(this).val('@' + data.handle);
            $('.hidden-q').val(data.handle);
        }
    });
});

// PUSHER FOR INSTA-LIST
function insertTweet(tweet) {
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

// .AJAX FOR COMPARE
function insertCompare(data, form) {
    console.log(data);
    var li = form.closest('li');
    var template = Handlebars.compile($(li).find('div.div .compare-template').html());
    $(li).find('div.div').append(template(data.data));
}

$('form.compare').on('submit', function(e) {
    var form = $(this);
    var formData = form.serialize();
    $.ajax({
        type: "POST",
        url: "compare",
        data: formData,
        success: function(data) {
            insertCompare(data, form);
        }
    });
    e.preventDefault();
});