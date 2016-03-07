var s,
Header = {

  settings: {
    window: $(window),
    document: $(document),
    mainHeader: $(".main-header"),
    popularNav: $(".popular-wrapper"),
    menuItem: $(".main-menu .tree-menu"),
    subMenuItem: $(".submenu")
  },

  init: function() {
    s = this.settings;
    this.changeHeaderOnScroll();
    this.subMenuControl();
  },

  changeHeaderOnScroll: function() {
    s.window.bind("scroll", function() {
      if(s.document.scrollTop() > 200) {
      	s.mainHeader.addClass("scroll");
    	s.popularNav.hide();
      } else {
     	s.mainHeader.removeClass("scroll");
    	s.popularNav.show();
      }
    });
  },

  subMenuControl: function() {
    s.menuItem.on("mouseover", function() {
    	child = $(this).attr('data-child');
    	$("[data-id='"+child+"']").show();
    });

    s.menuItem.on("mouseout", function() {
    	child = $(this).attr('data-child');
    	$("[data-id='"+child+"']").hide();
    });

    s.subMenuItem.on("mouseover", function() {
    	$(this).show();
    });

    s.subMenuItem.on("mouseout", function() {
    	$(this).hide();
    });
  }

};

$(document).ready(function(){
  Header.init();
});