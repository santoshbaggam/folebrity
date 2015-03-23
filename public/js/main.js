$.getJSON( "celebrities/lists", function( data ) {
    $('.typeahead').autocomplete({
        lookup: data,
        onSelect: function (data) {
            $('.typeahead').val('@' + data.handle);
            $('.hidden-q').val(data.handle);
        }
    });
});