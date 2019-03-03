var postId = 0;

$('.like').on('click', function (event) {
    event.preventDefault();
    postId = event.default.parentNode.parentNode.dataset['postid'];
    var islike = event.target.previousElementSibling == null;

    $.ajax({
        method: 'POST',
    })
});
