/**
 * Created by Nerdjin on 25.03.2016.
 */
var CommentBox = React.createClass({
    render: function() {
        return (
            <div className="commentBox">
            Hello, world! I am a CommentBox.
        </div>
        );
    }
});
ReactDOM.render(
<CommentBox />,
    document.getElementById('content')
);