// accordion.js 
   $(function () {
    $('ul.drawers').accordion({
      header: 'h2.drawer-handle',
      selectedClass: 'open',
      animated: function(options) { //easeOutBounce, bounceslide, easeslide
         return options.down ? "easeInOutCubic" : "easeInOutCubic"; },
      duration: function(options) { return options.down ? 700 : 400; },
      event: 'mouseover'
    });
   });
