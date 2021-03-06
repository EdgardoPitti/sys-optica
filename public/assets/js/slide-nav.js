Direction = {
    LEFT : 'left',
    RIGHT : 'right'
}

Shoji = function(element) {
    this.offset = 0;
    var shoji = $(element);
    var door = shoji.find('.shoji-door');
    this.getDoor = function() { return door; };
    var leftPanel = shoji.find('.shoji-panel-left');
    this.getLeftPanel = function() { return leftPanel; };
    var rightPanel = shoji.find('.shoji-panel-right');
    this.getRightPanel = function() { return rightPanel; };
};

Shoji.prototype.slide = function(direction, width, duration, complete) {
    var operator;
    var offset;
    switch (direction) {
    case Direction.LEFT:
        operator = '-=';
        offset = -width;
        break;
    case Direction.RIGHT:
        operator = '+=';
        offset = width;
        break;
    default:
        return;
    }
    this.getDoor().animate({ left: operator + width }, duration, 'linear', complete);
    this.offset += offset;
};

Shoji.prototype.toggle = function(direction, duration) {
    var offset = this.offset;
    var leftPanel = this.getLeftPanel();
    var rightPanel = this.getRightPanel();
var content = $(".shoji-door");
    alert(content.outerWidth());
    
    switch (direction) {
    case Direction.LEFT:
        if (offset < 0) { // left
            this.slide(Direction.RIGHT, -offset, duration, function() { rightPanel.hide(); });
            $("#footer").css('left', '0px', 'position', 'relative');
        } else if (offset == 0) { // docked
            rightPanel.show();
            this.slide(Direction.LEFT, rightPanel.width(), duration);
            $("#footer").css({'left':'-265px', 'position':'relative'});

        } else if (offset > 0) { // right
            this.slide(Direction.LEFT, offset, duration, function() {
                leftPanel.hide();
                rightPanel.show();
                this.slide(Direction.LEFT, rightPanel.width(), duration);
                $("#footer").css({'left':'265px', 'position':'relative'});
            });
        }
        break;
    case Direction.RIGHT:
        if (offset < 0) { // left
            this.slide(Direction.RIGHT, -offset, duration, function() {
                rightPanel.hide();
                leftPanel.show();
                this.slide(Direction.RIGHT, leftPanel.width(), duration);
                $("#footer").css({'left':'265px', 'position':'relative', 'width':'52%'});
            });
        } else if (offset == 0) { // docked
            leftPanel.show();
            this.slide(Direction.RIGHT, leftPanel.width(), duration);
            $("#footer").css({'left': '265px', 'position': 'relative', 'width': '52%'});
        } else if (offset > 0) { // right
            this.slide(Direction.LEFT, offset, duration, function() { leftPanel.hide(); });
            $("#footer").css({'left':'0px', 'width': '100%'});
        }
        break;
    }
};

$(function() {
    var shoji = new Shoji('#shoji');
    $('[data-slide]').click(function() { shoji.toggle($(this).data('slide'), 100); });
});