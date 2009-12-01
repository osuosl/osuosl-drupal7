Drupal.behaviors.osuosl = function (context) {
jQuery.preloadImages = function()
{
  for(var i = 0; i<arguments.length; i++)
  {
    jQuery("<img>").attr("src", arguments[i]);
  }
}
$.preloadImages('/sites/osuosl.org/themes/zen/osuosl/img/searchbutton_on.png','/sites/osuosl.org/themes/zen/osuosl/img/searchbutton_off.png','/sites/osuosl.org/themes/zen/osuosl/img/1.png','/sites/osuosl.org/themes/zen/osuosl/img/2.png','/sites/osuosl.org/themes/zen/osuosl/img/3.png','/sites/osuosl.org/themes/zen/osuosl/img/4.png','/sites/osuosl.org/themes/zen/osuosl/img/5.png');
// Replace search form search button with image
$("#search input").hover(
  function()
    {
        this.src = "/sites/osuosl.org/themes/zen/osuosl/img/searchbutton_on.png";
        this.type = this.type.replace("submit","image");
    },
    function()
    {
        this.src = "/sites/osuosl.org/themes/zen/osuosl/img/searchbutton_off.png";
    }
  );

// Donation block rollover
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

// generic image rollover event
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
// apply PNG alpha fix to all png images 
$.ifixpng('/sites/osuosl.org/files/pixel.gif');
$('img[@src$=.png]').ifixpng(); 
};
