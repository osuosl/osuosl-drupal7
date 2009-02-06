Drupal.behaviors.osuosl = function (context) {
    // Replace search engine-friendly site name with one with pseudocode elements
    var openBracket = new Array("{ ","// ","/* ","< ","[ ","( ","s/","# ");
    var closeBracket = new Array(" }"," //"," */"," >"," ]"," );","/"," ");
    var spaceReplace = new Array(".","_"," ");
    var randBracket = Math.floor(Math.random() * openBracket.length);
    var randSpace = Math.floor(Math.random() * spaceReplace.length);
//    $newElement = '<h1 id="site-name"><a rel="home" title="Home" href="/">' + openBracket[randBracket] + 'open' + spaceReplace[randSpace] + 'source' + spaceReplace[randSpace] + 'lab' + closeBracket[randBracket] +'</a></h1>';
//    $("#site-name").before($newElement).remove(); 

$(".submit-img input").hover(
 function()
  {
    this.src = this.src.replace("_off","_on");
  },
 function()
  {
    this.src = this.src.replace("_on","_off");
  }
);
$("img").hover(
 function()
  {
    this.src = this.src.replace("_off","_on");
  },
 function()
  {
    this.src = this.src.replace("_on","_off");
  }
);
$("input").hover(
 function()
  {
    this.css = this.css.replace("_off","_on");
  },
 function()
  {
    this.css = this.css.replace("_on","_off");
  }
);
//$("#search input").hover(
// function()
//  {
//    this.type = this.type.replace("submit","image");
//    this.src = "/sites/d6.osuosl.org/themes/zen/osuosl/img/searchbutton_on.png";
//  },
//  function()
//  {
//    this.src = "/sites/d6.osuosl.org/themes/zen/osuosl/img/searchbutton_off.png";
//  }
//);
};
